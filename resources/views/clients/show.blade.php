<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Wszystkie dane klienta obecnego w bazie danych</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Dane szczegółowe klienta nr {{ $client->id }}</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('clients.index') }}" enctype="multipart/form-data"> Powrót do listy klientów</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('clients.update',$client->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Imię:</strong>
                        <input type="text" name="firstname" value="{{ $client->firstname }}" class="form-control" placeholder="First name">
                        @error('firstname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Nazwisko:</strong>
                        <input type="text" name="lastname" value="{{ $client->lastname }}" class="form-control" placeholder="Last name">
                        @error('lastname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="email" name="email" value="{{ $client->email }}" class="form-control" placeholder="Email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Telefon:</strong>
                        <input type="phone" name="phone" value="{{ $client->phone }}" class="form-control" placeholder="Phone">
                        @error('phone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Data urodzenia:</strong>
                        <input type="date" name="birth_date" value="{{ $client->birth_date }}" class="form-control" placeholder="Birth date">
                        @error('birth_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>