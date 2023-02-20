<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>

    <h1>Crear Post</h1>

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

</body>
</html>