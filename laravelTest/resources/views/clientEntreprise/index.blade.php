@extends('layouts.main')
@section('content')
<div class="container mt-4 jumbottron">
        @if($success = Session::get('succes'))
            <h3 class="alert alert-warning mt-3">{{$success}}</h3>
        @endif
        <H2 class="mb-3 bg-success text-light p-3">Liste des clients qui travaillent dans des entreprises</H2>

        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Nom de l'entreprise</th>
                    <th>Edit</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
               @foreach($client as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->nom}}</td>
                        <td>{{$c->prenom}}</td>
                        <td>{{$c->email}}</td>
                        <td>{{$c->Entreprise->nom}}</td>
                        <td><a href="{{route('clientEntreprise.edit',$c->id)}}" class="btn btn-primary">Edit</a></td>
                        <td><form action="{{route('clientEntreprise.destroy',$c->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="valider" class="btn btn-danger">Valider</button>
                            
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection