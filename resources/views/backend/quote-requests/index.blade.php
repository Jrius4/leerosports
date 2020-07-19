@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS Dashboard | Quote Requests index')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Quote Requests</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="breadcrumb-item active">Quote Requests</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>


      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div>
                    <h3 class="card-title mb-2">Quote Requests</h3>
                </div>
                <div class="clearfix"></div>
                <div class="row d-flex justify-content-between">
                    <div class="mr-auto">
                        <a href="{{ route('backend.quote-requests.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <div class="ml-auto" style="padding:7px 0;">
                        <?php $links = [] ?>
                        @foreach($statusList as $key => $value)
                            @if($value)
                                <?php $selected = Request::get('status') == $key ? 'selected-status' : '' ?>
                                <?php $links[] = "<a class=\"{$selected}\" href=\"?status={$key}\">" . ucwords($key) . "({$value})</a>" ?>
                            @endif
                        @endforeach
                        {!! implode(' | ', $links) !!}
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('backend.partials.message')
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                    <td width="80">Action</td>
                                    <td>Company</td>
                                    <td>Client Email</td>
                                    <td width="150">Field</td>
                                    <td width="80">View Request</td>
                                </tr>
                    </thead>
                  <tbody>
                    @if (! $quote_requests->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else
                        @if($onlyTrashed)
                            @include('backend.quote-requests.table-trash')
                        @else
                            @include('backend.quote-requests.table')
                        @endif
                    @endif
                  </tbody>
                  <tfoot>
                    <tr>
                        <td width="80">Action</td>
                        <td>Company</td>
                        <td>Client Email</td>
                        <td width="150">Field</td>
                        <td width="80">View Request</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card card-footer">
                    <div class="box-footer clearfix">
                        <div class="pull-left">
                            {{ $quote_requests->appends( Request::query() )->render() }}
                        </div>
                        <div class="pull-right">
                            <small>{{ $quote_requestCount }} {{ str_plural('Item', $quote_requestCount) }}</small>
                        </div>
                    </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->




@endsection
@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection


