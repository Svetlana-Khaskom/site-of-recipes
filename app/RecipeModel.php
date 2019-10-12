<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeModel extends Model
{
    protected $table = 'recipes';

    protected $fillable = [
        'name',
        'description',
    ];
}
