<?php

use App\Author;
use App\Book;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /** @var Collection $users */
        $users = factory(User::class, 200)->create();

        $users->take(10)->each(fn (User $user) =>
            $user->friends()->attach($users->where('id', '!=', $user->id)->random(rand(1, 6)))
        );

        /** @var Collection $authors */
        $authors = factory(Author::class, 30)->create()->pluck('id');

        /** @var Collection $books */
        factory(Book::class, 50)->create()->each(function (Book $book) use ($authors, $users) {
            $book->authors()->attach($authors->random(rand(1, 2)));
            $book->users()->attach($users->random(rand(1, 10)), ['favourite' => rand(0, 1)]);
        });

        // $this->call(UsersTableSeeder::class);
    }
}
