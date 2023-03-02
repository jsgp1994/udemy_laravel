@extends('dashboard.layout')

@section('content')
    <a href="{{route("category.create")}}">Crear</a>

    <table class="table">
        <thead>
            <th>Titulo</th>
            <th>Slug</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->slug }}</td>
                    <td><a href="{{route("category.show",$category)}}">Ver</a></td>
                    <td><a href="{{route("category.edit",$category)}}">Modificar</a></td>
                    <td>
                        <form action="{{route("category.destroy",$category)}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

@endsection