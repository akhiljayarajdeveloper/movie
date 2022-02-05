<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

// Models
use App\Models\{Movie};

// Traits
use App\Traits\ResponseTrait;

// Resources
use App\Http\Resources\{MovieResource};


class MovieController extends Controller
{

    use ResponseTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $movies = Movie::limit(20)->get();
            return $this->success('Displaying a listing of the movies.', MovieResource::collection($movies));

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

            $movie = Movie::findOrFail($id);
            return $this->success('Displaying the specified movie.', new MovieResource($movie));

    }


}
