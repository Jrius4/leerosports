@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS Dashboard | Add new user')

@section('content')


      <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1><h1>
                    Users
                    <small>Add new user</small></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('backend.users.index') }}">users</a></li>
                  <li class="breadcrumb-item active">Create User</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>


      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card card-primary shadow-sm p-2">
                    <div class="card-title">
                      <h3>Create User</h3>
                    </div>
                  </div>
              {!! Form::model($user, [
                  'method' => 'POST',
                  'route'  => 'backend.users.store',
                  'files'  => TRUE,
                  'id'     => 'user-form'
              ]) !!}

                <div class="row d-flex justify-content-between">
                    @include('backend.users.form')
                  </div>

            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <!-- ./row -->
    </div>
  </section>
      <!-- /.content -->


@endsection
@include('backend.users.script')

