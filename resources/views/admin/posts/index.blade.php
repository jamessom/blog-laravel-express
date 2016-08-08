@extends('Larablog.template')

@section('titulo') Blog Admin @endsection
@section('descricao') Dashboard @endsection

@section('content')

    <h3>Listagem de posts</h3>
    <hr>

    <table class="table table-condensed table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <button type="button" class="button alert"><i class="fa fa-trash-o"></i></button>
                        <button type="button" class="button warning "><i class="fa fa-pencil-square-o"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection


@section('paginacao')

{!! $posts->render() !!}

@endsection