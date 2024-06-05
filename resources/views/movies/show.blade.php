<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
<body style="background-color: rgb(1, 0, 20)">
    @include('shared.navbar')
    <div class="container" style="color: white; padding-top:200px; margin-bottom: 100px">
    <div class="row">
        <div class="col-md-6">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="card-title">{{ $movie->title }}</h1>
                        <p class="card-text" style="padding-top: 20px"><strong>Category: </strong> {{ $movie->category->name }}</p>
                        <p class="card-text"><strong>Opis Kategori: </strong> {{ $movie->category->description }}</p>
                        @if ($movie->category->age===3 || $movie->category->age===7)
                            <p class="card-text">Kategoria wiekowa: <span class="badge bg-success">{{$movie->category->age}}</span></p>
                        @endif
                        @if ($movie->category->age===12)
                            <p class="card-text">Kategoria wiekowa: <span class="badge bg-primary">{{$movie->category->age}}</span></p>
                        @endif
                        @if ($movie->category->age===18)
                            <p class="card-text">Kategoria wiekowa: <span class="badge bg-danger">{{$movie->category->age}}</span></p>
                        @endif
                        <p class="card-text"><strong>Rate:</strong> {{ $movie->rate }}/10</p>
                        <p class="card-text"><strong>Duration: </strong>{{ $movie->duration }} min</p>
                        <p class="card-text"><strong>Company: </strong> {{ $movie->company }}</p>
                        @if (auth()->check())
                        <td>
                            <a href="{{route('movies.edit', $movie->id)}}">
                                <button class="btn btn-primary mt-3">Edycja</button>
                            </a>
                        </td>
                        @endif
                        @if (auth()->check() && auth()->user()->isAdmin())
                        <td class="text-right">
                            <form method="POST" action="{{ route('movies.destroy', $movie->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger delete mt-3" type="submit">Usuń</button>
                            </form>
                        </td>
                        @endif
                        @if (auth()->check() && auth()->user()->isAdmin())
                        <td class="text-right">
                            <button class="btn btn-success mt-3"><a class ="nav-link text-light" href="{{route('movies.create')}}">Dodaj film</a></button>
                        </td>
                        @endif
                    </div>
                    <div class="col-md-4 ps-5">
                        <img src="{{ asset('storage/' . $movie->img) }}" class="rounded float-right" title="{{$movie->title}}" style="width: 700px">
                    </div>

                </div>
            </div>
        </div>
    </div>
            <div style="padding-top:20px">
            @if(session('error'))
                    <div class="alert alert-danger">
                    {{ session('error') }}
                    </div>
                @endif
            </div>
</div>

    @include('shared.footer')
</body>
</html>
