<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
    <body style="background-color: rgb(1, 0, 20); color:white">
    @include('shared.navbar')
    <div class="container">
    <table class="table" style="color:white; margin-top: 100px">
        <thead>
        <tr>
            <th scope="col">Kategoria</th>
            <th scope="col">Opis</th>
            <th scope="col">Kategoria wiekowa</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->age }}</td>
                @if (auth()->check() && auth()->user()->isAdmin())
                <td class="text-right">
                    <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger delete" type="submit">Usuń</button>
                    </form>
                </td>
                @endif
            </tr>
        </tbody>
    </table>
</div>
  @include('shared.footer')
</body>
</html>
