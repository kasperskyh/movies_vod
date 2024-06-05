<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
    @include('shared.header')
    <body style="background-color: rgb(1, 0, 20)">
    @include('shared.navbar')
<div class="container" style="padding-top: 100px; margin-bottom:100px">
    <h1 style="color: white" class="mt-2">Kategorie</h1>
    @auth
         @if (auth()->user()->isAdmin())
         <a style="text-decoration: none" href="{{route('categories.create')}}">
            <button class="btn btn-primary">Dodaj Kategorie</button>
       </a>
         @endif
    @endauth
    @foreach ($categories as $category)
        <div class="card mt-3">
            <div class="card-body" style="background-color: rgb(1, 0, 20); color:rgb(231, 223, 223)">
                <h5 class="card-title">{{$category->name}}</h5>
                <p class="card-text">{{$category->description}}</p>
                @if ($category->age===3 || $category->age===7)
                    <p class="card-text">Kategoria wiekowa: <span class="badge bg-success">{{$category->age}}</span></p>
                @endif
                @if ($category->age===12)
                    <p class="card-text">Kategoria wiekowa: <span class="badge bg-primary">{{$category->age}}</span></p>
                @endif
                @if ($category->age===18)
                    <p class="card-text">Kategoria wiekowa: <span class="badge bg-danger">{{$category->age}}</span></p>
                @endif
                @if (Auth::check())
                <td class="text-right">
                    <a style="text-decoration: none" href="{{route('categories.show', $category->id)}}">
                        <button class="btn btn-success delete">Podglad</button>
                   </a>
                </td>
                @endif
                @if (Auth::check())
                <td class="text-right">
                    <a style="text-decoration: none" href="{{route('categories.edit', $category->id)}}">
                        <button class="btn btn-primary delete">Edycja</button>
                   </a>
                </td>
                @endif
            </div>
        </div>
    @endforeach
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
    <title>Categories</title>
</head>
<body>
    @include('shared.header')
    @foreach ($categories as $category)
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$category->name}}</h5>
          <p class="card-text">{{$category->description}}</p>
          <p class="card-text">Kategoria wiekowa: <span class="badge bg-primary">{{$category->age}}</span></p>
        </div>
      </div>
      @endforeach
>>>>>>> origin/master
    @include('shared.footer')
</body>
</html>
