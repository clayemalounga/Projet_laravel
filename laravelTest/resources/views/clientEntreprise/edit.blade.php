<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4 col-md-6">
        <form action="{{route('clientEntreprise.update',$client->id)}}" method="post" class="form">
        @csrf
        @method('PATCH')
        <H2> Formulaire de modification du client</H2>
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                <input type="text" value="{{$client->nom}}" class="form-control" id="exampleFormControlInput1" name="nom">
            </div>
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                <input type="text" value="{{$client->prenom}}" class="form-control" id="exampleFormControlInput1" name="prenom">
            </div>
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="text" value="{{$client->email}}" class="form-control" id="exampleFormControlInput1" name="email">
            </div>
            <div class="mb-3">
                <select class="form-control" id="exampleFormControlTextarea1" name="ide">
                    <option value="">Choisissez votre Entreprise</option>
                    @foreach($entreprise as $e)
                        <option value="{{$e->id}}" {{($client->Entreprise->nom == $e->nom) ? "selected" : ''}}> {{$e->nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="valider">Valider</button>
            </div>
        </form>
    </div>
</body>

</html>