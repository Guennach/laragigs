<?php

namespace App\Http\Controllers;

use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //Show all listings
    public function index()
    {
        return view('listing.index',[
            'listings' => Listings::latest()->filter(request(['tag','search']))->paginate(2)
        ]);
    }

    //Show single listing
    public function show(Listings $listing)
    {
        return view('listing.show',[
            'listing' => $listing
        ]);
    }

    //Create single listing
    public function create()
    {
        return view('listing.create');
    }

    //Store listing
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title'         => 'required',
            'company'       => ['required', Rule::unique('listings', 'company')], // we pass to the rule::unique the name of table and name of field
            'location'      => 'required',
            'website'       => 'required',
            'email'         => ['required', 'email'],
            'tags'          => 'required',
            'description'   => 'required'
            
        ]);

        Listings::create($formFields);

        return redirect('/')->with('message','Listing created successfully');
    }
}
