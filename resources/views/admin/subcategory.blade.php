@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Subcategory</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Subcategory</li>
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
                                                    <h3 class="card-title"># List of Subcategory</h3>

                                                    <div class="card-tools">
                                                        <div class="input-group input-group-sm" style="width: 150px;">
                                                            <input type="text" name="subcategorySearch" id="subcategorySearch" class="form-control float-right" placeholder="Search">

                                                            <div class="input-group-append">
                                                                <button type="submit" class="btn btn-default">
                                                                    <i class="fas fa-search"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0" style="height: 600px;">
                                                    <table class="table table-head-fixed text-nowrap" id="subcategory" >
                                                        <thead>
                                                            <tr>
                                                                <th>S.r</th>
                                                                <th>SubCategory Name</th>
                                                                <th>Status</th>
                                                                <th>Created on</th>
                                                                <th>Created By</th>
                                                                <th class="text-center">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="subcategoryTable">
                                                            @php
                                                            $srid = 1;
                                                            @endphp
                                                            @foreach ($data as $item)
                                                            <tr>
                                                                <td>{{ $srid }}</td>
                                                                <td>{{ $item->Name }}</td>
                                                                <td><span class="badge {{ $item->status == '1' ? 'badge-success' : 'badge-danger' }}">{{ $item->status == '1' ? 'Active' : 'InActive' }}</span></td>
                                                                <td>{{ $item->created_at }}</td>
                                                                <td>{{ $item->CreatedBy }}</td>
                                                                <td class="text-center d-flex justify-content-between">
                                                                    <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#staticBackdrop{{ $item->Id }}">
                                                                        <i class="fas fa-pencil-alt"></i>
                                                                    </a>
                                                                    <form action="{{ route('subcategory.destroy', $item->Id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger btn-sm delete-button">
                                                                            <i class="fas fa-trash"></i>
                                                                        </button>
                                                                    </form>
                                                                    <form action="{{ route('subcategory.status', $item->Id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button type="submit" class="btn btn-sm bg-purple">
                                                                        <i class="{{ $item->status == '1' ? 'fas fa-thumbs-down' : 'fas fa-thumbs-up' }}"></i>
                                                                        <input type="hidden" name="status" value="{{ $item->status == '1' ? '0' : '1' }}">
                                                                    </button>
                                                                    </form>
                                                                </td>                                                                
                                                            </tr>
                                                            <tr>
                                                                 <!-- Modal -->
                                                                <div class="modal fade" id="staticBackdrop{{ $item->Id }}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header" id="category-modal-header">
                                                                                <h5 class="modal-title" id="staticBackdropLabel"># Edit SubCategory</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                              <!-- form start -->
                                                                            <form method="POST" id="edit_categoryform" action = "/subcategory/update/{{ $item->Id }}" >
                                                                                @csrf
                                                                                @method('PUT')
                                                                                <div class="modal-body">
                                                                                    <div class="form-group">
                                                                                        <label for="InputEditName">SubCategory Name</label>
                                                                                        <input type="text" class="form-control" id="InputEditName" name="e_name" placeholder="Enter Category Name" autocomplete="off" value="{{ old('e_name', $item->Name)  }}">
                                                                                        @error('e_name')
                                                                                        <span id="InputEditName-error" class="error text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="inputStatus">Select Category</label>
                                                                                        <select name="e_category" id="inputStatus" class="form-control custom-select">
                                                                                            <option selected="" disabled="">Select one</option>
                                                                                            
                                                                                            @foreach($categories as $id => $name)
                                                                                                <option value="{{ $id }}" {{ ( ($item->CatId) == $id) ? 'Selected' : '' }}>{{ $name }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        @error('category')
                                                                                        <span id="exampleInputname-error" class="error text-danger">{{ $message }}</span>
                                                                                        @enderror
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="exampleInputdate">Creation Date</label>
                                                                                        <input type="date" class="form-control" id="exampleInputdate" placeholder="Date" autocomplete="off" value="{{ date('Y-m-d') }}" readonly>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="InputEditCreatedBy">Created By</label>
                                                                                        <input type="text" class="form-control" id="InputEditCreatedBy" name="e_createdBy" placeholder="Enter Your Name" autocomplete="off" value="{{ old('e_createdBy', $item->CreatedBy) }}">
                                                                                        @error('e_createdBy')
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
                                                                                                    <input class="custom-control-input" type="radio" id="customRadio1" name="e_status" value="1" {{ ( ($item->status) == '1') ? 'checked' : '' }}>
                                                                                                    <label for="customRadio1" class="custom-control-label">Active</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-md-6">
                                                                                            <div class="form-group">
                                                                                                <div class="custom-control custom-radio">
                                                                                                    <input class="custom-control-input" type="radio" id="customRadio2" name="e_status" value="0" {{ (  ($item->status) == '0') ? 'checked' : '' }}>
                                                                                                    <label for="customRadio2" class="custom-control-label">InActive</label>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-12">
                                                                                            @error('e_status')
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
                                            <div class="card" id="flipcard">
                                                <div class="card-header">
                                                    <h3 class="card-title"># Add New Subcategory</h3>
                                                </div>
                                                    <!-- /.card-header -->
                                                    <div class="card">
                                                        <div class="card-header bg-info">
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->
                                                        <form action="/subcategory/store" method="POST">
                                                            @csrf
                                                            <div class="card-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputname">Subcategory Name</label>
                                                                    <input type="text" class="form-control" name="name" id="exampleInputname" value="{{ old('name') }}" placeholder="Enter Category Name" autocomplete="off">
                                                                    @error('name')
                                                                    <span id="exampleInputname-error" class="error text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="inputStatus">Select Category</label>
                                                                    <select name="category" id="inputStatus" class="form-control custom-select">
                                                                        <option selected="" disabled="">Select one</option>
                                                                        
                                                                        @foreach($categories as $id => $name)
                                                                            <option value="{{ $id }}">{{ $name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('category')
                                                                    <span id="exampleInputname-error" class="error text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputdate">Creation Date</label>
                                                                    <input type="date" class="form-control" id="exampleInputdate" placeholder="Date" autocomplete="off" value="{{ date('Y-m-d') }}" readonly>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputcreatedBy">Created By</label>
                                                                    <input type="text" class="form-control" name="createdBy" id="exampleInputcreatedBy" value="{{ old('createdBy') }}" placeholder="Enter Your Name" autocomplete="off">
                                                                    @error('createdBy')
                                                                    <span id="exampleInputname-error" class="error text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <span class="statuslabel">Status</span>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input class="custom-control-input" name="status" type="checkbox" id="customCheckbox1" value="1" {{ (old('status') && old('status') == '1') ? 'checked' : '' }}>
                                                                                <label for="customCheckbox1" class="custom-control-label">Active</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input class="custom-control-input" type="checkbox" name="status" id="customCheckbox2" value="0" {{ (old('status') && old('status') === '0') ? 'checked' : '' }}>
                                                                            <label for="customCheckbox2" class="custom-control-label">InActive</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                    @error('status')
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
      $("#subcategorySearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#subcategoryTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      }); 
    });
</script>
<script>
    $(document).ready(function() {
        // When a checkbox is clicked
        $('.custom-checkbox input[type="checkbox"]').on('click', function() {
            var $checkboxes = $(this).closest('.row').find('input[type="checkbox"]');

            // Uncheck all checkboxes
            $checkboxes.prop('checked', false);

            // Check the clicked checkbox
            $(this).prop('checked', true);
        });
    });
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