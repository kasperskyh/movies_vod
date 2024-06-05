<!DOCTYPE html>
<html lang="en">
@include('shared.header')
<body style="background-color: rgb(1, 0, 20); color:white">
    @include('shared.navbar')
    <div class="container" style="padding-top: 150px">
        <div class="d-flex justify-content-center">
            <div class="col-md-6">
        <h1>WYPOŻYCZ FILM</h1>
        <form method="POST"  action="{{ route('orders.store') }}">
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
            <div class="mb-3 mt-5">
                <label for="first_name" class="form-label">Imię:</label>
                <input type="name" name="first_name" id="first_name" class="form-control" value="{{ old('first_name', auth()->check() ? auth()->user()->name : '') }}" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Nazwisko:</label>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name')}}" required>
            </div>
            <div class="mb-3">
                <label for="date_of_birth" class="form-label">Rok urodzenia:</label>
                <input type="text" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ old('date_of_birth')}}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', auth()->check() ? auth()->user()->email : '') }}" required>
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Numer telefonu:</label>
                <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ old('phone_number')}}" required>
            </div>
            <div class="mb-3">
                <label for="movie_id" class="form-label">Film:</label>
                <select name="movie_id" id="movie_id" class="form-select" required>
                    @foreach($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Złóż zamówienie</button>
        </form>
            </div>
        </div>
        @if(session('error'))
        <div class="alert alert-danger mt-5">
            {{ session('error') }}
        </div>
        @endif
        @if(session('success'))
        <div class="alert alert-success mt-5">
            {{ session('success') }}
        </div>
        @endif
</div>
@include('shared.footer')
</body>
</html>
