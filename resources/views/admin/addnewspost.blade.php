@extends('admin.layouts.app')
@push('style')
<!-- summernote -->
<link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
<!-- Include Bootstrap Tags Input CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">
@endpush
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add News Post</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add News Post</li>
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
                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <label for="inputStatus">Category Name</label>
                                            <select id="inputStatus" class="form-control custom-select">
                                                <option selected="" disabled="">Select one</option>
                                                <option>On Hold</option>
                                                <option>Canceled</option>
                                                <option>Success</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <label for="inputStatus">Subcategory</label>
                                            <select id="inputStatus" class="form-control custom-select">
                                                <option selected="" disabled="">Select one</option>
                                                <option>On Hold</option>
                                                <option>Canceled</option>
                                                <option>Success</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <label for="inputStatus">Writer</label>
                                            <select id="inputStatus" class="form-control custom-select">
                                                <option selected="" disabled="">Select one</option>
                                                <option>On Hold</option>
                                                <option>Canceled</option>
                                                <option>Success</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <label for="inputName">News Title</label>
                                            <input type="text" id="inputName" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <label for="customFile">News Post Photo</label>

                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="newsdetails">News Details</label>
                                            <textarea id="summernote" style="height: 800px;">Place <em>some</em> <u>text</u> <strong>here</strong></textarea>

                                        </div>
                                    </div>
                                    <!-- /.col-->
                                </div>
                                <!-- ./row -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <div class="tags-input mt-2 mb-2">Tags</div>
                                            <input type="text" value="" data-role="tagsinput" placeholder="Add tags" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="breaking_news">
                                                <label for="customCheckbox1" class="custom-control-label">Breaking News</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="top_slider">
                                                <label for="customCheckbox2" class="custom-control-label">Top Slider</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="first_section">
                                                <label for="customCheckbox3" class="custom-control-label">First Section</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group col-lg-8 col-sm-12">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="sidebar_news">
                                                <label for="customCheckbox4" class="custom-control-label">Sidebar News</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="bg-indigo btn btn-sm">Save Changes</button>
                                    </div>
                                </div>
                            </form>
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
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Include Bootstrap Tags Input JS -->
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tags-input').tagsinput();
    });
</script>
<script>
    $(function() {
        // Summernote
        $('#summernote').summernote({
            tabsize: 2,
            height: 300
        });
    })
</script>
@endpush