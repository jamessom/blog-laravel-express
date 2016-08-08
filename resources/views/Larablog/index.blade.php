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
                        <span>
                            Autor:
                            <a href="#{{ str_slug( $post['author'] ) }}">
                                {{ $post['author'] }}
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            Comentários:
                            <a href="#">
                                {{ isset( $post->comments ) ? count($post->comments) : 0 }}
                            </a>
                        </span>
                    </li>
                    <li>
                        <span>
                            Tags:
                            @foreach( $post->tags as $tag )
                                <a href="#{{ str_slug( $tag->name ) }}">
                                    <span class="info label">{{ $tag->name }}</span>
                                </a>
                            @endforeach
                        </span>
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

@section('paginacao')

{!! $posts->render() !!}

@endsection