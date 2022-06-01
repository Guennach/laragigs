<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listings extends Model{
    
  /*  public static function all()
    {
        return ([
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima temporibus quos magnam! Voluptatem, quia suscipit! Maxime repudiandae ex dolorem esse.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima temporibus quos magnam! Voluptatem, quia suscipit! Maxime repudiandae ex dolorem esse.'
            ]
            ]);
    }

    public static function find($id)
    {
        $listings = self::all();
        
        foreach($listings as $listing)
        {
            if($listing['id'] == $id)
                return $listing;
        }
    }*/

    use HasFactory;
}
