<!DOCTYPE html>
@include('shared.header')
<body style="background-color: rgb(1, 0, 20)">
    @include('shared.navbar')
    <div class="container" style="padding: 100px">
        <div class = "row justify-content-center">
            <div class ="col-md-8">
                <div class ="card" style="background-color: rgb(2, 0, 31); color: white">
                    <div class ="card-header">Edytuj film</div>
                        <div class ="card-body">
                            <form method="POST" action="{{ route('movies.update', $movie->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                                <div class="mb-3">
                                    <label for="title" class="form-label">Tytuł:</label>
                                    <input type="text" name="title" id="title" class="form-control"  value="{{ $movie->title }}" required autocomplete="name" autofocus>
                                </div>
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Czas trwania:</label>
                                    <input type="text" name="duration" id="duration" class="form-control"  value="{{ $movie->duration }}" required autocomplete="duration">
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Kategoria:</label>
                                    <select name="category_id" id="category_id" class="form-select" required>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $movie->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="rate" class="form-label">Rate:</label>
                                    <input type="text" name="rate" id="rate" class="form-control" value="{{ $movie->rate }}" required autocomplete="rate">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Cena:</label>
                                    <input type="text" name="price" id="price" class="form-control"  value="{{ $movie->price }}" required autocomplete="price">
                                </div>
                                <div class="mb-3">
                                    <label for="company" class="form-label">Firma:</label>
                                    <input type="text" name="company" id="company" class="form-control"  value="{{ $movie->company }}" required autocomplete="company">
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label">Obraz</label>
                                    <div class="col-md-6">
                                        <input id="img" type="file" class="form-label" name="img" value="{{ $movie->img }}">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Edytuj film</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>

