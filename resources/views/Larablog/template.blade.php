<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo') : @yield('descricao')</title>
        
        <link rel="stylesheet" href="{{ asset('/css/foundation.min.css') }}">
        <link href="{{ asset('/css/foundation-icons.css') }}" rel="stylesheet" type="text/css">
        <style id="style-1-cropbar-clipper">
            .en-markup-crop-options {
                top: 18px !important;
                left: 50% !important;
                margin-left: -100px !important;
                width: 200px !important;
                border: 2px rgba(255,255,255,.38) solid !important;
                border-radius: 4px !important;
            }

            .en-markup-crop-options div div:first-of-type {
                margin-left: 0px !important;
            }
        </style>
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
                    <ul>
                        @yield('categorias')
                    </ul>
                    <h4>Autores</h4>
                    <ul>
                        @yield('autores')
                    </ul>
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
        
        <script src="{{ asset('/js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ asset('/js/foundation.js') }}"></script>
        <script>$(document).foundation();</script>
        <script type="text/javascript" src="{{ asset('/js/zcom.js') }}"></script>
    </body>
</html>