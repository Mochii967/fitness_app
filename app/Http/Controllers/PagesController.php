<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\User;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'fitness']);
    }

    public function index() {
        $articles = articles::where('favorite', '1')->get(); 
        return view('pages.index')->with('articles', $articles);
    }

    public function fitness() {
        return view('pages.fitness');
    }

    public function bmi() {
        return view('pages.bmi');
    }

    public function calculatebmi(Request $request) {
        $this->validate($request, [
            'weight' => 'required',
            'height' => 'required'
        ]);
        
        $weight = $request->input('weight');
        $height = $request->input('height');
        $bmi = $weight / ($height * $height);
        $id = auth()->user()->id;

        $user = User::find($id);
        $user->bmi = $bmi;
        $user->save();

        return redirect('/home')->with('success', 'You have calculated your bmi successfully');
    }

    public function calorie() {
        return view('pages.calorie');
    }

    public function calculatecalorie(Request $request) {
        $this->validate($request, [
            'sex' => 'required',
            'weight' => 'required',
            'height' => 'required',
            'age' => 'required'
        ]);
        
        //code for finding out the calories
        $sex = $request->input('sex');
        $weight = $request->input('weight');
        $height = $request->input('height');
        $age = $request->input('age');

        if ($sex == 'Male') {
            //10 x weight (kg) + 6.25 x height (cm) – 5 x Age + 5
            $calorie = 10 * $weight + 6.25 * $height - 5 * $age + 5;
        } else if ($sex == 'Female') {
            //10 x weight (kg) + 6.25 x height (cm) – 5 x Age – 161
            $calorie = 10 * $weight + 6.25 * $height - 5 * $age - 161;
        }

        $id = auth()->user()->id;

        $user = User::find($id);
        $user->calorie = $calorie;
        $user->save();

        return redirect('/home')->with('success', 'You have calculated your daily calorie intake successfully');
    }
}
