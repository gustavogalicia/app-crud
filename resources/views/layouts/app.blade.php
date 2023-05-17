<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio Galicia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
</head>
<body>
    <!-- <h1>Gustavo Adolfo Galicia Gutierrez</h1> -->
    @include('layouts.nav')
    
    <div class="container">
        @yield('content')
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 offset-1">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/jeimy.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mis Amores</h5>
                    <p class="card-text">Mis Amores Hermosos</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Mi Jeimy</li>
                    <li class="list-group-item">Mi Christopher</li>
                    <li class="list-group-item">Mi Gustavito</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/gustavo.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mis Amores</h5>
                    <p class="card-text">Mis Amores Hermosos</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Mi Jemiy</li>
                    <li class="list-group-item">Mi Christopher</li>
                    <li class="list-group-item">Mi Gustavito</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/gustavito.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Mis Amores</h5>
                    <p class="card-text">Mis Amores Hermosos</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Mi Jeimy</li>
                    <li class="list-group-item">Mi Christopher</li>
                    <li class="list-group-item">Mi Gustavito</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>