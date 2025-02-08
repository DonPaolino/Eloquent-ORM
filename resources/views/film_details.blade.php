<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Film - {{ $film->title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1>{{ $film->title }}</h1>
    <p><strong>Anno di Uscita:</strong> {{ $film->release_year }}</p>
    <p><strong>Durata:</strong> {{ $film->length }} min</p>
    <p><strong>Descrizione:</strong> {{ $film->description }}</p>

    <h3>Categorie</h3>
    <ul>
        @foreach ($film->categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>

    <h3>Attori</h3>
    <ul>
        @foreach ($film->actors as $actor)
            <li>{{ $actor->first_name }} {{ $actor->last_name }}</li>
        @endforeach
    </ul>

    <a href="{{ url('/films') }}" class="btn btn-secondary">Torna alla lista</a>

</body>
</html>
