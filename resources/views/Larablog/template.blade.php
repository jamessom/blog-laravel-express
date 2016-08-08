<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo') : @yield('descricao')</title>
        <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}">
        <link rel="stylesheet"    href="{{ asset('/css/foundation.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet"    href="{{ asset('/css/app.css') }}">
    </head>

    <body>
        <div class="top-bar">
            <div class="top-bar-left">
                <ul class="menu">
                    <li class="menu-text">@yield('titulo')</li>
                </ul>
            </div>

            <div class="top-bar-right">
                <ul class="menu">
                    @yield('menu')
                </ul>
            </div>
        </div>

        <div class="callout large primary">
            <div class="row column text-center">
                <h1>@yield('titulo') : @yield('descricao')</h1>
            </div>
        </div>

        <div class="row" id="content">

            <div class="medium-8 columns">
                @yield('content')
            </div>

            <div class="medium-3 columns sticky-container" data-sticky-container="" style="height: 318px;">
                <div class="sticky" data-sticky="ymuaiu-sticky" data-anchor="content" data-resize="civut2-sticky" style="max-width: 285px;" data-events="resize">
                    <h4>Categorias</h4>
                        @yield('categorias')
                    <h4>Autores</h4>
                        @yield('autores')
                </div>
            </div>
        </div>


        <div class="row column">
            @yield('paginacao')
        </div>

        <script src="{{ asset('/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('/js/vendor/foundation.js') }}"></script>
        <script src="{{ asset('/js/vendor/what-input.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>