<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\OrderUpdateRequest;
use App\Models\Customer;
use App\Models\Movie;
use App\Models\Order;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Mod;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('orders.index',
         [
            'orders' => Order::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create',[
            'movies' => Movie::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        $customer = Customer::where('email', $request->input('email'))
        ->first();

        if (!$customer) {
        $customer = new Customer($request->all());
        $customer->save();
        }

        $movie = Movie::find($request->input('movie_id'));


        $order = new Order();
        $order->movie_id = $request->input('movie_id');
        $order->customer_id = $customer->id;
        $order->price = $movie->price;
        $order->date = date('Y-m-d');

        $customerYearOfBirth = $customer->date_of_birth;
        $currentYear = date('Y');
        $customerAge = $currentYear - $customerYearOfBirth;

        $requiredAge = $movie->category->age;

        if ($customerAge < $requiredAge) {
            $message = 'Nie spełniasz wymaganego wieku ('.$requiredAge.' lat) dla tego filmu.';
            return redirect()->back()->with('error', $message);
        }else {
            $message = 'Dziękujemy za zakup, sprawdź swoją skrzynkę pocztową!';
            $order->save();
            return redirect()->back()->with('success', $message);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return view('orders.show', [
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $movies= Movie::all();
        return view('orders.edit', [
            'order' => $order,
            'movies'=> $movies
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderUpdateRequest $request, Order $order)
    {
        $order->fill($request->all());
        $order->save();
        return redirect(route('orders'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders');
    }
}
