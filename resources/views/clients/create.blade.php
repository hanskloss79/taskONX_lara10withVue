<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Dodawanie klienta do bazy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center mb-2">
                    <h2>Wprowadzanie klienta do bazy</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('clients.index') }}">Powrót do listy klientów</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Imię:</strong>
                        <input type="text" name="firstname" class="form-control" placeholder="First Name">
                        @error('firstname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Nazwisko:</strong>
                        <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                        @error('lastname')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Email kontaktowy:</strong>
                        <input type="email" name="email" class="form-control" placeholder="Email">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Telefon kontaktowy:</strong>
                        <input type="phone" name="phone" class="form-control" placeholder="Phone">
                        @error('phone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <div class="form-group">
                        <strong>Data urodzenia:</strong>
                        <input type="date" name="birth_date" class="form-control" placeholder="Birth date">
                        @error('birth_date')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <p>
                        
                    </p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <button type="submit" class="btn btn-primary ml-3">Dodaj dane klienta</button>
                    </div>
                </div>
            </div>
        </form>
</body>

</html>