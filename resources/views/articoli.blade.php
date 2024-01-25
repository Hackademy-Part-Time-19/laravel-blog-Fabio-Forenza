<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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
    <section>
        <div class="articoli">
            <h1>Il Futuro delle Tecnologie Intelligenti</h1>
            <p>Questa rivoluzione tecnologica sta influenzando settori come la salute, l'educazione, l'industria e molto
                altro. Scopri come queste tecnologie stanno plasmando il nostro mondo e cosa potremmo aspettarci nel
                prossimo decennio.</p>
        </div>
        <main class="container">
            <div class="row d-flex align-items-stretch">
                @if(count($articoli)>0)
                @foreach ($articoli as $chiave => $articolo)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $articolo['titolo'] }}</h5>
                            <p class="card-text">{{ $articolo['categoria'] }}</p>
                            <a href="{{route('articoli.dettaglio',['id'=>$chiave])}}" class="card-link">Leggi di più</a>
                        </div>
                        <div class="card-body">
                            <p class="card-text overflow-hidden descrizione">{{ $articolo['descrizione'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <p>Nessun articolo disponibile.</p>
                @endif
            </div>
        </main>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>