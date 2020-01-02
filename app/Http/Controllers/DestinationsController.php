<?php

namespace App\Http\Controllers;

use App\Destination;
use App\Flight;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    public function index()
    {
        // Add select
        $destinations = Destination::addSelect([
            'last_flight' => Flight::query()
                ->select('name')
                ->whereColumn('destination_id', 'destinations.id')
                ->latest('arrived_at')
                ->limit(1)
        ])->take(5)->get();

        // Subquery ordering
        $latestFlights = Destination::orderByDesc(
            Flight::query()
                ->select('arrived_at')
                ->whereColumn('destination_id', 'destinations.id')
                ->latest('arrived_at')
                ->limit(1)
        )->take(5)->get();

        return view('destinations.index', [
            'destinations' => $destinations,
            'latestFlights' => $latestFlights,
        ]);
    }
}
