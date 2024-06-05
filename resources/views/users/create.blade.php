<!DOCTYPE html>
<html lang="en">

    @include('shared.header')

    <body style="background-color: rgb(1, 0, 20)">

    @include('shared.navbar')
   <div class="container" style="padding-top: 100px">
        <div class = "row justify-content-center">
            <div class ="col-md-8">
                <div class ="card">
                    <div class ="card-header" style="background-color: rgb(1, 0, 14); color:white">Dodaj uzytkownika</div>
                        <div class ="card-body" style="background-color: rgb(1, 0, 20); color:white">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('users.store') }}" class="center" style="background-color: rgb(1, 0, 20)">
                                @csrf
                                <div class="form-group row mt-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nazwa</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autocomplete="email">
                                    </div>
                                </div>
                                <div class="form-group row mt-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Haslo</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group row mt-3 b-5">
                                    <label for="role" class="col-md-4 col-form-label text-md-right">Rola</label>
                                    <div class="col-md-6">
                                        <select class="form-select" name="role">
                                            <option value="">Wybierz rolę</option>
                                            <option value="admin" @if(old('role') == 'admin') selected @endif>admin</option>
                                            <option value="user" @if(old('role') == 'user') selected @endif>user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mt-3 b-5">
                                </div>
                                <button type="submit" class="btn btn-primary">Dodaj</button>
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>
</html>
