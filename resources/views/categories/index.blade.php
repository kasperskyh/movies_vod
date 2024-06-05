<!DOCTYPE html>
<html lang="en">
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
    @include('shared.footer')
</body>
</html>
