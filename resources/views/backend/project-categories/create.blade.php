@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS Dashboard  | Create new project category')

@section('content')


       <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1><h1>
                    Project Categories
                    <small>Create New category</small></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('backend.project-categories.index') }}">Project Categories</a></li>
                  <li class="breadcrumb-item active">Create New Project Category</li>
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
                      <h3>Create Category</h3>
                    </div>
                  </div>
              {!! Form::model($category, [
                  'method' => 'POST',
                  'route'  => 'backend.project-categories.store',
                  'files'  => TRUE,
                  'id' => 'category-form'
              ]) !!}

              <div class="row d-flex justify-content-between">
                @include('backend.project-categories.form')
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

@include('backend.project-categories.script')
