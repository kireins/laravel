<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class UserController  extends Controller
{
    //get film by id
    public function getFilmById($id)
    {
        //temukan id
        $film = Film::find($id);
        return response()->json(compact('film'), 200);
    }

    //get all film
    public function getAllFilms()
    {
        $films = film::all();
        return response()->json(compact('films'), 200);
    }

    //create card
    public function createCard(Request $request)
    {
        $input = $request->all();

        $film = new Film();
        $film->name = $input['name'];
        $film->release = $input['release'];
        $film->cast = ($input['cast']);

        //save to database
        $film->save();
        return response()->json(compact('film'), 200);
    }

    //update card
    public function updateCard($id, Request $request)
    {
        //find film id
        $film = Film::find($id);
        $input = $request->all();

        $film->name = $input['name'];
        $film->release = $input['release'];
        $film->cast = ($input['cast']);

        //save to database
        $film->save();
        return response()->json(compact('film'), 200);
    }




}
}
