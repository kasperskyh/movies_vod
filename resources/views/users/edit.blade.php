<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
    <body style="background-color: rgb(1, 0, 20); color:white">
    @include('shared.navbar')
    <div class="container" style="margin-top: 200px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(1, 0, 14)">Edycja użytkownika</div>
                    <div class="card-body" style="background-color: rgb(1, 0, 14)">
                        <form method="POST" action="{{ route('users.update', $user->id) }}" class="center " style="background-color: rgb(1, 0, 14)">
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
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nazwa</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control"  name="name" value="{{ $user->name }}" autocomplete="name" autofocus>
                                </div>
                            </div>
                            <div class="form-group row  mt-2">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}"autocomplete="email">
                                </div>
                            </div>
                            <div class="form-group row  mt-2">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Haslo</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group row  mt-2">
                                <label for="role" class="col-md-4 col-form-label text-md-right">Rola</label>
                                <div class="col-md-6">
                                    <select id="role" class="form-control" name="role">
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Edytuj</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>
</html>
