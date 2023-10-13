<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @if($succ = Session::get('success'))
        <h4 class="alert alert-warning">{{$succ}}</h4>
    @endif
    <div class="container">
        <h1 class="mt-3 mb-4">Liste des Produits de la base de donnee</h1>
        <p><a href="{{route('produits.create')}}" class="text-decoration-none btn btn-primary">Ajouter un Produit</a></p>
        @foreach($produit as $p)
            <div class="shadow p-4 mb-2">
                <h3>Libeller : <a href="{{route('produits.show',$p->id)}}" class="text-decoration-none">{{$p->libelle}}</a></h3>
                <p>Prix : {{$p->prix}}</p>
                <p>Quantite : {{$p->quantite}}</p>
                <p>Description : {{$p->description}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>