<?php

namespace App\Repositories;

class RecipeRepository
{
    /**
     * @param $user
     *
     * @return mixed
     */
    public function getByUser($user)
    {
        return $user->recipes()->get();
    }
}
