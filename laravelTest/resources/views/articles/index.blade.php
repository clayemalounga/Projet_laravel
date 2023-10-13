<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @if($message = Session::get('success'))
        <h4 class="text-primary">{{$message}}</h4>
    @endif
    
    <div class="container">
        <h1 class="mt-3 mb-4">Liste des articles de la base de donnee</h1>
        <p><a href="{{route('articles.create')}}" class="text-decoration-none">Ajouter un article</a></p>
        @foreach($article as $art)
            <div class="shadow p-4 mb-2">
                <h3><a href="{{route('articles.show',$art->id)}}" class="text-decoration-none">{{$art->title}}</a></h3>
                <p>{{$art->contenu}}</p>
            </div>
        @endforeach
    </div>
</body>
</html>