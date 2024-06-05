<!DOCTYPE html>
<html lang="en">
    @include('shared.header')
    <body style="background-color: rgb(1, 0, 20); color:white">
    @include('shared.navbar')
    <div class="container">
    <table class="table" style="color:white; margin-top: 100px">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Email</th>
            <th scope="col">Movie Title</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->customer->email }}</td>
                <td>{{ $order->movie->title }}</td>
                <td>
                    <a href="{{route('orders.edit', $order->id)}}">
                        <button class="btn btn-primary">Edycja</button>
                    </a>
                </td>
                <td class="text-right">
                    <a href="{{route('orders.show', $order->id)}}">
                        <button class="btn btn-success delete">Podglad</button>
                   </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
  @include('shared.footer')
</body>
</html>
