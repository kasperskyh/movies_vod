<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
    <body style="background-color: rgb(1, 0, 20); color:white">
    @include('shared.navbar')
    <div class="container" style="margin-top: 200px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(1, 0, 14)">Edycja Klienta</div>
                    <div class="card-body" style="background-color: rgb(1, 0, 14)">
                        <form method="POST" action="{{ route('customers.update', $customer->id) }}" class="center " style="background-color: rgb(1, 0, 14)">
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
                            <div class="form-group row mt-2">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">Imie</label>
                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $customer->first_name }}" required autocomplete="first_name" autofocus>
                                </div>
                            </div>
                            <div class="form-group row  mt-2">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Nazwisko</label>
                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $customer->last_name }}" required autocomplete="last_name">
                                </div>
                            </div>
                            <div class="form-group row  mt-2">
                                <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Data urodzenia</label>
                                <div class="col-md-6">
                                    <input id="date_of_birth" type="text" class="form-control" name="date_of_birth" value="{{ $customer->date_of_birth }}" required autocomplete="date_of_birth">
                                </div>
                            </div>
                            <div class="form-group row  mt-2">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" value="{{ $customer->email }}" required autocomplete="email">
                                </div>
                            </div>
                            <div class="form-group row  mt-2">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Numer telefonu</label>
                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $customer->phone_number }}" required autocomplete="phone_number">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>
</html>
