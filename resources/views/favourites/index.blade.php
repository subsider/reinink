@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }} favourite books</div>

                    <ul class="list-group list-group-flush">
                        @foreach ($user->favouriteBooks() as $book)
                            <li class="list-group-item">
                                {{ $book->title }} by
                                @foreach ($book->authors as $author)
                                    {{ $author->full_name }}{{ !$loop->last ? ',' : '' }}
                                @endforeach
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
