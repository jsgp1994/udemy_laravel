@extends('dashboard.layout')

@section('content')

    <a class="btn btn-success my-2" href="{{ route("post.create") }}">Crear</a>

    <table class="table mb-3">
        <thead>
            <th>Titulo</th>
            <th>Categoria</th>
            <th>Posteado</th>
            <th colspan="3">Acciones</th>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>{{ $p->title }}</td>
                    <td> {{ $p->category->title }} </td>
                    <td>{{ $p->posted }}</td>
                    <td><a class="btn btn-success" href="{{ route("post.edit", $p) }}">Modificar</a></td>
                    <td><a class="btn btn-primary" href="{{ route("post.show",$p) }}">Ver</a></td>
                    <td>
                        <form action="{{ route("post.destroy", $p) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
@endsection