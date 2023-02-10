<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;

        $products = DB::table('shops')
                ->join('users', 'shops.sellerid', '=', 'users.id')
                ->join('products', 'shops.id', '=', 'products.pshopid')
                ->select('shops.*', 'products.*')
                ->get();

        return view('seller.viewproduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $shops = DB::select('select * from shops where sellerid = ?', [$id]);
        $catagory  = DB::select('select * from catagories');
        return view('seller.addproduct', compact('shops','catagory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $request->validate([
            'pname' => 'required',
            'pimg' => 'required',
            'pimg.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048000',
            'pprice' => 'required',
            'pdis' => 'required',
            'pshort' => 'required',
            'pshopid' => 'required',
            'pcatid' => 'required',
            'dop' => 'required',
            'pqun' => 'required',
        ]);

        $images = [];
        if ($request->pimg){
            foreach($request->pimg as $key => $image)
            {
                $imageName = time().rand(1,99).'.'.$image->extension();
                $image->move(public_path('uploads'), $imageName);

                $images[] = $imageName;
            }
        }

        $imgname = implode(",", $images);




        $product = new Product();

        $product->pname = $request->pname;
        $product->pimg = $imgname;
        $product->pprice = $request->pprice;
        $product->pdis = $request->pdis;
        $product->pshort = $request->pshort;
        $product->pshopid = $request->pshopid;
        $product->pcatid = $request->pcatid;
        $product->dop = $request->dop;
        $product->pqun = $request->pqun;

        $product->save();

        return redirect()->route('product.index')->with('success','Product has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
