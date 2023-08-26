<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" name="sidebar_menu_search" id="sidebar_menu_search" type="search" placeholder="Search" aria-label="Search">
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
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset ('/category') }}" class="nav-link">
                        <i class="fas fa-cart-arrow-down"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ asset ('/subcategory') }}" class="nav-link">
                        <i class="fas fa-cart-arrow-down"></i>
                        <p>Sub Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>
                            News Post Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ asset ('/all/news/post') }}" class="nav-link">
                                <i class="fas fa-cart-arrow-down"></i>
                                <p>All News Post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset ('/add/news/post') }}" class="nav-link">
                                <i class="fas fa-cart-plus"></i>
                                <p>Add News Post</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-comments"></i>
                        <p>
                            Review Setting
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ asset ('/pending/review') }}" class="nav-link">
                                <i class="fas fa-thumbs-down"></i>
                                <p>Pending Review</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset ('/approve/review') }}" class="nav-link">
                                <i class="fas fa-thumbs-up"></i>
                                <p>Approve Review</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">Setting</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>
                            Setting Admin User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ asset ('/all/admin') }}" class="nav-link">
                                <p>All Admin</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset ('/add/admin') }}" class="nav-link">
                                <p>Add Admin</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>
                            Roles & Permission
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="{{ asset ('/manage/roles/permissions') }}" class="nav-link">
                                <p>Manage Roles & Permissions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset ('/view/roles/permissions') }}" class="nav-link">
                                <p>View Roles & Permissions</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header" style="border-bottom: 1px solid #4f5962;"></li>
                <li class="nav-item">
                    <a href="{{ asset ('/logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>