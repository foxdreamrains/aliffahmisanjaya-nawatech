@extends('layouts.appuseradmin')
@section('title', '')
@section('css')
<style>
  .info{
    margin-top: 10px;
  }
</style>
@endsection
@section('content')
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: black;">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link" style="text-align: center;">
      <img width="80" src="">
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: black;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="info">

          <a href="#" class="d-block" style="text-decoration: none; color: white;"><h5 style="font-family: 'Truculenta', sans-serif;"><b>{{date('l, d - m - Y') }}</b></h5> </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Seting</li>
          <li class="nav-item">
            <a href="{{ route('cmsnpwp') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Download NPWP
              </p>
            </a>
          </li>

          </ul>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background: white;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">NPWP</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Download</li>
              <li class="breadcrumb-item active">NPWP</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>NPWP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Download</li>
              <li class="breadcrumb-item active">NPWP</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="{{ route('cmsuserAdd') }}" >
                            <button type="button" class="btn btn-success" style="border-radius: 2px 10px 0px 15px; background: white; color: black; font-weight: bolder;border: solid 4px seagreen;">+ Add User</button>
                        </a>


                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>FIle ZIP</th>
                                            <th>FIle EXCEL</th>
                                            <th>NPWP</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach($file as $f)
                                        @if($f->users_id ==  Auth::user()->id )
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>
                                                <span style="font-size: 0.8rem; color: #62200a">{{ $f->file_zip }}</span>
                                            </td>
                                            <td>
                                                <span style="font-size: 0.8rem; color: #62200a">{{ $f->file_excel }}</span>
                                            </td>

                                            <td>{{ $f->user->npwp }}</td>
                                            <td>
                                                <a href="{{ route('cmsnpwpDownloadStore', $f->id_file) }}" class="btn btn-sm" style="background: green; color: white;">Download</a>

                                            </td>

                                        </tr>
                                        @else
                                        @endif
                                        <?php $no++; ?>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>


                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>

            <!-- /.content -->
        </div>
    </section>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    @endsection
