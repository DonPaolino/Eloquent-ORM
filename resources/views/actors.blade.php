<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Attori</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">

    <h1 class="mb-4">Lista degli Attori</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($actors as $actor)
                <tr>
                    <td>{{ $actor->actor_id }}</td>
                    <td>{{ $actor->first_name }} {{ $actor->last_name }}</td>
                    <td>
                        <a href="{{ url('/actors', $actor->actor_id) }}" class="btn btn-primary btn-sm">Dettagli</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
