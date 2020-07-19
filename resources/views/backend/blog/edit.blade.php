@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS | Edit Post')

@section('content')


          <!-- Content Header (Page header) -->
          <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Blog <small>Edit post</small></h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('backend.blog.index') }}">Blog</a></li>
                      <li class="breadcrumb-item active">Edit Post</li>
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
                    <h3>Edit Post</h3>
                  </div>
                </div>
                    {!! Form::model($post, [
                        'method' => 'PUT',
                        'route'  => ['backend.blog.update', $post->id],
                        'files'  => TRUE,
                        'id' => 'post-form'
                    ]) !!}

                <div class="row d-flex justify-content-between">
                  @include('backend.blog.form')
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

@include('backend.blog.script')
