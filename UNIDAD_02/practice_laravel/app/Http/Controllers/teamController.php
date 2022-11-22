<?php

namespace App\Http\Controllers;

use App\Models\school;
use App\Models\team;
use Illuminate\Http\Request;

class teamController extends Controller
{
    public function index()
    {
        $teams = team::latest('id')->paginate(8);
        return view('teams.index', compact('teams'));
    }

    public function school(school $school)
    {
        //dd('buscar post cat'.$category);
        $teams = team::where('school', $school->id)->latest('id')->paginate(8);
        return view('teams.index', compact('teams'));
    }

    public function show(team $team)
    {
        $similares = team::where('school', $team->school)->where('id', '!=', $team->id)->take(5)->get();
        return view('teams.show', compact('team', 'similares'));
    }
}
