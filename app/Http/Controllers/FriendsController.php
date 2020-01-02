<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FriendsController extends Controller
{
    public function index(User $user)
    {
        $user->load(['friends.books' => fn (BelongsToMany $query) => $query->with('authors')->favourite()]);

        return view('friends.index', ['user' => $user]);
    }
}
