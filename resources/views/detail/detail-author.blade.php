<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$author->name}}</title>
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
                </div>
            </div>
        </section>
        <article class="detail-book row py-3 px-1 rounded-4">
            <div class="col-md-4">
                <figure>
                    <img src="../../../public/copertine/no-cover.webp" class="rounded" alt="Titolo Libro">
                </figure>
            </div>
            <div class="col-md-4">
                <h2 class="mb-3">{{$author->name}}</h2>
                <div class="border-top mt-2 pt-3">
                    <span class="badge text-bg-secondary">{{$author->birthday}}</span>
                </div>
            </div>
        </article>

    </main>
</body>

</html>
