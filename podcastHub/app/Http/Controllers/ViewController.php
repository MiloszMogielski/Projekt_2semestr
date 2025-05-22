<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use App\Models\Rating;

class ViewController extends Controller
{
// Metoda odpowiedzialna za wyświetlanie podcastów
public function displayAll()
{
    // Sprawdzanie, czy w zapytaniu HTTP znajduje się parametr 'search' i zapisanie go do zmiennej
    $searchQuery = request('search'); 
    
    // Pobieranie podcastów z bazy danych, z uwzględnieniem ewentualnego filtrowania po nazwie
    // Jeśli istnieje parametr 'search', dodawany jest warunek WHERE
    $podcasts = Podcast::when($searchQuery, function ($query, $searchQuery) {
        return $query->where('name', 'like', "%$searchQuery%"); // Filtrowanie po nazwie
    })
    ->where('is_hidden', false) // sprawdzenie czy podkast nie zotał ukryty
    ->paginate(3); // Paginuje wyniki, pokazując 3 podcasty na stronę

    $avgRatings = [];
    $userRatings = [];
    $user = auth()->user();

    foreach ($podcasts as $podcast) {
        $avgRatings[$podcast->id] = Rating::where('podcasts_id', $podcast->id)->avg('rating');
        
        if ($user) {
            $userRatings[$podcast->id] = Rating::where('podcasts_id', $podcast->id)
                ->where('user_id', $user->id)
                ->value('rating');
        }
    }

    return view('home', [
        'podcasts' => $podcasts, 
        'ratings' => $avgRatings, 
        'userRatings' => $userRatings, 
        'user' => $user 
    ]);
}
}
