@csrf
<label for="">Título</label>
<input type="text" name="title" value="{{old("title",$post->title)}}" placeholder="Titulo">

<label for="">Slug</label>
<input readonly type="text" name="slug" value="{{old("slug",$post->slug)}}">

<label for="">Conetido</label>
<textarea name="content" cols="10" rows="10">{{old("content",$post->content)}}</textarea>

<label for="">Descripción</label>
<textarea name="description" cols="10" rows="10">{{old("description",$post->description)}}</textarea>

<label for="">Categoria</label>
<select name="category_id">
    <option value=""></option>
    @foreach ($categories as $title => $id)
        <option {{old("category_id",$post->category_id) == $id ? "selected" : ""}} value="{{ $id }}"> {{ $title }} </option>
    @endforeach
</select>

<label for="">Posteado</label>
<select name="posted">
    <option value=""></option>
    <option {{ old("posted",$post->posted) == "not" ? "selected" : "" }} value="not">No</option>
    <option {{ old("posted",$post->posted) == "yes" ? "selected" : "" }} value="yes">Si</option>
</select>

<button type="submit">Enviar</button>