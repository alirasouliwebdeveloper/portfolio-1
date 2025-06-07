<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Alirasouli.ir</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            @auth()
                <div class="info">
                    <a href="{{ route('dashboard') }}" class="d-block">{{ auth()->user()->name }}</a>
                </div>
            @endauth
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('post.index') }}" class="nav-link" id="menu-post">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Post
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link" id="menu-category">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('portfolio.index') }}" class="nav-link" id="menu-portfolio">
                        <i class="nav-icon fas fa-won-sign"></i>
                        <p>
                            Portfolio
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('skill.index') }}" class="nav-link" id="menu-skill">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Skills
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.gallery') }}" class="nav-link" id="menu-gallery">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            File manager
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">
                        <i class="nav-icon fas fa-desktop"></i>
                        <p>
                            logout
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
