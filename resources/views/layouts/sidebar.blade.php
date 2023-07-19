<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('dist/img/logo.jpg') }}" alt="Logo Image" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Hotel Gran Capital</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Bienvenido {{-- {{ Auth::user()->name }} --}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-school"></i>
                        <p>Dashboards</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('habitacions.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-hotel"></i>
                        <p>Habitaciones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('promocions.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-bold"></i>
                        <p>Promociones</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('clientes.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('servicios.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-blender"></i>
                        <p>Servicios</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('reservas.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-bell"></i>
                        <p>Reservas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pagos.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>Pagos</p>
                    </a>
                </li>

                @if (auth()->user()->tipo == 1)
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>Usuarios</p>
                        </a>
                    </li>
                @endif

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Reportes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('usuariosPDF') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte Clientes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('visitasPDF') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte Visitas</p>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="{{ route('estadisticas') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reporte Estadisticos</p>
                            </a>
                        </li> --}}
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
