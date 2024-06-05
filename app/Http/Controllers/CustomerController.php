<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customers.index',[

            'customers' => Customer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', [
            'customer' => $customer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerUpdateRequest $request, Customer $customer)
    {
        $customer->fill($request->all());
        $customer->save();
        return redirect(route('customers'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
{
    // Sprawdź, czy istnieją powiązane relacje
    if ($customer->order()->exists()) {
        return back()->with('error', 'Nie można usunąć tego klienta, ponieważ istnieją powiązane zamówienia.');
    }

    // Usuń klienta, jeśli nie ma powiązanych zamówień
    $customer->delete();
    return redirect()->route('customers');
}
}
