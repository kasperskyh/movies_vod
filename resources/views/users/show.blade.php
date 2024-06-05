<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
    <body style="background-color: rgb(1, 0, 20); color:white">
    @include('shared.navbar')
   <div class="container" style="padding-top: 200px">
        <div class = "row justify-content-center">
            <div class ="col-md-8">
                <div class ="card" style="background-color: rgb(1, 0, 20);">
                    <div class ="card-header" style="background-color: rgb(1, 0, 14)">Podgląd uzytkownika</div>
                        <div class style="background-color: rgb(1, 0, 20);" class="card-body">
                                <div class="form-group row mt-2">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row mt-2">
                                    <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
                                    <div class="col-md-6">
                                        <input id="role" type="text" class="form-control" name="role" value="{{ $user->role }}" disabled>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @include('shared.footer')
</body>
</html>
