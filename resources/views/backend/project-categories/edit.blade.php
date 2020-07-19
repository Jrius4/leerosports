@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS Dashboard | Edit Project category')

@section('content')




      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1><h1>
                    Project Categories
                    <small>Edit Project category</small></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('backend.project-categories.index') }}">Provice Categories</a></li>
                  <li class="breadcrumb-item active">Edit Project Category</li>
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
                      <h3>Edit Project Category</h3>
                    </div>
                  </div>
              {!! Form::model($category, [
                  'method' => 'PUT',
                  'route'  => ['backend.project-categories.update', $category->id],
                  'files'  => TRUE,
                  'id' => 'post-form'
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
