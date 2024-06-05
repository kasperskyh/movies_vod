<!DOCTYPE html>
@include('shared.header')
<body style="background-color: rgb(1, 0, 20)">
    @include('shared.navbar')
    <div class="container" style="padding: 100px">
        <div class = "row justify-content-center">
            <div class ="col-md-8">
                <div class ="card" style="background-color: rgb(2, 0, 31); color: white">
                    <div class ="card-header">Dodaj Film</div>
                        <div class ="card-body">
                            <form method="POST" action="{{ route('movies.store') }}" enctype="multipart/form-data">
                                @csrf
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
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="duration" class="form-label">Czas trwania:</label>
                                    <input type="text" name="duration" id="duration" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Kategoria:</label>
                                    <select name="category_id" id="category_id" class="form-select" >
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="rate" class="form-label">Rate:</label>
                                    <input type="text" name="rate" id="rate" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Cena:</label>
                                    <input type="text" name="price" id="price" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="company" class="form-label">Firma:</label>
                                    <input type="text" name="company" id="company" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="img" class="form-label">Obraz</label>
                                    <div class="col-md-6">
                                        <input id="img" type="file" class="form-label" name="img">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Dodaj film</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>

