<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RecipeResource;
use App\Repositories\RecipeRepository;

class RecipeController extends Controller
{
    private $recipeRepository;

    public function __construct(RecipeRepository $recipeRepository)
    {
        $this->recipeRepository = $recipeRepository;
    }

    public function getRecipesByUserId($userId)
    {
        $recipes = $this->recipeRepository->getByUser(User::find($userId));

        return RecipeResource::collection($recipes);
    }
}
