<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
    @include('shared.header')
<body style="background-color: rgb(1, 0, 20)">
    @include('shared.navbar')
 <div id="carouselExampleControls" class="carousel slide container-fluid" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active shadow-lg">
        <img src="img/carousel1.jpg" class="d-block w-100 rounded" alt="carousel1" style="height:1100px">
      </div>
      <div class="carousel-item shadow-lg">
        <img src="img/carousel2.jpg" class="d-block w-100 rounded" alt="carousel2"style="height:1100px">
      </div>
      <div class="carousel-item shadow-lg">
        <img src="img/carousel3.jpg" class="d-block w-100 " alt="carousel3" style="height:1100px">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <div class="container-fluid mt-5 b-5">
    @foreach ($categories as $category)
        <div>
            <h2 class="text-light"><b>{{$category->name}}</b></h2>
            @foreach ($category->movies as $movie)
            <a href="{{route('movies.show', $movie->id)}}" style="text-decoration: none">
                <img src="{{ asset('storage/' . $movie->img) }}" class="rounded ms-3 mb-3" style="width: 200px;" title="{{ $movie->title }}">
            </a>
            @endforeach
        </div>
      @endforeach
  </div>
  <div style="padding-bottom: 50px">
  </div>
=======
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Movies VOD</title>
    @include('shared.header')
</head>
<body>
    <div class="container w-100 mr-0 p-0">
        <div class="d-flex">
          <div class="col-md-6 m-0">
            <h2>Opis naszej strony</h2>
            <p>Tutaj znajduje się opis naszej strony i jej działalności.</p>
          </div>
          <div class="col-md-6 w-100 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background-color: black">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner w-100">
                <div class="carousel-item active">
                  <img src="img/carousel1.jpg" class="carousel-img" alt="Zdjęcie 1">
                </div>
                <div class="carousel-item">
                  <img src="img/carousel2.jpg" class="carousel-img" alt="Zdjęcie 2">
                </div>
                <div class="carousel-item">
                  <img src="img/carousel3.jpg" class="carousel-img" alt="Zdjęcie 3">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Poprzednie</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Następne</span>
              </a>
            </div>
          </div>
        </div>
      </div>
>>>>>>> origin/master
    @include('shared.footer')
</body>
</html>
