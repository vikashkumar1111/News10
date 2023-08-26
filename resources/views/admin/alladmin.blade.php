@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">All Admin</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"># All Admin <span class="bg-info btn btn-sm text-bold"> 5 </span></h3>

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
                        <!-- /.card-header -->
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
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Phone
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Status
                                        </th>
                                        <th style="width: 8%" class="text-center">
                                            Role
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
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                        </td>
                                        <td>
                                            <P>John wick</P>
                                        </td>
                                        <td>
                                            <P>jhon@example.com</P>
                                        </td>
                                        <td>
                                            <P>9197238945</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-info">Reporter</span>
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
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                        </td>
                                        <td>
                                            <P>John wick</P>
                                        </td>
                                        <td>
                                            <P>jhon@example.com</P>
                                        </td>
                                        <td>
                                            <P>9197238945</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-info">Reporter</span>
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
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                        </td>
                                        <td>
                                            <P>John wick</P>
                                        </td>
                                        <td>
                                            <P>jhon@example.com</P>
                                        </td>
                                        <td>
                                            <P>9197238945</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-info">Reporter</span>
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
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                        </td>
                                        <td>
                                            <P>John wick</P>
                                        </td>
                                        <td>
                                            <P>jhon@example.com</P>
                                        </td>
                                        <td>
                                            <P>9197238945</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-info">Reporter</span>
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
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar2.png">
                                        </td>
                                        <td>
                                            <P>John wick</P>
                                        </td>
                                        <td>
                                            <P>jhon@example.com</P>
                                        </td>
                                        <td>
                                            <P>9197238945</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-info">Reporter</span>
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
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
    <!--/.Main content -->
</div>
<!-- /.content-wrapper -->
@endsection