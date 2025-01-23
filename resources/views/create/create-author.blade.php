<!DOCTYPE html>
<html>
<head>
    <title>Crea Autore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Crea un nuovo autore</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('authors.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label for="birthday">Data di nascita:</label>
        <input type="date" class="form-control" id="birthday" name="birthday" value="{{ old('birthday') }}">
    </div>
    <button type="submit" class="btn btn-primary">Crea Autore</button>
    <a href="{{route("authors.index")}}" class="border border-light rounded">ANNULLA</a>
</form>
</div>
</body>
</html>
