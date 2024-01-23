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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <section class="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Esplora il Mondo del Web Development</h1>
                    <p>Benvenuto su WebMingle, il luogo dove convergono il frontend e il backend per creare esperienze straordinarie. Scopri le ultime tendenze, segui tutorial dettagliati e connettiti con una community appassionata.</p>
                    <a href="/registrazione" class="btn btn-primary">Inizia Ora</a>
                </div>
                <div class="col-md-6">
                    <!-- Immagini o Grafica Rappresentativa -->
                    <img src="#" alt="WebMingle">
                </div>
            </div>
        </div>
    </section>
</body>
</html>