<h1>Create un article</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('articles.store')}}" method="POST">
    <br>
    @csrf
    <label for="title">Entrer votre title de larticle</label>
    <input id="title" type="text" name="title">
    <br>
    <br>
    <label for="contenu">Entrer votre contenu de larticle</label>
    <textarea id="contenu" name="contenu" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Creer article">
</form>