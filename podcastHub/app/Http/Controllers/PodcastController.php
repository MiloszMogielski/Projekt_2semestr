<?php

namespace App\Http\Controllers;
use App\Models\Podcast;
use App\Models\Rating;
use Illuminate\Http\Request;

class PodcastController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){
        return view('podcast/create');
    }

    public function store(){

      $data = request()->validate([
        'name' => 'required',
        'description' => 'required|min:10',
        'yearOfRelease' => 'required|integer|between:1990,' . date('Y'),
        'image' => ['required', 'image'],
        ]);
    

        $imagePath = request('image')->store('uploads', 'public');

        auth()->user()->podcast()->create([
          'name' => $data['name'],
          'description' => $data['description'],
          'yearOfRelease' => $data['yearOfRelease'],
          'image' => $imagePath
        ]);

        return redirect('/my-podcasts/'.auth()->user()->id);
    }



    public function edit(Podcast $podcast){
        return view('/podcast/edit' , ['podcast' => $podcast]);
      }

      public function update(Podcast $podcast){
        
        $data = request()->validate([
        'name' => 'required',
        'description' => 'required|min:10',
        'yearOfRelease' => 'required|integer|between:1990,' . date('Y'),
        'image' => ['required', 'image'],
        ]);


        $imagePath = request('image')->store('uploads', 'public');

        $podcast->update([
          'name' => $data['name'],
          'description' => $data['description'],
          'yearOfRelease' => $data['yearOfRelease'],
          'image' => $imagePath
        ]);
        
        return redirect('/my-podcasts/'.auth()->user()->id);
      }
  
  
      
      public function delete(Podcast $podcast){
        $podcast->delete();
        return redirect('/my-podcasts/'.auth()->user()->id);
      }


public function hidePodcast(Request $request)
{
    $podcast = Podcast::find($request->podcast_id);

    if ($podcast && $podcast->user_id !== auth()->user()->id) {
        $podcast->is_hidden = true; 
        $podcast->save();

        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false]);
}



}
