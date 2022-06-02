<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //Show all listings
    public function index()
    {
        return view('listing.index',[
            'listings' => Listings::latest()->filter(request(['tag','search']))->get()
        ]);
    }

    //Show single listing
    public function show(Listings $listing)
    {
        return view('listing.show',[
            'listing' => $listing
        ]);
    }
}
