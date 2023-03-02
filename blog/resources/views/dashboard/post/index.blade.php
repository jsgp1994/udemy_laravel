@extends('dashboard.layout')

@section('content')

    <a href="{{ route("post.create") }}">Crear</a>

    <table class="table">
        <thead>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Posteado</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>{{ $p->title }}</td>
                    <td> {{ $p->category->title }} </td>
                    <td>{{ $p->posted }}</td>
                    <td><a href="{{ route("post.edit", $p) }}">Modificar</a></td>
                    <td><a href="{{ route("post.show",$p) }}">Ver</a></td>
                    <td>
                        <form action="{{ route("post.destroy", $p) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection