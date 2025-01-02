

<div class="nav-mobile">
    <!-- Navegador común en todas las vistas -->
    <nav>
        <ul>
            <li><a href="{{ route('prueba') }}">Test</a></li>
            <li><a href="{{ route('datos') }}">Datos</a></li>
        </ul>
    </nav>

    <!-- Aquí se cargará el contenido específico de cada página -->
    <div class="content">
        @yield('content')
    </div>
</div>