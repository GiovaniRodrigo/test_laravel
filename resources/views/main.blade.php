<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body >
        <header>
            <nav class="navbar navbar-exoand-lg navbar-light">
                <div class="collapse navbar-callapse" id="navbar">
                    <ul class="navbar-nav"></ul>
                    <a href="/carros/create" class="nav-link">Inserir Carro</a>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>Controle de combustível</p>
        </footer>
    </body>
</html>
