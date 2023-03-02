@csrf
<label for="">Título</label>
<input class="form-control" type="text" name="title" value="{{old("title",$post->title)}}" placeholder="Titulo">

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" value="{{old("slug",$post->slug)}}">

<label for="">Conetido</label>
<textarea name="content" cols="10" rows="5" class="form-control">{{old("content",$post->content)}}</textarea>

<label for="">Descripción</label>
<textarea name="description" cols="10" rows="5" class="form-control">{{old("description",$post->description)}}</textarea>

<label for="">Categoria</label>
<select name="category_id" class="form-control">
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{old("category_id",$post->category_id) == $id ? "selected" : ""}} value="{{ $id }}"> {{ $title }} </option>
    @endforeach
</select>

<label for="">Posteado</label>
<select name="posted" class="form-control">
    <option value=""></option>
    <option {{ old("posted",$post->posted) == "not" ? "selected" : "" }} value="not">No</option>
    <option {{ old("posted",$post->posted) == "yes" ? "selected" : "" }} value="yes">Si</option>
</select>

@if ( isset($task) && $task == "edit")
    <label for="">Imagen</label>
    <input type="file" name="image" id="">
@endif


<button type="submit">Enviar</button>