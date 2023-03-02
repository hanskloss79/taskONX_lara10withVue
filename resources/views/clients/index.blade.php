<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Baza danych klientów</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h2>Baza danych klientów</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('clients.create') }}"> Dodaj klienta</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>Nr klienta</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th width="280px">Akcja</th>
            </tr>
            @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->firstname }}</td>
                <td>{{ $client->lastname }}</td>
                <td>{{ $client->email }}</td>
                <td>
                    <form action="{{ route('clients.destroy',$client->id) }}" method="Post">
                        <a class="btn btn-warning" href="{{ route('clients.show', $client->id) }}">Szczegóły</a>
                        <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Edycja</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Usuń</button>
                    </form>
            </tr>
            @endforeach
        </table>
</body>

</html>