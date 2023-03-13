@extends('dashboard.layout')

@section('content')
    <a class="btn btn-success my-3" href="{{route("category.create")}}">Crear</a>

    <table class="table mb-3">
        <thead>
            <th>Titulo</th>
            <th>Slug</th>
            <th colspan="3">Acciones</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td><a class="btn btn-success" href="{{route("category.show",$category)}}">Ver</a></td>
                    <td><a class="btn btn-primary" href="{{route("category.edit",$category)}}">Modificar</a></td>
                    <td>
                        <form action="{{route("category.destroy",$category)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

@endsection