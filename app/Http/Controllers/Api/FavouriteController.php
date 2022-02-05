<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

// Models
use App\Models\{Favourite,Movie};

// Traits
use App\Traits\ResponseTrait;

// Resources
use App\Http\Resources\{FavouriteResource};

// Requests
use App\Http\Requests\StoreFavouriteRequest;

use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    use ResponseTrait;


    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Listing of favourite movies.
     */
    public function index()
    {

            $favourites = Favourite::where('user_id',auth()->id())->with('movie')->limit(20)->get();
            return $this->success('Displaying a listing of the favourite movies.', FavouriteResource::collection($favourites));

    }



    /**
     * Storing Favourite Movie.
     */
    public function store(StoreFavouriteRequest $request)
    {



            // Checking for already added in favourites and removing from favourites
            $exist = Favourite::where('user_id',auth()->id())->where('movie_id',$request->movie_id)->first();
            if($exist){
                $exist->delete();
                return $this->success('Removed from favourites');
            }

            //Adding to favourites list
            $favourite= Favourite::create(['user_id'=>auth()->id(),'movie_id'=>$request->movie_id]);

            return $this->success('Added to favourites.');

    }

}
