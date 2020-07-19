@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS | Edit Project')

@section('content')


          <!-- Content Header (Page header) -->
          <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Projects <small>Edit project</small></h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('backend.projects.index') }}">project</a></li>
                      <li class="breadcrumb-item active">Edit project</li>
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
                    <h3>Edit project</h3>
                  </div>
                </div>
                    {!! Form::model($project, [
                        'method' => 'PUT',
                        'route'  => ['backend.projects.update', $project->id],
                        'files'  => TRUE,
                        'id' => 'project-form'
                    ]) !!}

                <div class="row d-flex justify-content-between">
                  @include('backend.projects.form')
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

@include('backend.projects.script')
