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
                    <th>Nazwisko</th>
                    <th>Data Urodzenia</th>
                    <th>Email</th>
                    <th>Numer Telefonu</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->date_of_birth }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone_number }}</td>
                        <td>
                            <a href="{{route('customers.edit', $customer->id)}}">
                                <button class="btn btn-primary">Edycja</button>
                            </a>
                        </td>
                        <td class="text-right">
                            <form method="POST" action="{{ route('customers.destroy', $customer->id) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger delete" type="submit">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>
    @include('shared.footer')
</body>
</html>







