<!DOCTYPE html>
<html lang="en">
@include('shared.header')
<body style="background-color: rgb(1, 0, 20); color:white">
    @include('shared.navbar')
    <div class="container mt-5" style="padding-top: 200px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: rgb(3, 2, 46)">
                    <div class="card-header"><h3>Edycja Zamówienia</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('orders.update', $order->id) }}" style="background-color: rgb(1, 0, 20)" class="center rounded">
                            @csrf
                            @method('PUT')
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <div class="form-group row mt-2 ps-4 pt-3 pe-4">
                                <label for="email" class="col-md-4 col-form-label">Email:</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" id="email" value="{{ $order->customer->email }}" class="form-control"  style="background-color: rgb(3, 2, 46); color:white" disabled>
                                </div>
                            </div>

                            <div class="form-group row mt-2 ps-4 pe-4">
                                <label for="title" class="col-md-4 col-form-label">Tytuł filmu:</label>
                                <div class="col-md-8">
                                    <select name="movie_id" id="movie_id" class="form-select" required style="background-color: rgb(3, 2, 46); color:white">
                                        @foreach($movies as $movie)
                                            <option value="{{ $movie->id }}" {{ $order->movie_id == $movie->id ? 'selected' : '' }}>
                                                {{ $movie->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mt-2 ps-4 pe-4">
                                <label for="price" class="col-md-4 col-form-label">Cena:</label>
                                <div class="col-md-8">
                                    <input type="text" name="price" id="price" value="{{ $order->price }}" class="form-control" style="background-color: rgb(3, 2, 46); color:white">
                                </div>
                            </div>

                            <div class="form-group row mt-2 ps-4 pb-3 pe-4">
                                <label for="date" class="col-md-4 col-form-label">Data:</label>
                                <div class="col-md-8">
                                    <input type="date" name="date" id="date" value="{{ $order->date }}" class="form-control" style="background-color: rgb(3, 2, 46); color:white">
                                </div>
                            </div>
                            <div class="form-group row mt-3 ps-4">
                            <div class="col-md-8 offset-md-4 mb-4">
                                <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@include('shared.footer')
</body>
</html>
