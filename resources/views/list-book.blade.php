<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista Libri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <main class="container">
        <section class="row">
            <div class="col-md-12 my-4">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route("authors.index")}}" class="btn btn-secondary">Autori</a>
                    <a href="{{route("categories.index")}}" class="btn btn-secondary">Categorie</a>
                </div>
                <a href="{{route("books.create")}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Aggiungi un Libro</a>
                <h2 class="mt-5 mb-4">Libri</h2>
            </div>
            <div class="col-md-6">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" class="w-auto">#</th>
                            <th scope="col" class="w-75">Categoria</th>
                            <th scope="col" class="w-auto text-end">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($books as $book)
                                <tr>
                                    <td class="align-middle">{{$book->id}}</td>
                                    <td class="align-middle"><a href="{{route("books.show", $book)}}">{{$book->title}}</a></td>
                                    <td class="text-end">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{route("books.edit",$book->id)}}" class="btn btn-secondary"><i class="bi bi-pencil"></i></a>
                                            <form action="{{ route("books.destroy", $book) }}" method="POST">
                                            @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="confirm('Sei Sicuro? Stai eliminando una Categoria')" class="btn btn-secondary"><i class="bi bi-trash3"></i></button>
                                                </form>
                                        </div>
                                    </td>
                                </tr>
                        @empty
                            È arrivato il momento di aggiungere qualche libro <a href="{{route("books.create")}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i></a>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>
</body>

</html>
