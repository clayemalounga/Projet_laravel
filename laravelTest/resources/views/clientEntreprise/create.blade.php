@extends('layouts.main')
@section('content')
    <div class="container mt-4 col-md-6">
        <form action="{{route('clientEntreprise.store')}}" method="post" class="form">
        @csrf
        <H2 class="bg-success p-2 text-light"> Formulaire d'ajout des Clients</H2>
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="nom">
            </div>
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="prenom">
            </div>
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
            </div>
            <div class="mb-3">
                <select class="form-control" id="exampleFormControlTextarea1" name="ide">
                    <option value="">Choisissez votre Entreprise</option>
                    @foreach($entreprise as $e)
                        <option value="{{$e->id}}">{{$e->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="valider">Valider</button>
            </div>
        </form>
    </div>
@endsection