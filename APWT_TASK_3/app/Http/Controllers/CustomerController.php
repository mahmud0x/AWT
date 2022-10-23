<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\UpdateCustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCustomerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCustomerRequest  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
    public function menu()
    {
        return view('customer');
    }
    public function order(Request $request)
    {
        $order = new Order();
        $order->item = $request->get('item');
        $order->cust_id = $request->session()->get('userid');
        $order->save();
        return view('customer')->with('success',"Order Placed!");
    }
    public function passreset()
    {
        return view('passwordreset');
    }
    public function passupdate(Request $request)
    {
        $customer = Customer::where('name', $request->session()->get('user'))->first();
        $customer->password = $request->pass;
        $customer->save();
        return redirect()->route('menu');
    }

    public function customer()
    {
        $takeorder = Order::with('customer')->get(); //customerfunc
        //echo $takeorder;
        return view('manager')->with('takeorder', $takeorder);
    }
}
