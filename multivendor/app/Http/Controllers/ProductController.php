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
            'pimg.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024000000',
            'pprice' => 'required|numeric',
            'pdis' => 'required',
            'pshort' => 'required',
            'pshopid' => 'required',
            'pcatid' => 'required',
            'psubcat' => 'required',
            'dop' => 'required',
            'pqun' => 'required',
        ],
        [
            'pname.required' => 'The Product title is required.',
            'pimg.required' => 'The image is required and it must lower than 5048000KB',
            'pprice.required' => 'The price is required.',
            'ppdis.required' => 'The Discriptin is required.',
            'pshort.required' => 'The Short discription is required.',
            'pshopid.required' => 'The shop name is required.',
            'pcatid.required' => 'The category is required.',
            'psubcat.required' => 'The sub category is required.',
            'dop.required' => 'The product is required.',
            'pqun.required' => 'The quntity is required.',

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
        $fileName = "";

        if($request->file){
            $fileName = time().'.'.$request->file->extension();

            $request->file->move(public_path('uploads'), $fileName);
        }


        $product = new Product();

        $product->pname = $request->pname;
        $product->pimg = $imgname;
        $product->pvideo = $fileName;
        $product->pprice = $request->pprice;
        $product->pdis = $request->pdis;
        $product->pshort = $request->pshort;
        $product->pshopid = $request->pshopid;
        $product->pcatid = $request->pcatid;
        $product->psubcat = $request->psubcat;
        $product->dop = $request->dop;
        $product->pqun = $request->pqun;

        $product->save();

        return response()->json(['message' => 'Video uploaded successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('seller.singleproduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $shops = DB::select('select * from shops where sellerid = ?', [Auth::user()->id]);
        $catagory = DB::select('select * from catagories');
        return view('seller.editproduct', compact('product','shops','catagory'));
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
        $request->validate([
            'pname' => 'required',
            'pimg' => 'required',
            'pprice' => 'required|numeric',
            'pdis' => 'required',
            'pshort' => 'required',
            'pshopid' => 'required',
            'pcatid' => 'required',
            'psubcat' => 'required',
            'dop' => 'required',
            'pqun' => 'required',
        ],[
            'pname.required' => 'The Product title is required.',
            'pimg.required' => 'The image is required and it must lower than 5048000KB',
            'pprice.required' => 'The price is required.',
            'ppdis.required' => 'The Discriptin is required.',
            'pshort.required' => 'The Short discription is required.',
            'pshopid.required' => 'The shop name is required.',
            'pcatid.required' => 'The category is required.',
            'psubcat.required' => 'The sub category is required.',
            'dop.required' => 'The product is required.',
            'pqun.required' => 'The quntity is required.',

        ]);

        $product->update($request->all());

        return redirect()->route('product.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $deletedproduct = DB::delete('delete from products where id = ?', [$product->id]);

        return redirect()->route('product.index')->with('success','Product deleted successfully.');
    }
}
