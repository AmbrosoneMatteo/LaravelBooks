<!DOCTYPE html>
<html>
<head>
    <title>Crea Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Crea un nuovo libro</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Titolo:</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="description">Descrizione:</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
    </div>
    <div class="form-group">
        <label for="pages">Numero di pagine:</label>
        <input type="number" class="form-control" id="pages" name="pages" value="{{ old('pages') }}">
    </div>
    <div class="form-group">
        <label for="author_id">Autore:</label>
        <select id="author_id" name="author_id">
            @forelse($authors as $author)
                <option value="{{$author->id}}">{{$author->name}}</option>
            @empty
                <option value="-1">Nessun Autore presente</option>
            @endforelse
        </select>
    </div>
    <div class="form-group">
        Categoria:
        <select id="author_id" name="category_id">
            @forelse($categories as $category)
                <option id="{{$category->id}}" value="{{$category->id}}">{{$category->name}}</option>
            @empty
                Nessun genere presente nel Database,<br>
                che ne dici di aggiungerne uno? <a href="{{route("categories.create")}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i></a>
            @endforelse
        </select>
    </div>
    <div class="form-group">
        <label for="image_path">Copertina:</label>
        <input type="file" class="form-control" id="image_path" name="image_path">
    </div>
    <button type="submit" class="btn btn-primary">Crea Libro</button>
    <a href="{{route("books.index")}}" class="border border-light">ANNULLA</a>
</form>
</div>
</body>
</html>
