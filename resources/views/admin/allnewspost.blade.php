@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All News Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">All News Post</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-info">
                        <span class="info-box-icon"><i class="far fa-heart"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">All News Post</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-success">
                        <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Active News</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-danger">
                        <span class="info-box-icon"><i class="far fa-thumbs-down"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">InActive News</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-gradient-warning">
                        <span class="info-box-icon"><i class="fas fa-video"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Breaking News</span>
                            <span class="info-box-number">41,410</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="addbtn float-sm-right">
                        <a href="/add/news/post" class="btn btn-primary btn-block" role="button" aria-pressed="true"><i class="fas fa-user-plus"></i> Add News Post</a>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 10%">
                                Image
                            </th>
                            <th>
                                Title
                            </th>
                            <th>
                               Category
                            </th>
                            <th>
                               User
                            </th>
                            <th>
                               Date
                            </th>
                            <th style="width: 8%" class="text-center">
                                Status
                            </th>
                            <th style="width: 20%" class="text-center">
                             Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                            </td>
                            <td>
                              <P>Lorem ipsum dolor sit amet...</P> 
                            </td>
                            <td>
                              <P>ENTERTAINMENT</P> 
                            </td>
                            <td>
                              <P>Raju</P> 
                            </td>
                            <td>
                              1 Week ago 
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td class="project-actions text-center">
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    
                                </a>
                                <a class="btn bg-purple btn-sm" href="#">
                                    <i class="fas fa-thumbs-down">
                                    </i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar4.png">
                            </td>
                            <td>
                              <P>Lorem ipsum dolor sit amet...</P> 
                            </td>
                            <td>
                              <P>ENTERTAINMENT</P> 
                            </td>
                            <td>
                              <P>suman</P> 
                            </td>
                            <td>
                              1 Week ago 
                            </td>
                            <td class="project-state">
                                <span class="badge badge-danger">InActive</span>
                            </td>
                            <td class="project-actions text-center">
                                
                                <a class="btn btn-info btn-sm" href="#">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    
                                </a>
                                <a class="btn bg-purple btn-sm" href="#">
                                    <i class="fas fa-thumbs-up">
                                    </i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection