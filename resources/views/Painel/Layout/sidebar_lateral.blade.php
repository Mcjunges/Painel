<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('Painel.index')}}" class="brand-link">
        <img src="{{ asset('Dash/dist/img/HipertvLogo.png') }}" alt="HiperTV Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">HiperTV</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('Dash/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{$user->name}} </a>
                <small>Cliente há {{$user->created_at->diffForHumans()}} </small>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-users"></i>
                        <p>
                            Clientes
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('Painel.index')}}" class="nav-link">
                                <i class="fa fa-home nav-icon"></i>
                                <p>Página Principal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Painel.Usuarios.index')}}" class="nav-link active">
                                <i class="fa fa-users nav-icon"></i>
                                <p>Listar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Painel.Usuarios.create')}}" class="nav-link">
                                <i class="fa fa-user-plus nav-icon"></i>
                                <p>Cadastrar</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Planos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('Painel.Usuarios.index')}}" class="nav-link active">
                                <i class="fa fa-users nav-icon"></i>
                                <p>Listar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Painel.Usuarios.create')}}" class="nav-link">
                                <i class="fa fa-user-plus nav-icon"></i>
                                <p>Cadastrar</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>