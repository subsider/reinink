<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot('favourite')
            ->withTimestamps();
    }

    public function scopeFavourite()
    {
        return $this->users()
            ->where('pivot.favourite', true);
    }
}
