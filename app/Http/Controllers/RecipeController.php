<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function recipePage()
    {
        return view('recipes', [
            'getRecipesByUserId' => route('get.recipes.byUserId', Auth::user()->id)
        ]);
    }

    public function addRecipePage()
    {
        return view('add-recipe');
    }
}
