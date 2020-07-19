@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS | Create new Career category')

@section('content')


       <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1><h1>
                    Career Categories
                    <small>Create New  category</small></h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('backend.career-categories.index') }}">Service Categories</a></li>
                  <li class="breadcrumb-item active">Create New Category</li>
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
                      <h3>Create Career Category</h3>
                    </div>
                  </div>
              {!! Form::model($category, [
                  'method' => 'POST',
                  'route'  => 'backend.career-categories.store',
                  'files'  => TRUE,
                  'id' => 'category-form'
              ]) !!}

              <div class="row d-flex justify-content-between">
                @include('backend.career-categories.form')
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

@include('backend.career-categories.script')
