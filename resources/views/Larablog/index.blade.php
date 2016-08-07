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
            <h3>{{ $post['title'] }} <small>{{ $post['created_at'] }}</small></h3>
            <img class="thumbnail" src="{{ $post['post_image'] }}">
            <p class="text-justify">{{ $post['content'] }}</p>

            <div class="callout">
                <ul class="menu simple">
                    <li>
                        <a href="#">
                            Autor: {{ $post['author'] }}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Comentários: {{{ isset( $post->comments ) ? count($post->comments) : 'Default' }}}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Tags:
                            <span class="info label">Info Label</span>
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection

@section('categorias')
    <ul class="menu vertical" role="navigation" title="Categorias">
    @foreach ($categorias as $categoria)
        <li role="menuitem"><a href="#">{{ $categoria }}</a></li>
    @endforeach
    </ul>
@endsection

@section('autores')
    <ul class="menu vertical" role="navigation" title="Autores">
    @foreach ($autores as $autor)
        <li role="menuitem"><a href="#">{{ $autor }}</a></li>
    @endforeach
    </ul>
@endsection