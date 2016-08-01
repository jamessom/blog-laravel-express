@extends('Larablog.template')

@section('titulo') Larablog @endsection
@section('descricao') O blog do Laravel Express @endsection

@section('menu')
    @foreach ($itensMenu as $itenMenu)
        <li><a href="#">{{ $itenMenu }}</a></li>
    @endforeach
@endsection

@section('content')
    @foreach ($posts as $post)
        <div class="blog-post">
            <h3>{{ $post['titulo'] }} <small>{{ $post['dt_publicacao'] }}</small></h3>
            <img class="thumbnail" src="{{ asset('/img/850x350') }}">
            <p class="text-justify">{{ $post['texto'] }}</p>

            <div class="callout">
                <ul class="menu simple">
                    <li><a href="http://foundation.zurb.com/templates-previews-sites-f6/blog.html#">Autor: {{ $post['autor'] }}</a></li>
                    <li><a href="http://foundation.zurb.com/templates-previews-sites-f6/blog.html#">Comentários: {{ $post['num_comentarios'] }}</a></li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection

@section('categorias')
    @foreach ($categorias as $categoria)
        <li><a href="#">{{ $categoria }}</a></li>
    @endforeach
@endsection

@section('autores')
    @foreach ($autores as $autor)
        <li><a href="#">{{ $autor }}</a></li>
    @endforeach
@endsection