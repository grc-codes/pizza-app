<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
        <section id="app-layout">
            @include('includes.side-menu')
            <div class="welcome-jumbo">
                <div class="status">NEW</div>
                <h1>Peter's Pies</h1>
                <img src="./img/pizza-pie.png" class="pizza-pie" />
            </div>
        </section>
        @yield('content')
    </body>
</html>
