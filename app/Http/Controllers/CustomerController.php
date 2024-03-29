<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customer.index', compact('customers'));
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store()
    {

        Customer::create($this->dataValidation());
        return redirect('/customers');
    }

    public function show(Customer $customer)
{
    return view('customer.show', compact('customer'));
}
    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }
    public function update(Customer $customer)
    {

        $customer->update($this->dataValidation());
        return redirect('/customers');
    }
    public function destroy(Customer $customer){
        $customer->delete();
        return redirect('/customers');
    }
protected function dataValidation(){
    return $data = request()->validate([
        'name' => 'required',
        'email' => 'required|email'
    ]);
}
}
