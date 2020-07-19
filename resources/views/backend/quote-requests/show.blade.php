@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS | View Quote Request')

@section('content')


          <!-- Content Header (Page header) -->
          <section class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1>Ndebitech <small>View Quote Request</small></h1>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="{{ url('/home') }}"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a></li>
                      <li class="breadcrumb-item"><a href="{{ route('backend.quote-requests.index') }}">Quote Requests</a></li>
                      <li class="breadcrumb-item active">View Quote Request</li>
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
                    <h3>View Quote Request</h3>
                  </div>
                </div>


                <div class="row d-flex justify-content-between">
                  @include('backend.quote-requests.show-contents')
                </div>


          </div>
        </div>
      </div>
      <!-- ./row -->
    </div>
  </section>
      <!-- /.content -->

@endsection

@include('backend.services.script')
