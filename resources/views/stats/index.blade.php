@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Stats</div>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex">
                            <span class="mr-auto">Confirmed: </span>
                            <span>{{ $stats->confirmed }}</span>
                        </li>
                        <li class="list-group-item d-flex">
                            <span class="mr-auto">Unconfirmed: </span>
                            <span>{{ $stats->unconfirmed }}</span>
                        </li>
                        <li class="list-group-item d-flex">
                            <span class="mr-auto">Bounced: </span>
                            <span>{{ $stats->bounced }}</span>
                        </li>
                        <li class="list-group-item d-flex">
                            <span class="mr-auto">Cancelled: </span>
                            <span>{{ $stats->cancelled }}</span>
                        </li>
                        <li class="list-group-item d-flex bg-info">
                            <span class="mr-auto">Total: </span>
                            <span>{{ $stats->total }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
