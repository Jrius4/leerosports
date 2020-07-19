@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS | Project Categories')

@section('content')

      <!-- Content Header (Page header) -->

      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Project Categories
                    <small> Display All Project categories</small></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="/home"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                  {{-- <li class="breadcrumb-item"><a href="{{ route('backend.users.index') }}"><i class="nav-icon fas fa-users"></i> Users</a></li> --}}
                  <li class="breadcrumb-item active">All Project categories</li>
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
                <div class="card-header clearfix">
                    <div class="mr-auto">
                        <a href="{{ route('backend.project-categories.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    </div>
                    <div class="ml-auto">
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="card-body ">
                    @include('backend.partials.message')
                    <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <td width="80">Action</td>
                                  <td>Category Name</td>
                                  <td width="120">Project Count</td>
                              </tr>
                          </thead>
                        <tbody>
                    @if (! $categories->count())
                        <div class="alert alert-danger">
                            <strong>No record found</strong>
                        </div>
                    @else
                        @include('backend.project-categories.table')
                    @endif
                  </tbody>
                  <tfoot>
                      <tr>
                          <td width="80">Action</td>
                          <td>Category Name</td>
                          <td width="120">Project Count</td>
                      </tr>
                  </tfoot>
                </table>
              </div>
                <!-- /.box-body -->
                <div class="card-footer clearfix">
                    <div class="mr-auto">
                        {{ $categories->appends( Request::query() )->render() }}
                    </div>
                    <div class="ml-auto">
                        <small>{{ $categoriesCount }} {{ str_plural('Item', $categoriesCount) }}</small>
                    </div>
                </div>
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->


@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
