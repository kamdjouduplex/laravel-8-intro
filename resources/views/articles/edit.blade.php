<h1>Editer un article</h1>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('articles.update', $article->id)}}" method="POST">
    <br>
    @csrf
    @method('PATCH')
    <label for="title">Entrer votre title de larticle</label>
    <input id="title" type="text" value="{{$article->title}}" name="title">
    <br>
    <br>
    <label for="contenu">Entrer votre contenu de larticle</label>
    <textarea id="contenu" name="contenu" cols="30" rows="10">{{$article->contenu}}</textarea>
    <br>
    <input type="submit" value="Modifier article">
</form>