@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Roles & Permissions</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Manage Roles & Permissions</li>
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
                                <div class="col-md-7">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title"># List of Roles</h3>

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
                                                <div class="card-body table-responsive p-0" style="height: 480px;">
                                                    <table class="table table-head-fixed text-nowrap" id="roles" >
                                                        <thead>
                                                            <tr>
                                                                <th>S.r</th>
                                                                <th>Roles Name</th>
                                                                <th>Status</th>
                                                                <th>Created By</th>
                                                                <th>Created on</th>
                                                                <th class="text-center" width='15%'>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="rolesTable">
                                                            @php
                                                            $srid = 1;
                                                            @endphp
                                                            @foreach ($RolesData as $item)
                                                            <tr>
                                                                <td>{{ $srid }}</td>
                                                                <td>{{ $item->Role }}</td>
                                                                <td><span class="badge {{ $item->status == '1' ? 'badge-success' : 'badge-danger' }}">{{ $item->status == '1' ? 'Active' : 'InActive' }}</span></td>
                                                                <td>{{ $item->CreatedBy }}</td>
                                                                <td>{{ $item->created_at }}</td>
                                                                <td class="text-center d-flex justify-content-between">
                                                                    <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#staticBackdrop{{ $item->Id }}">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                    <form action="{{ route('roles.destroy', $item->Id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm delete-button">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                    <form action="{{ route('roles.status', $item->Id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button type="submit" class="btn btn-sm bg-purple">
                                                                        <i class="{{ $item->status == '1' ? 'fas fa-thumbs-down' : 'fas fa-thumbs-up' }}"></i>
                                                                        <input type="hidden" name="Roles_Status" value="{{ $item->status == '1' ? '0' : '1' }}">
                                                                    </button>
                                                                    </form>
                                                                </td>                                                                
                                                            </tr>
                                                            <tr>
                                                                 <!-- Modal -->
                                                                <div class="modal fade" id="staticBackdrop{{ $item->Id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" id="roles-modal-header">
                                                                                <h5 class="modal-title" id="staticBackdropLabel"># Edit Roles</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                              <!-- form start -->
                                                                            <form method="POST" id="edit_rolesform" action = "/manage/roles/update/{{ $item->Id }}" >
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label for="InputEditName">Roles Name</label>
                                                                                        <input type="text" class="form-control" id="InputEditName" name="role_name" placeholder="Enter Roles Name" autocomplete="off" value="{{ old('e_name', $item->Role)  }}">
                                                                                        @error('role_name')
                                                                                        <span id="InputEditName-error" class="error text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputdate">Creation Date</label>
                                                                                        <input type="date" class="form-control" id="exampleInputdate" placeholder="Date" autocomplete="off" value="{{ date('Y-m-d') }}" readonly>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="InputEditCreatedBy">Created By</label>
                                                                                        <input type="text" class="form-control" id="InputEditCreatedBy" name="role_createdby" placeholder="Enter Your Name" autocomplete="off" value="{{ old('e_createdBy', $item->CreatedBy) }}">
                                                                                        @error('role_createdby')
                                                                                        <span id="InputEditCreatedBy-error" class="error text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <span class="statuslabel">Status</span>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <div class="custom-control custom-radio">
                                                                                                    <input class="custom-control-input" type="radio" id="edit_role_status1" name="edit_role_status" value="1" {{ ( ($item->status) == '1') ? 'checked' : '' }}>
                                                                                                    <label for="edit_role_status1" class="custom-control-label">Active</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <div class="custom-control custom-radio">
                                                                                                    <input class="custom-control-input" type="radio" id="edit_role_status2" name="edit_role_status" value="0" {{ (  ($item->status) == '0') ? 'checked' : '' }}>
                                                                                                    <label for="edit_role_status2" class="custom-control-label">InActive</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                       
                                                                                        <div class="col-12">
                                                                                            @error('role_status')
                                                                                            <span id="exampleInputname-error" class="error text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title"># Add New Roles</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card">
                                                    <div class="card-header bg-lime">
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <!-- form start -->
                                                    <form action="/manage/roles/store" method="POST">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="Roles_Name">Roles Name</label>
                                                                <input type="text" class="form-control" name="Roles_Name" id="Roles_Name" value="{{ old('Roles_Name') }}" placeholder="Enter roles Name" autocomplete="off">
                                                                @error('Roles_Name')
                                                                <span id="Roles_Name-error" class="error text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputdate">Creation Date</label>
                                                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Date" autocomplete="off" value="{{ date('Y-m-d') }}" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Roles_CreatedBy">Created By</label>
                                                                <input type="text" class="form-control" name="Roles_CreatedBy" id="Roles_CreatedBy" value="{{ old('Roles_CreatedBy') }}" placeholder="Enter Your Name" autocomplete="off">
                                                                @error('Roles_CreatedBy')
                                                                <span id="Roles_CreatedBy-error" class="error text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <span class="statuslabel">Status</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="custom-control-input" name="Roles_Status" type="radio" id="Roles_Status1" value="1" {{ (old('Roles_Status') && old('Roles_Status') == '1') ? 'checked' : '' }}>
                                                                            <label for="Roles_Status1" class="custom-control-label">Active</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="custom-control custom-radio">
                                                                        <input class="custom-control-input" type="radio" name="Roles_Status" id="Roles_Status2" value="0" {{ (old('Roles_Status') && old('Roles_Status') === '0') ? 'checked' : '' }}>
                                                                        <label for="Roles_Status2" class="custom-control-label">InActive</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                @error('Roles_Status')
                                                                <span id="exampleInputname-error" class="error text-danger">{{ $message }}</span>
                                                                @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="bg-info btn btn-lg">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title"># List of Permissions</h3>

                                                    <div class="card-tools">
                                                        <div class="input-group input-group-sm" style="width: 150px;">
                                                            <input type="text" name="table_search"  id="table_search" class="form-control float-right" placeholder="Search">

                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-default">
                                                                    <i class="fas fa-search"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0" style="height: 480px;">
                                                    <table class="table table-head-fixed text-nowrap" id="permissions">
                                                        <thead>
                                                            <tr>
                                                                <th>S.r</th>
                                                                <th>Action Menu</th>
                                                                <th>Permissions Name</th>
                                                                <th>Status</th>
                                                                <th>Created By</th>
                                                                <th>Created on</th>
                                                                <th class="text-center" width="13.4%">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="permissionsTable">
                                                            @php
                                                            $srid = 1;
                                                            @endphp
                                                            @foreach ($PermissionsData as $item)
                                                            <tr>
                                                                <td>{{ $srid }}</td>
                                                                <td>{{ $item->action_menu }}</td>
                                                                <td>{{ $item->permission }}</td>
                                                                <td><span class="badge {{ $item->status == '1' ? 'badge-success' : 'badge-danger' }}">{{ $item->status == '1' ? 'Active' : 'InActive' }}</span></td>
                                                                <td>{{ $item->CreatedBy }}</td>
                                                                <td>{{ $item->created_at }}</td>
                                                                <td class="text-center d-flex justify-content-between">
                                                                    <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#staticBackdrop{{ $item->Id }}">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                    <form action="{{ route('permissions.destroy', $item->Id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm delete-button">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                    <form action="{{ route('permissions.status', $item->Id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <button type="submit" class="btn btn-sm bg-purple">
                                                                            <i class="{{ $item->status == '1' ? 'fas fa-thumbs-down' : 'fas fa-thumbs-up' }}"></i>
                                                                            <input type="hidden" name="Permissions_Status" value="{{ $item->status == '1' ? '0' : '1' }}">
                                                                        </button>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <!-- Modal -->
                                                                <div class="modal fade" id="staticBackdrop{{ $item->Id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" id="permissions-modal-header">
                                                                                <h5 class="modal-title" id="staticBackdropLabel"># Edit Permissions</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <!-- form start -->
                                                                            <form method="POST" id="edit_permissionsform" action="/manage/permissions/update/{{ $item->Id }}">
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label for="edit_action_menu">Action Menu</label>
                                                                                        <input type="text" class="form-control" id="edit_action_menu" name="edit_action_menu" placeholder="Enter Action Menu" autocomplete="off" value="{{ old('edit_action_menu', $item->action_menu) }}">
                                                                                        @error('edit_action_menu')
                                                                                        <span id="edit_action_menu-error" class="error text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="edit_permission_name">Permissions Name</label>
                                                                                        <input type="text" class="form-control" id="edit_permission_name" name="edit_permission_name" placeholder="Enter Permissions Name" autocomplete="off" value="{{ old('edit_permission_name', $item->permission) }}">
                                                                                        @error('edit_permission_name')
                                                                                        <span id="edit_permission_name-error" class="error text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputdate">Creation Date</label>
                                                                                        <input type="date" class="form-control" id="exampleInputdate" placeholder="Date" autocomplete="off" value="{{ date('Y-m-d') }}" readonly>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="edit_permission_createdby">Created By</label>
                                                                                        <input type="text" class="form-control" id="edit_permission_createdby" name="edit_permission_createdby" placeholder="Enter Your Name" autocomplete="off" value="{{ old('permission_createdby', $item->CreatedBy) }}">
                                                                                        @error('edit_permission_createdby')
                                                                                        <span id="edit_permission_createdby-error" class="error text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-12">
                                                                                            <span class="statuslabel">Status</span>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <div class="custom-control custom-radio">
                                                                                                    <input class="custom-control-input" type="radio" id="edit_permission_status1" name="edit_permission_status" value="1" {{ ( ($item->status) == '1') ? 'checked' : '' }}>
                                                                                                    <label for="edit_permission_status1" class="custom-control-label">Active</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <div class="custom-control custom-radio">
                                                                                                    <input class="custom-control-input" type="radio" id="edit_permission_status2" name="edit_permission_status" value="0" {{ (  ($item->status) == '0') ? 'checked' : '' }}>
                                                                                                    <label for="edit_permission_status2" class="custom-control-label">InActive</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            @error('edit_permission_status')
                                                                                            <span id="exampleInputname-error" class="error text-danger">{{ $message }}</span>
                                                                                            @enderror
                                                                                        </div>
                                                                                    </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title"># Add New Permissions</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card">
                                                    <div class="card-header bg-fuchsia">
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <!-- form start -->
                                                    <form action="/manage/permissions/store" method="POST">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="action_menu">Action Menu</label>
                                                                <input type="text" class="form-control" id="action_menu" name="action_menu" value="{{ old('action_menu') }}" placeholder="Enter Roles Name" autocomplete="off">
                                                                @error('action_menu')
                                                                <span id="action_menu-error" class="error text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Permissions_name">Permissions Name</label>
                                                                <input type="text" class="form-control" id="Permissions_name" name="Permissions_name" value="{{ old('Permissions_name') }}" placeholder="Enter Roles Name" autocomplete="off">
                                                                @error('Permissions_name')
                                                                <span id="Permissions_name-error" class="error text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleInputdate">Creation Date</label>
                                                                <input type="date" class="form-control" id="exampleInputdate" placeholder="Date" autocomplete="off" value="{{ date('Y-m-d') }}" readonly>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Permissions_createdBy">Created By</label>
                                                                <input type="text" class="form-control" id="Permissions_createdBy" name="Permissions_createdBy" value="{{ old('Permissions_createdBy') }}" placeholder="Enter Your Name" autocomplete="off">
                                                                @error('Permissions_createdBy')
                                                                <span id="Permissions_createdBy-error" class="error text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <span class="statuslabel">Status</span>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="custom-control-input" type="radio" id="customRadio5" name="Permissions_status" value="1"{{ (old('Permissions_status') && old('Permissions_status') == '1') ? 'checked' : '' }}>
                                                                            <label for="customRadio5" class="custom-control-label">Active</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-radio">
                                                                            <input class="custom-control-input" type="radio" id="customRadio6" name="Permissions_status" value="0"{{ (old('Permissions_status') && old('Permissions_status') == '1') ? 'checked' : '' }}>
                                                                            <label for="customRadio6" class="custom-control-label">InActive</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    @error('Permissions_status')
                                                                    <span id="exampleInputname-error" class="error text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="bg-fuchsia btn btn-lg">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="card-title"> # Access Control</h3>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card">
                                                    <div class="card-header bg-warning">
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <!-- form start -->
                                                    <form action="{{ route("store.access.menu") }}" method="POST">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" name="permissionall" type="checkbox" id="permissionall" value="all">
                                                                            <label for="permissionall" class="custom-control-label">Permission All</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    <div class="form-group col-lg-4">
                                                                        <label for="inputStatus">Select Roles Name</label>
                                                                        <select id="inputStatus" name="roles" class="form-control custom-select">
                                                                            <option selected="" disabled="">Select one</option>
                                                                            @foreach($RolesName as $id => $name)
                                                                            <option value="{{ $name }}">{{ $name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <hr id="access-control">
                                                            @php
                                                               // print_r($ActionMenu);
                                                            @endphp
                                                            @foreach ($ActionMenu as $menu)
                                                            
                                                            <div class="row mt-3">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" type="checkbox" name="accessmenu[]"  id="customCheckbox{{ $menu }}" value="{{ $menu }}">
                                                                            <label for="customCheckbox{{ $menu }}" class="custom-control-label">{{ $menu }}</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8">
                                                                    @foreach ($PermissionsData as $item)
                                                                    {{-- @if (str_contains($item->permission, $menu)) --}}
                                                                    @if (strpos($item->permission, $menu) === 0 && $item->status == 1)
                                                                    <div class="form-group">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" type="checkbox" name="permission[]" id="customCheckbox{{ $item->permission }}" value="{{ $item->permission }}">
                                                                            <label for="customCheckbox{{ $item->permission }}" class="custom-control-label">{{ $item->permission }}</label>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                           
                                                            
                                                        </div>
                                                        <!-- /.card-body -->

                                                        <div class="card-footer">
                                                            <button type="submit" class="bg-warning btn btn-lg">Submit</button>
                                                        </div>
                                                    </form>
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
@push('style')
<!-- Page specific styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css">


@endpush
@push('scripts')
<!-- Page specific script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>


<script>
    $(document).ready(function(){
      $("#table_search").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#rolesTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      }); 
    });
</script>
<script>
    $(document).ready(function() {
      $('#permissionall').click(function() {
        var isChecked = $(this).prop('checked');
        let element = isChecked;
        $('input[name="permission[]"]').prop('checked', isChecked);
        $('input[name="accessmenu[]"]').prop('checked', isChecked);
      });
    
      $('input[name="permission[]"]').click(function() {
        var countChecked = $('input[name="permission[]"]:checked').length;
        var parentRow = $(this).closest('.row');
        var accessmenuCheckbox = parentRow.find('input[name="accessmenu[]"]');
        accessmenuCheckbox.prop('checked', $(this).prop('checked'));

        var allChecked = $('input[name="permission[]"]').length === $('input[name="permission[]"]:checked').length;
        $('#permissionall').prop('checked', allChecked);

        // Update the checked status of "permissionall" checkbox
        if (countChecked > 0) {
        $('#permissionall').prop('checked', true);
        } else {
        $('#permissionall').prop('checked', false);
        }
      });

      $('input[name="accessmenu[]"]').click(function () { 
        var countChecked = $('input[name="accessmenu[]"]:checked').length;
        if (countChecked > 0) {
        $('#permissionall').prop('checked', true);
        } else {
        $('#permissionall').prop('checked', false);
        }
      });
    });
</script>
<script>
    $(document).ready(function() {
      // When "accessmenu[]" checkbox is clicked
      $('input[name="accessmenu[]"]').click(function() {
        var parentRow = $(this).closest('.row');
        var thisrowpermission = parentRow.find('input[name="permission[]"]');
        thisrowpermission.prop('checked', $(this).prop('checked'));
       
      });
    });
    </script>
<script>
    @if(Session::has('message'))
        toastr.success("{{ session('message') }}", "Success");
        toastr.options = 
        {
        "closeButton": true,
        "progressBar": true
        }
    @endif
    @if(Session::has('error'))
        toastr.error("{{ session('error') }}", "Error");
        toastr.options = 
        {
        "closeButton": true,
        "progressBar": true
        }
    @endif

    $(document).ready(function() {
    $('.delete-button').on('click', function(event) {
        event.preventDefault();
        
        var form = $(this).closest('form');
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});

</script>
@endpush