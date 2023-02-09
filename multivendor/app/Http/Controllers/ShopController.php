<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.viewshop');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat = DB::select('select * from catagories');
        return view('seller.createshop', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopRequest $request)
    {
        $request->validate([
            'title' => 'required',
            'shopdis' => 'required',
            'shopprofile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:504800',
            'banner' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:504800',
            'sellerid' => 'required',
            'catagory' => 'required',
        ]);

        $banner = time().'banner.'.$request->banner->extension();

        $request->banner->move(public_path('uploads'), $banner);

        $profileimg = time().'.'.$request->shopprofile->extension();

        $request->shopprofile->move(public_path('uploads'), $profileimg);

        $shop = new Shop();

        $shop->title = $request->title;
        $shop->banner = $banner;
        $shop->shopprofile = $profileimg;
        $shop->shopdis = $request->shopdis;
        $shop->sellerid = $request->sellerid;
        $shop->catagory = implode(",", $request->catagory);

        $shop->save();

        return redirect()->route('shopListings.index');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        $orders = DB::select('select * from orders where shopid = ?', [$shop->id]);
        $catagories = DB::select('select * from catagories');
        $allorder = 0;
        $pending = 0;
        $sell = 0;
        foreach($orders as $o){
            $allorder = $allorder +1 ;
            if($o->deliver = '0'){
                $pending = $pending + 1;
            }
            $sell = $o->oqun + $sell;
        }
        return view('seller.viewshop', compact('shop','allorder','pending','sell','catagories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopRequest  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
