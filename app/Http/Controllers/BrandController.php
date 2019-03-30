<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use function GuzzleHttp\Psr7\readline;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $data['brands'] = Brand::paginate(5);
      return view('admin.brands.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required|max:255',
            'keywords'=>'required|max:255',
            'status'=>'required'
        ]);

        $brands = new Brand;
        $brands -> name = $request -> name;
        $brands -> description = $request -> description;
        $brands ->status=$request -> status;
        $brands -> keywords = $request -> keywords;
       if ( $brands -> Save()) {
           flash('Brands created successfully !!!')->success();
       }else {
           flash('Brands creation failed !!!');
       }
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
        $data['brands'] = Brand::findOrfail($id);
        return view('admin.brands.view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['brands']=Brand::find($id);
        return view('admin.brands.edit')->with($data);
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
        // $request->validate([
        //     // 'name' => 'required|max:255',
        //     // 'description' => 'required|max:255',
        //     // 'keywords' => 'required|max:255',
        //     // 'status' => 'required'
        // ]);
        $brands = new Brand;
        $brands -> name = $request -> name;
        $brands -> description = $request -> description;
        $brands -> status = $request -> status;
        $brands -> keywords = $request -> keywords;
        if ($brands -> Save()) {
           flash('Brands Update Done !!!')->success();
        }else {
            flash('Brands Update Unsuccessful!')->error();
        }
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
