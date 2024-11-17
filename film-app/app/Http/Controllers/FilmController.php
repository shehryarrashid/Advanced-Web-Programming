<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Film;
use App\Models\Certificate;


class FilmController extends Controller
{
    function index()
    {
        $films = Film::all();
        return view('films.index',['films' => $films]);
    }

    function create()
    {
        $certificates = Certificate::all();
        return view('films.create', ['certificates' => $certificates]);
    }

    function about()
    {
        return view('films.about');
    }

    function store(Request $request)
    {
        $film = new Film();
        $film->title = $request->title;
        $film->year = $request->year;
        $film->duration = $request->duration;
        $film->certificate_id = $request->certificate_id;
        $film->save();
        return redirect('/films');
    }

    function show($id)
    {
        $film = Film::find($id);
        return view('films.show', ['film' => $film]);
    }

    function edit($id)
    {
        $film = Film::find($id);
        return view('films.edit', ['film' => $film]);
    }

    function update(Request $request){
        $film = Film::find($request->id);
        $film->title = $request->title;
        $film->year = $request->year;
        $film->duration = $request->duration;
        $film->save();
        return redirect('/films');
    }

    function destroy(Request $request){
        $film = Film::find($request->id);
        $film->delete();
        return redirect('/films');
    }
}