@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS Dashboard  | Users')

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Users
                  <small> Display All users</small></h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                {{-- <li class="breadcrumb-item"><a href="{{ route('backend.users.index') }}"><i class="nav-icon fas fa-users"></i> Users</a></li> --}}
                <li class="breadcrumb-item active">All users</li>
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
                      <h3 class="card-title mb-2">Users</h3>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row justify-content-between">
                      <div class="mr-auto">
                          <a href="{{ route('backend.users.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
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
                              <td>Name</td>
                              <td>Email</td>
                              <td>Role</td>
                          </tr>
                      </thead>
                    <tbody>
                      @if (! $users->count())
                          <div class="alert alert-danger">
                              <strong>No record found</strong>
                          </div>
                      @else
                          @include('backend.users.table')
                      @endif
                    </tbody>
                    <tfoot>
                      <tr>
                          <td width="80">Action</td>
                          <td>Name</td>
                          <td>Email</td>
                          <td>Role</td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card card-footer">
                    <div class="clearfix">
                        <div class="ml-auto">
                            {{ $users->appends( Request::query() )->render() }}
                        </div>
                        <div class="mr-auto">
                            <small>{{ $usersCount }} {{ str_plural('Item', $usersCount) }}</small>
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
