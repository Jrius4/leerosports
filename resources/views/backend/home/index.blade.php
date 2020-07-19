@extends('layouts.backend.main')

@section('title', 'LEEROSPORTS Dashboard  | Dashboar')

@section('content')

      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item active"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <!-- /.box-header -->
                <div class="card-body text-center">
                      <h3>Welcome to LEEROSPORTS Dashboard</h3>
                      <p class="lead text-muted">Hallo {{ Auth::user()->name }}, Welcome to LEEROSPORTS Dashboard</p>

                      <h4>Get started</h4>
                      <p><a href="{{ route('backend.blog.create') }}" class="btn btn-primary">Manage your blog post</a> </p>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
          </div>
        <!-- ./row -->

        <div class="row d-flex justify-content-between">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>Posts</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            <a href="{{route('backend.blog.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
      </section>
      <!-- /.content -->


@endsection
