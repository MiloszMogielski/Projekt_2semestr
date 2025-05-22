<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MyPodcastsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    
    public function displayPodcasts($user){
      $authUser = User::find($user); 
      return view('podcast/my-podcasts', ['user' => $authUser]);
    }



    


}
