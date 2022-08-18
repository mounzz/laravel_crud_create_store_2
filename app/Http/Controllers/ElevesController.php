<?php

namespace App\Http\Controllers;

use App\Models\Eleves;
use Illuminate\Http\Request;
use App\Http\Controllers\ElevesController;

class ElevesController extends Controller
{
    public function Welcome(){
        $eleves = Eleves::all();
        $females = Eleves::where("genre", "=", "female")->get();
        $males = Eleves::where("genre", "=", "male")->get();
        return view('welcome', compact('eleves', 'females', 'males'));
    }

    public function store(Request $request){
        $eleves = new Eleves;
        $eleves -> nom = $request -> nom;
        $eleves -> genre = $request -> genre;
        $eleves -> email = $request -> email;
        $eleves -> age = $request -> age;
        $eleves -> save();
        return redirect('/');
    }
}
