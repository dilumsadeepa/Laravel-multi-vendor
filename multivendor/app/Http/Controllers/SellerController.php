<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use App\Models\Seller;
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
        //Get the current date
        $today = Carbon::today();
        //Get current date orders count
        $TodayOrderCount = DB::table('orders')
                     ->whereDate('created_at', $today)
                     ->count();
        
        //Get the current month
        $firstDayOfMonth = Carbon::create($today->year, $today->month, 1);
        $lastDayOfMonth = Carbon::create($today->year, $today->month, $today->daysInMonth);

        //Get the count of orders current month
        $MonthOrderCount = DB::table('orders')
            ->whereBetween('created_at', [$firstDayOfMonth, $lastDayOfMonth])
            ->count();

        //Get all orders count    
        $AllOrderCount = DB::table('orders')->count();

        //Return view
        return view('seller.index',['MonthOrderCount'=>$MonthOrderCount,'TodayOrderCount'=>$TodayOrderCount,'AllOrderCount'=>$AllOrderCount]);

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
