<?php

namespace App\Http\Controllers;

use App\Models\ShopListings;
use App\Http\Requests\StoreShopListingsRequest;
use App\Http\Requests\UpdateShopListingsRequest;
use Illuminate\Support\Facades\DB;

class ShopListingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = DB::select('select * from shops');
        return view('seller.shoplistings', compact('shops'));
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
     * @param  \App\Http\Requests\StoreShopListingsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopListingsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopListings  $shopListings
     * @return \Illuminate\Http\Response
     */
    public function show(ShopListings $shopListings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShopListings  $shopListings
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopListings $shopListings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopListingsRequest  $request
     * @param  \App\Models\ShopListings  $shopListings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopListingsRequest $request, ShopListings $shopListings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopListings  $shopListings
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopListings $shopListings)
    {
        //
    }
}
