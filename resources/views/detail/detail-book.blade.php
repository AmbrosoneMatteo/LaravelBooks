<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$book->name}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
    <main class="container">
        <section class="row mb-5">
            <div class="col-md-12 my-4">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route("books.index")}}" class="btn btn-secondary">Libri</a>
                    <a href="{{route("authors.index")}}" class="btn btn-secondary">Autori</a>
                    <a href="{{route("categories.index")}}" class="btn btn-secondary">Categorie</a>
                    <a href="{{route("books.create")}}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Aggiungi un Libro</a>
                </div>
            </div>
        </section>
        <article class="detail-book row py-3 px-1 rounded-4">
            <div class="col-md-4">
                <figure>
                    <img src="
                        @if ($book->image_path)
                            {{env("APP_URL")."/copertine/".$book->image_path}}
                        @else
                            {{env("APP_URL")."/copertine/no-cover.webp"}}
                        @endif" width="400px" height="520px" class="rounded bi-align-start">
                </figure>
            </div>
            <div class="bi-align-end">
                <h2 class="mb-3">{{$book->title}}</h2>
                <div>
                    <p>{{$book->description}}</p>
                </div>
                <div class="border-top mt-2 pt-3">
                    <span class="badge text-bg-secondary">{{$book->pages}}</span>
                    <span class="badge text-bg-secondary">{{$author->name}}</span>
                    <span class="badge text-bg-secondary">{{$category->name}}</span>
                </div>
            </div>
        </article>

    </main>
</body>

</html>
