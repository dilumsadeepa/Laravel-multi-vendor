<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use Illuminate\Support\Facades\Auth;
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
        $pershop = DB::table('shops')->count();
        if ($pershop != 0) {
            $shops = DB::select('select * from shops where sellerid = ?', [Auth::user()->id]);
            $shopid = $shops[0]->id;
            $orders = DB::select('select * from orders where shopid = ?', [$shopid]);
            $catagories = DB::select('select * from catagories');
            $products = DB::table('products')
                    ->where('pshopid', $shopid)
                    ->orderByRaw('updated_at - created_at DESC')
                    ->limit(5)
                    ->get();
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
            $shop = $shops[0];
        }else{
            $shop = [];
        }



        return view('seller.viewshop',compact('pershop','shop','allorder','pending','sell','catagories', 'products'));
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
        $products = DB::table('products')
                ->where('pshopid', $shop->id)
                ->orderByRaw('updated_at - created_at DESC')
                ->limit(5)
                ->get();
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
        return view('seller.viewshop', compact('shop','allorder','pending','sell','catagories', 'products'));
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
        $request->validate([
            'title' => 'required',
            'shopdis' => 'required',
            'shopprofile' => 'required',
            'banner' =>  'required',
            'sellerid' => 'required',
            'catlist' => 'required',
            'imgpro' => 'image|mimes:jpeg,png,jpg,gif,svg|max:504800',
            'imgban' => 'image|mimes:jpeg,png,jpg,gif,svg|max:504800',
        ]);

        $profile = $request->shopprofile;
        $bannerimg = $request->banner;
        $cat = $request->catlist;

        if($request->catagory){
            $cat = implode(",", $request->catagory);
        }

        if($request->imgpro){
            $profileimg = time().'.'.$request->imgpro->extension();

            $request->imgpro->move(public_path('uploads'), $profileimg);

            $profile = $profileimg;
        }
        if($request->imgban){
            $banner = time().'banner.'.$request->imgban->extension();

            $request->imgban->move(public_path('uploads'), $banner);
            $bannerimg = $banner;
        }

        $affected = DB::update(
            'update shops set title = ?,banner=?,shopprofile=?,shopdis=?,sellerid=?,catagory=? where id = ?',
            [$request->title,$bannerimg,$profile,$request->shopdis,$request->sellerid,$cat,$shop->id]
        );

        return redirect()->route('shop.show',$shop->id)->with('success','Shop updated successfully.');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        $deletedshop = DB::delete('delete from shops where id = ?', [$shop->id]);
        $deletedproduct = DB::delete('delete from products where pshopid = ?', [$shop->id]);

        return redirect()->route('shop.index')->with('success','Shop deleted successfully.');
    }
}
