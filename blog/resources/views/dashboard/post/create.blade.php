@extends('dashboard.layout')

@section('content')
    <h1>Crear Post</h1>

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        <label for="">Título</label>
        <input type="text" name="title">

        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Conetido</label>
        <textarea name="content" cols="10" rows="10"></textarea>

        <label for="">Descripción</label>
        <textarea name="description" cols="10" rows="10"></textarea>

        <label for="">Categoria</label>
        <select name="category_id">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}"> {{ $title }} </option>
            @endforeach
        </select>

        <label for="">Posteado</label>
        <select name="posted">
            <option value=""></option>
            <option value="not">No</option>
            <option value="yes">Si</option>
        </select>

        <button type="submit">Enviar</button>
    </form>
@endsection