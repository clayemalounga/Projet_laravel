<!DOCTYPE html> 
<html lang="en"> 
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-3 mb-4">Affichage de l'article</h1>
        <div class="shadow p-4 mb-2">
            <h3>{{$article->title}}</a></h3>
            <p>{{$article->contenu}}</p>
            <br>
            
            <a href="{{route('articles.edit',$article->id)}}" class="btn btn-primary mb-2">Modifier</a>
            <form action="{{route('articles.destroy', $article->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit" name="suprimer">Suprimer</button>
            </form>
        </div>
    </div>
</body>

</html>