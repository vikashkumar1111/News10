@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">View Roles & Permissions</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">View Roles & Permissions</li>
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header bb-25-y">
                                                    <h3 class="card-title"> # Access Control</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                    <!-- table start -->
                                                    <div class="card-body p-2 table-responsive">
                                                        <table class="table table-striped projects">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 5%">#</th>
                                                                    <th style="width: 20%">Roles Name</th>
                                                                    <th>Permissions</th>
                                                                    <th style="width: 20%" class="text-center">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @php
                                                                    $srid = 1;
                                                                @endphp
                                                                @foreach ($AccessData as $item)
                                                                <tr>
                                                                    <td>{{ $srid }}</td>
                                                                    <td>{{ $item->roles }}</td>
                                                                    @php
                                                                       $permission_access = explode(',', $item->access_permission);
                                                                    @endphp
                                                                    {{-- <td><span class="badge badge-danger">Admin.menu</span><br>{{ print_r($item->access_permission) }}</td> --}}
                                                                    <td>
                                                                        @foreach ( $permission_access as $permission)
                                                                        <span class="badge badge-danger">{{ $permission }}</span>
                                                                        @endforeach
                                                                    </td>
                                                                    <td class="project-actions text-center" style="text-wrap: nowrap;">
                                                                        <a class="btn btn-info btn-sm" href="#">
                                                                            <i class="fas fa-pencil-alt"> Edit</i>
                                                                        </a>
                                                                        <a class="btn btn-danger btn-sm" href="#">
                                                                            <i class="fas fa-trash"> Delete</i>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                @php
                                                                $srid++;
                                                                @endphp
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@push('scripts')
<!-- Page specific script -->
<script>
    $(document).ready(function() {

    });
</script>
@endpush