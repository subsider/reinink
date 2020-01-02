@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-header">Destinations</div>

                    <ul class="list-group list-group-flush">
                        @foreach ($destinations as $destination)
                            <li class="list-group-item d-flex">
                                <span class="mr-auto">{{ $destination->name }}</span>
                                <span>{{ $destination->last_flight }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="card">
                    <div class="card-header">Latest flights</div>

                    <ul class="list-group list-group-flush">
                        @foreach ($latestFlights as $latestFlight)
                            <li class="list-group-item d-flex">
                                <span class="mr-auto">{{ $latestFlight->name }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
