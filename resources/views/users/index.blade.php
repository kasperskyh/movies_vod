<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
<body  style="background-color: rgb(3, 2, 46); color:white">

    @include('shared.navbar')
    <div class="container mt-5" style="padding-top: 100px">
        <h1 class="mt-5 mb-5">Lista użytkowników</h1>
        <table class="table" style="color: white">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Imię</th>
                    <th>Email</th>
                    <th>Rola</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>

                        @if ($user->role!='admin')
                        <td>
                            <a href="{{route('users.edit', $user->id)}}">
                                <button class="btn btn-primary">Edycja</button>
                            </a>
                        </td>
                        @else
                        <td></td>
                        @endif
                        <td class="text-right">
                            <a href="{{route('users.show', $user->id)}}">
                                <button class="btn btn-success delete">Podglad</button>
                           </a>
                        </td>
                        @if ($user->role!='admin')
                        <td class="text-right">
                            <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger delete" type="submit">Usuń</button>
                            </form>
                        </td>
                        @else
                        <td></td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="btn btn-success"><a class ="nav-link text-light" href="{{route('users.create')}}">Dodaj użytkownika</a></button>
    </div>
    @include('shared.footer')
</body>
</html>







