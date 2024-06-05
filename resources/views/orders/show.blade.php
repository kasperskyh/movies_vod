<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
    <body style="background-color: rgb(1, 0, 20); color:white">
    @include('shared.navbar')
    <div class="container">
    <table class="table" style="color:white; margin-top: 100px">
        <thead>
        <tr>
            <th scope="col">Customer Email</th>
            <th scope="col">Movie Title</th>
            <th scope="col">Price</th>
            <th scope="col">Date</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $order->customer->email}}</td>
                <td>{{ $order->movie->title }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->date }}</td>
                @if (auth()->check() && auth()->user()->isAdmin())
                <td class="text-right">
                    <form method="POST" action="{{ route('orders.destroy', $order->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger delete" type="submit">Usuń</button>
                    </form>
                </td>
                @endif
            </tr>

        </tbody>
    </table>
</div>
  @include('shared.footer')
</body>
</html>
