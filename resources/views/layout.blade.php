<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <a class="nav-link font-weight-bold text-white" href="/">Home</a>
        <a class="nav-link font-weight-bold" href="/participant">Deelnemer Lijst</a>
        <a class="nav-link font-weight-bold" href="/participant/create">Aanmelden Deelnemer</a>
        <a class="nav-link font-weight-bold text-success" href="/school">Scholen</a>
        <a class="nav-link font-weight-bold text-success" href="/school/create">Aanmelden School</a>
        <a class="nav-link font-weight-bold text-warning" href="/tour">Routes</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
