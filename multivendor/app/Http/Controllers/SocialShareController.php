<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class SocialShareController extends Controller
{
    public function index()
    {
        $shareButton = \Jorenvh\Share\ShareFacade::class::page(

        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        $posts = product::get();

        return view('socialshare', compact('shareButtons', 'posts'));
    }
}
