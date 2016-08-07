<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo') : @yield('descricao')</title>
        <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}">
        <link rel="stylesheet"    href="{{ asset('/css/foundation.css') }}">
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
            <ul class="pagination" role="navigation" aria-label="Pagination">
                <li class="disabled">Anterior</li>
                <li class="current"><span class="show-for-sr">You're on page</span> 1</li>
                <li><a href="http://foundation.zurb.com/templates-previews-sites-f6/blog.html#" aria-label="Page 2">2</a></li>
                <li><a href="http://foundation.zurb.com/templates-previews-sites-f6/blog.html#" aria-label="Page 3">3</a></li>
                <li><a href="http://foundation.zurb.com/templates-previews-sites-f6/blog.html#" aria-label="Page 4">4</a></li>
                <li class="ellipsis"></li>
                <li><a href="http://foundation.zurb.com/templates-previews-sites-f6/blog.html#" aria-label="Page 12">12</a></li>
                <li><a href="http://foundation.zurb.com/templates-previews-sites-f6/blog.html#" aria-label="Page 13">13</a></li>
                <li><a href="http://foundation.zurb.com/templates-previews-sites-f6/blog.html#" aria-label="Next page">Próximo</a></li>
            </ul>
        </div>

        <script src="{{ asset('/js/vendor/jquery.js') }}"></script>
        <script src="{{ asset('/js/vendor/foundation.js') }}"></script>
        <script src="{{ asset('/js/vendor/what-input.js') }}"></script>
        <script src="{{ asset('/js/app.js') }}"></script>
    </body>
</html>