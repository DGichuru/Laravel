<?php  
  namespace App\Models;


  class Listing {
    public static function all() {
        return [] ;
    }
    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id){
                return $listing;
            }
        }
    
    }
  }


 