<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupen;

class CoupenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['coupens'] = Coupen ::paginate(5);
        return view('admin.coupens.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


           $coupen = new Coupen;
           $coupen -> title = $request -> title;
           $coupen -> description = $request -> description;
           $coupen -> code = $request -> code;
           $coupen -> expires_on = $request -> expires_on;
           $coupen -> cash = $request -> cash;
           $coupen -> percentage = $request -> percentage;
           $coupen -> coupen_amt = $request -> coupen_amt;
           $coupen -> type = $request -> type;
           $coupen -> delivery_cost = $request -> delivery_cost;
           $coupen -> category_id = $request -> category_id;
           $coupen -> product_id = $request -> product_id;
           $coupen -> occassion = $request -> occassion;
           $coupen -> new_customer = $request -> new_customer;
           $coupen -> minimum_expense = $request -> minimum_expense;
           $coupen -> Save();
           return back();




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['coupen'] = Coupen::find($id);
        return view('admin.coupens.view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data['coupen'] = Coupen ::find($id);
       return view('admin.coupens.edit')->with($data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $coupen = new Coupen;
        $coupen -> title = $request -> title;
        $coupen -> description = $request -> description;
        $coupen -> code = $request -> code;
        $coupen -> expires_on = $request -> expires_on;
        $coupen -> cash = $request -> cash;
        $coupen -> percentage = $request -> percentage;
        $coupen -> coupen_amt = $request -> coupen_amt;
        $coupen -> type = $request -> type;
        $coupen -> delivery_cost = $request -> delivery_cost;
        $coupen -> category_id = $request -> category_id;
        $coupen -> product_id = $request -> product_id;
        $coupen -> occassion = $request -> occassion;
        $coupen -> new_customer = $request -> new_customer;
        $coupen -> minimum_expense = $request -> minimum_expense;
        $coupen -> Save();
        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
