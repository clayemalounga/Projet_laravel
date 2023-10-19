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
        <form action="{{route('produits.store')}}" method="post" class="form">
            <H2> Formulaire d'ajout des produits</H2>
            @csrf
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Libelle</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="libelle">
            </div>
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Entrer le prix</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="prix">
            </div>
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Entrer la quantite</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="quantite">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Entrer la description du produit</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style=" resize: none;" name="description"></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="valider">Valider</button>
            </div>
        </form>
    </div>
</body>

</html>