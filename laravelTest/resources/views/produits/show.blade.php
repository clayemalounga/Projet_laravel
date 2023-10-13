<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3 mb-4">Affichage du Produit</h1>
        <div class="shadow p-4 mb-2">
            <h3>Libeller : {{$p->libelle}}</a></h3>
            <p>Prix : {{$p->prix}}</p>
            <p>Quantite : {{$p->quantite}}</p>
            <p>Description : {{$p->description}}</p>
            <br>
            <a href="{{route('produits.edit',$p->id)}}" class="btn btn-primary">Modifier</a>
            <br>
            <form action="{{route('produits.destroy',$p->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger mt-2" name="Supprimer">Supprimer</button>
            </form>
        </div>
    </div>
</body>

</html>