<h1>Liste des utilisateurs</h1>
<br>
<table>
    <tr>
        <td>ID</td>
        <td>name</td>
        <td>email</td>
        <td>Creer le</td>
    </tr>
    <hr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at}}</td>
        </tr>
    @endforeach
</table>