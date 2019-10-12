<?php

Route::prefix('recipes')->group(function () {
    Route::get('/get-by-user-id/{id}', [
        'as' => 'get.recipes.byUserId',
        'uses' => 'RecipeController@getRecipesByUserId'
    ]);
});
