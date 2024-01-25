<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <a class="navbar-brand" href="#">{{$titolo}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link with-underline" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-underline" href="/articoli">Articoli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-underline" href="/chisono">About Me</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="back-link-container">
            <a class="back-link" href=" {{ route('articoli')}}">Torna alla lista degli articoli</a>
        </div>
        <div style="display:flex; justify-content: center;
    align-items: center;">
            <article style="margin:40px;">
                <h1>{{ $articolo->titolo }}</h1>
                <p>Categoria: {{ $articolo->categoria }}</p>
                <p>Descrizione: {{ $articolo->descrizione }}</p>
            </article>
        </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>