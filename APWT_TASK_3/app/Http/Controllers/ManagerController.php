<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Http\Requests\StoreManagerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateManagerRequest;

class ManagerController extends Controller
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
     * @param  \App\Http\Requests\StoreManagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreManagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $customer = Customer::where('name', $request->name)->first();
        //dd($customer);
        

        return view('customeredit')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        
        $customer = Customer::where('name', $request->name)->first();
        //dd($customer);
        //echo $customer;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        //echo $customer->name;
        $customer->save();
        return redirect()->route('customerlist');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateManagerRequest  $request
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateManagerRequest $request, Manager $manager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manager  $manager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manager $manager)
    {
        //
    }
    public function loadlist(Request $request)
    {
        $customers = Customer::all();
        return view('customerlist')->with('customers', $customers);
    }

    public function delete(Request $request)
    {
        $customer = Customer::where('name', $request->name)->delete();
        //$customer->password = $request->pass;
        //$customer->save();
        return redirect()->route('customerlist');
    }
   
}
