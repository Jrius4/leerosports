@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS Dashboard  | Delete Confirmation')

@section('content')


      <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><h1>
                            Users
                            <small>Delete Confirmation</small></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('backend.users.index') }}">Users</a></li>
                        <li class="breadcrumb-item active">Delete Confirmation</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>



      <!-- Main content -->
      <section class="content">
          <div class="row">
              {!! Form::model($user, [
                  'method' => 'DELETE',
                  'route'  => ['backend.users.destroy', $user->id],
              ]) !!}

              <div class="col-xs-9">
                  <div class="card">
                      <div class="card-body ">
                          <p>
                              You have specified this user for deletion:
                          </p>
                          <p>
                              ID #{{ $user->id }}: {{ $user->name }}
                          </p>
                          <p>
                              What should be done with content own by this user?
                          </p>
                          <p>
                              <input type="radio" name="delete_option" value="delete" checked> Delete All Content
                          </p>

                          <p>
                              <input type="radio" name="delete_option" value="attribute"> Attribute content to:
                              {!! Form::select('selected_user', $users, null) !!}
                          </p>

                      </div>
                      <div class="card-footer">
                          <button type="submit" class="btn btn-danger">Confirm Deletion</button>
                          <a href="{{ route('backend.users.index') }}" class="btn btn-default">Cancel</a>
                      </div>
                  </div>
              </div>

            {!! Form::close() !!}
          </div>
        <!-- ./row -->
      </section>
      <!-- /.content -->


@endsection
