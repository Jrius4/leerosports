@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS Dashboard  | Add new Industry')

@section('content')



          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>Industries <small>Add new Industry</small></h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('backend.field-industries.index') }}">Industries</a></li>
                    <li class="breadcrumb-item active">Add new Industry</li>
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
                  <h3>Create Industry</h3>
                </div>
              </div>
                {!! Form::model($industry, [
                    'method' => 'POST',
                    'route'  => 'backend.field-industries.store',
                    'files'  => TRUE,
                    'id' => 'post-form'
                ]) !!}

                <div class="row d-flex justify-content-between">
                  @include('backend.field-industries.form')
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

@include('backend.field-industries.script')
