<h1>Liste des utilisateurs</h1>
<table>
    <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $u)
            <tr>
                <td>{{$u->id}}</td>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->password}}</td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>

    </tfoot>
</table>