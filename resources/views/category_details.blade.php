<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Categoria - {{ $category->name }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1>Categoria: {{ $category->name }}</h1>

    <h3>Film di questa categoria</h3>
    <ul>
        @foreach ($category->films as $film)
            <li>{{ $film->title }}</li>
        @endforeach
    </ul>

    <a href="{{ url('/categories') }}" class="btn btn-secondary">Torna alla lista</a>

</body>
</html>
