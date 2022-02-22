@extends("../layout/layout")
@section("content")

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
            <th scope="col">Entreprise</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
            <td>{{$client->id}}</th>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->entreprise->name}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <a href="/clients/create">Nouveau Client</a>
</div>
@endsection