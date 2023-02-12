<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use App\Models\Seller;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $shopcount = DB::table('shops')->where('sellerid', Auth::user()->id)->count();

        if($shopcount == 0){
            $shop = new Shop();

            $shop->title = Auth::user()->firstname;
            $shop->sellerid = Auth::user()->id;

            $shop->save();

            return redirect()->route('seller.index');
        }else{
            $today = Carbon::today();

            $TodayOrderCount = DB::table('orders')
                        ->whereDate('created_at', $today)
                        ->count();


            $firstDayOfMonth = Carbon::create($today->year, $today->month, 1);
            $lastDayOfMonth = Carbon::create($today->year, $today->month, $today->daysInMonth);


            $MonthOrderCount = DB::table('orders')
                ->whereBetween('created_at', [$firstDayOfMonth, $lastDayOfMonth])
                ->count();


            $AllOrderCount = DB::table('orders')->count();


            return view('seller.index',['MonthOrderCount'=>$MonthOrderCount,'TodayOrderCount'=>$TodayOrderCount,'AllOrderCount'=>$AllOrderCount]);
        }



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSellerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function edit(Seller $seller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerRequest  $request
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerRequest $request, Seller $seller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seller  $seller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seller $seller)
    {
        //
    }
}
