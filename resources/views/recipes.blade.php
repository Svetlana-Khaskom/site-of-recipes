@extends('layouts.app')

@section('content')
    <div class="col-lg-3">
        <ul>
            <li><a href="/">Мои рецепты</a></li>
            <li><a href="/ingredients">Ингридиенты</a></li>
        </ul>
    </div>
    <div class="col-lg-9">
        <a href="">Добавить рецепт</a>
        <h3>Мои рецепты</h3>
        <example-component
            route-get-recipes-by-user-id="{{ $getRecipesByUserId }}"
        >
        </example-component>
    </div>
@endsection
