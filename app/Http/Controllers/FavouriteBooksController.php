<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FavouriteBooksController extends Controller
{
    public function index(User $user)
    {
        $user->load([
            'books' => fn (BelongsToMany $query) => $query->where('favourite', true)
                ->with('authors')
        ]);

        return view('favourites.index', ['user' => $user]);
    }
}
