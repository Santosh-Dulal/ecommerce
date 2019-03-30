<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use flash;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product'] = Product::paginate(8);
        return view('admin.products.index') -> with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required|max:255',
            'description' => 'required|',
            'code' => 'required|max:255',
            'vendor' => 'required|max:255',
            'brand' => 'required|max:255',
            'category' => 'required|max:255',
            'stock' => 'required',
            'price' => 'required'
        ]);

        $product = new Product;
        $product -> name = $request -> name;
        $product -> description = $request -> description;
        $product -> code = $request -> code;
        $product -> vendor = $request -> vendor;
        $product -> brand = $request -> brand;
        $product -> category = $request -> category;
        $product -> stock = $request -> stock;
        $product -> price = $request -> price;
        

        if ($product -> Save()) {
          flash('Product saved !!!')->success();

        }else {
            flash('Product saving failed !!!')->error();
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
        $data['product']=Product::findOrfail($id);
        return view('admin.products.view')->with($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['product'] = Product::find($id);
        return view('admin.products.edit') -> with($data);

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
        $request -> validate([
            'name' => 'required|max:255',
            'description' => 'required|',
            'code' => 'required|max:255',
            'vendor' => 'required|max:255',
            'brand' => 'required|max:255',
            'category' => 'required|max:255',
            'stock' => 'required',
            'price' => 'required'
        ]);
        
        $product = new Product;
        $product -> name = $request -> name;
        $product -> description = $request -> description;
        $product -> code = $request -> code;
        $product -> vendor = $request -> vendor;
        $product -> brand = $request -> brand;
        $product -> category = $request -> category;
        $product -> stock = $request -> stock;
        $product -> price = $request -> price;

        if ($product -> Save()) {
            flash('Product update successful !!!')->success();
  
          }else {
              flash('Product update  failed !!!')->error();
          }
          return redirect() -> action('ProductController@index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
