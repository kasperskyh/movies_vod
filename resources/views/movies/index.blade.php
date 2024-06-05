<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
    <body style="background-color: rgb(1, 0, 20); color:white">
    <link href="{{ asset('css/movie.css') }}" rel="stylesheet">
    <div class="row mt-5">
        @include('shared.navbar')
    </div>
    <div class = "container">
    <div class="movies-list" style="padding-bottom: 45px">
        <h2 class="ms-5" style="padding-top:20px">Lista Top 10 Filmów</h2>
        @php
            $counter = 1;
        @endphp
        @foreach ($movies as $movie)
            <div class="movie-item">
                <div class="counter">{{$counter}}</div>
                <div class="divider"></div>
                <div class="image">
                    <a href="{{route('movies.show', $movie->id)}}" style="text-decoration: none"><img src="{{ asset('storage/' . $movie->img) }}" alt="{{$movie->title}}" class="rounded mx-5" style="width: 230px;"></a>
                </div>
                <div class="details">
                    <div class="title">{{$movie->title}}</div>
                    <div class="rating">
                        @for ($i = 0; $i < $movie->rate; $i++)
                            <span class="stars">⭐</span>
                        @endfor
                        <div class="value">{{$movie->rate}}/10</div>
                    </div>
                    <div class="duration">Czas trwania: {{$movie->duration}}</div>
                    <div class="category">Kategoria: {{$movie->category->name}}</div>
                    <div class="price">Cena: {{$movie->price}}</div>
                    <div class="company">Producent: {{$movie->company}}</div>
                </div>
            </div>
            @php
                $counter++;
            @endphp
        @endforeach
    </div>
    </div>
    @include('shared.footer')
</body>
</html>
