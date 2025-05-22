<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating; 

class RateController extends Controller
{
    public function addRating(Request $request){

        
    $userData = $request->validate([
        'user_id' => 'required',
        'podcasts_id' => 'required',
        'rating' => 'required'
    ]);
    
    $existingRating = Rating::where('user_id', $userData['user_id'])
                            ->where('podcasts_id', $userData['podcasts_id'])
                            ->exists();
                                                 
    if($existingRating) {
        return redirect('/')->with('error', 'You can not rate the podcast again');
    }
   
    $rating = new Rating();
    $rating->user_id = $userData['user_id'];
    $rating->podcasts_id = $userData['podcasts_id'];
    $rating->rating = $userData['rating'];
    $rating->save();
    
    return redirect('/')->with('success', 'The rating was added successfully.');
    }
}
