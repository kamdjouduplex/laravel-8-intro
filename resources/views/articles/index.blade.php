<h1>Liste des artilces</h1>
<br>
@if($message = Session::get('success'))
    <p style="color:green">{{$message}}</p>
@endif
<br>
<a href="{{route('articles.create')}}">Ajouter Un Article</a>
<br>
@foreach($articles as $article)
    <div style="width: 250px; height: 100px; padding: 20px; border: 1px solid #ccc">
        <h2><a href="{{route('articles.show', $article->id)}}">{{$article->title}}</a></h2>
        <p>{{$article->contenu}}</p>
    </div>
    <br>
@endforeach