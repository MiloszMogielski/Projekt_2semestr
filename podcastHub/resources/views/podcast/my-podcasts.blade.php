@extends('layouts.app')

@section('content')
<div class="container" style="width: 50%">
<h1 class="mypodcastUser">{{ $user->username }} 's podcast</h1>

@foreach($user->podcast as $podcast)
<div class="row m-5" style="border-radius: 10px; background-color: #02996c; color: black;">
            <div class="col-md-6 image-container">
                <img src="/storage/{{ $podcast->image }}" alt="{{ $podcast->name }}" class="w-100">
               
            </div>
            <div class="col-md-8 row bottomContent">
                <div class="col-md-7 description">
                    <p class="mt-3 fs-1 fw-bold">{{ $podcast->name }}</p>
                    <p class="mt-5 fs-5 ">Opis: {{ $podcast->description }}</p>
                </div>
                <div class="col-md-5">
                    <div class="bootomRating">
                        <p class="mt-3 fs-5">Rok wydania: {{ $podcast->yearOfRelease }}</p>
                    
                    
                    <div class="editContent">
                    <a href="/my-podcast/{{ $podcast->id}}/edit" class="delButton">Edit</a>

                    <form action="/my-podcast/{{ $podcast->id}}/delete" method="post" class="delButton">
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                    </div>
                    </div>  
                   
                </div>
            </div>
        </div>

   

    @endforeach

   
</div>
@endsection
