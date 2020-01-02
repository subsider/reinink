@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }} friends</div>

                    <div class="card-body">
                        @foreach ($user->friends as $friend)
                            <h2 class="py-3">{{ $friend->name }}</h2>
                            <ul class="list-group list-group">
                                @foreach ($friend->favouriteBooks() as $book)
                                    <li class="list-group-item">
                                        {{ $book->title }} by
                                        @foreach ($book->authors as $author)
                                            {{ $author->full_name }}{{ !$loop->last ? ',' : '' }}
                                        @endforeach
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
