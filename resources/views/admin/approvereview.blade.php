@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Approve Review</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Approve Review</li>
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
                            <h3 class="card-title"># Approve Reviews <span class="bg-success btn btn-sm text-bold"> 7 </span></h3>

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
                                            News
                                        </th>
                                        <th>
                                            User
                                        </th>
                                        <th>
                                            Comment
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
                                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,..</P>
                                        </td>
                                        <td>
                                            <P>Raju</P>
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur.</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Publish</span>
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn bg-purple btn-sm" href="#">
                                                <i class="fas fa-trash"> Delete
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            #
                                        </td>
                                        <td>
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,..</P>
                                        </td>
                                        <td>
                                            <P>Raju</P>
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur.</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Publish</span>
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn bg-purple btn-sm" href="#">
                                                <i class="fas fa-trash"> Delete
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            #
                                        </td>
                                        <td>
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,..</P>
                                        </td>
                                        <td>
                                            <P>Raju</P>
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur.</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Publish</span>
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn bg-purple btn-sm" href="#">
                                                <i class="fas fa-trash"> Delete
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            #
                                        </td>
                                        <td>
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,..</P>
                                        </td>
                                        <td>
                                            <P>Raju</P>
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur.</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Publish</span>
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn bg-purple btn-sm" href="#">
                                                <i class="fas fa-trash"> Delete
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            #
                                        </td>
                                        <td>
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,..</P>
                                        </td>
                                        <td>
                                            <P>Raju</P>
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur.</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Publish</span>
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn bg-purple btn-sm" href="#">
                                                <i class="fas fa-trash"> Delete
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            #
                                        </td>
                                        <td>
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,..</P>
                                        </td>
                                        <td>
                                            <P>Raju</P>
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur.</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Publish</span>
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn bg-purple btn-sm" href="#">
                                                <i class="fas fa-trash"> Delete
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            #
                                        </td>
                                        <td>
                                            <img alt="Avatar" class="table-avatar" src="../../dist/img/avatar5.png">
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum,..</P>
                                        </td>
                                        <td>
                                            <P>Raju</P>
                                        </td>
                                        <td>
                                            <P>Lorem ipsum dolor sit amet consectetur.</P>
                                        </td>
                                        <td class="project-state">
                                            <span class="badge badge-success">Publish</span>
                                        </td>
                                        <td class="project-actions text-center">
                                            <a class="btn bg-purple btn-sm" href="#">
                                                <i class="fas fa-trash"> Delete
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