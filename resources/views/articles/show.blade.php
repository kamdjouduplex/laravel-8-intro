<br>
<h1>{{$article->title}}</h1>
<br>
<p>{{$article->contenu}}</p>

<br>
<a href="{{route('articles.edit', $article->id)}}" style="color:blue">Modifier</a>
<br>
<form action="{{route('articles.destroy', $article->id)}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Supprimer" style="color:red;border:none;background:white;cursor:pointer;padding-left:0" >
</form>