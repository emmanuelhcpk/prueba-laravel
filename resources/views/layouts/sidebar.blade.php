<aside class="navigation">
    <nav>
        <ul class="nav luna-nav">

            <li class="{{ Request::is('home*') ? 'active' : '' }}">
                <a href="{!! route('home') !!}">Dashboard</a>
            </li>



            <li class="nav-category">
                Gestión de Coin's
            </li>

            <li class="{{ Request::is('ordenes*') ? 'active' : '' }}">
                <a href="{!! route('ordenes.index') !!}">Ordenes
                </a>
            </li>

            <li class="nav-category">
                Administración
            </li>

            <li class="{{ Request::is('reportes*') ? 'active' : '' }}">
                <a href="{!! route('reportes') !!}">Reportes
                </a>
            </li>

            <li class="{{ Request::is('gestion-admins*') ? 'active' : '' }}">
                <a href="{!! route('gestion-admins.index') !!}">Usuarios
                    <!--  <span class="badge pull-right">3</span> -->
                </a>
            </li>

            <li class="">
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
            <li class="nav-info">
                <i class="fa fa-shield"></i>

                <div class="m-t-xs">
                    <span class="c-white">Administrador</span> Administrador de la plataforma {{env('ORGANIZACION')}} para organizaciones.
                    Mayor detalle en <a href="http://example.com">example.com</a></a>
                </div>
            </li>
        </ul>
    </nav>
</aside>
