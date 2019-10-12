<?php

Route::get('/', [
    'as' => 'get.recipes.recipesPage',
    'uses' => 'RecipeController@recipePage'
])->middleware('auth');

Auth::routes();
