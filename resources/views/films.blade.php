<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Film</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1 class="mb-4">Lista dei Film</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Anno</th>
                <th>Durata</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($films as $film)
                <tr>
                    <td>{{ $film->film_id }}</td>
                    <td>{{ $film->title }}</td>
                    <td>{{ $film->release_year }}</td>
                    <td>{{ $film->length }} min</td>
                    <td>
                        <a href="{{ url('/films', $film->film_id) }}" class="btn btn-primary btn-sm">Dettagli</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
