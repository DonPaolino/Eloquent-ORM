<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettagli Attore - {{ $actor->first_name }} {{ $actor->last_name }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1>{{ $actor->first_name }} {{ $actor->last_name }}</h1>

    <h3>Film in cui ha recitato</h3>
    <ul>
        @foreach ($actor->films as $film)
            <li>{{ $film->title }}</li>
        @endforeach
    </ul>

    <a href="{{ url('/actors') }}" class="btn btn-secondary">Torna alla lista</a>

</body>
</html>
