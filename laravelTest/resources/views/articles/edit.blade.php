<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <h2>Les mises a jours</h2>
    <div class="container mt-4 col-md-4">
        <form action="{{route('articles.update',$article->id)}}" method="post" class="form">
            <H2> Formulaire d'ajout d'article</H2>
            @csrf
            @method('PATCH')
            <div class="mb-4 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Titre</label>
                <input type="text" class="form-control" value="{{$article->title}}" id="exampleFormControlInput1" name="title">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Entrer le contenu de l'article</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" style=" resize: none;" name="contenu">{{$article->contenu}}</textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit" name="valider">Valider</button>
            </div>
        </form>
    </div>
</body>
</html>