<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{

    public function index()
    {
        return Movie::all();
    }


    public function store(Request $request)
    {
        $movie = new movie;
        $movie->name = $request->input('name');
        $movie->year = $request->input('year');
        $movie->save();
        return $movie;
    }


    public function show($id)
    {
        return Movie::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        return Movie::find($id)->update($request->all());
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movieD = $movie;
        $movie->delete();
        return $movieD;
    }
}
