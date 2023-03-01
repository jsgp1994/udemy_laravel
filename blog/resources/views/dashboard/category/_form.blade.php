@csrf

<p>Titulo</p>
<input type="text" name="title" id="" placeholder="Digite la categoria" value="{{old("title",$category->title)}}">

<p>slug</p>
<input type="text" name="slug" id="" value="{{old("slug",$category->slug)}}">

<button type="submit">Enviar</button>
