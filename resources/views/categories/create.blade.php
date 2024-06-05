<!DOCTYPE html>
@include('shared.header')
<body style="background-color: rgb(1, 0, 20)">
    @include('shared.navbar')
    <div class="container" style="padding: 100px">
        <div class = "row justify-content-center">
            <div class ="col-md-8">
                <div class ="card" style="background-color: rgb(2, 0, 31); color: white">
                    <div class ="card-header">Dodaj Kategorie</div>
                        <div class ="card-body">
                            <form method="POST" action="{{ route('categories.store') }}">
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
                                    <label for="name" class="form-label">Nazwa: </label>
                                    <input type="name" name="name" id="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Opis Kategorii: </label>
                                    <input type="text" name="description" id="description" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Kategoria wiekowa:</label>
                                    <select name="age" id="age" class="form-control" required>
                                      <option value="3">3</option>
                                      <option value="7">7</option>
                                      <option value="12">12</option>
                                      <option value="18">18</option>
                                    </select>
                                  </div>
                                <button type="submit" class="btn btn-primary">Dodaj Kategorie</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>

