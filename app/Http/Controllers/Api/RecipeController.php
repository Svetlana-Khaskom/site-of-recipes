<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RecipeResource;

class RecipeController extends Controller
{
    public function getRecipesByUserId($userId)
    {
        $recipes = User::find($userId)->recipes()->get();
        return RecipeResource::collection($recipes);
    }
}
