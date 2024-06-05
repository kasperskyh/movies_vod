<!DOCTYPE html>
<html lang="en">
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
    @include('shared.footer')
</body>
</html>
