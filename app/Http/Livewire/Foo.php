<?php

namespace App\Http\Livewire;

use App\Destination;
use App\Flight;
use Livewire\Component;

class Foo extends Component
{
    public function render()
    {
        $destinations = Destination::addSelect([
            'last_flight' => Flight::query()
                ->select('name')
                ->whereColumn('destination_id', 'destinations.id')
                ->latest('arrived_at')
                ->limit(1)
        ])->take(5)->get();

        return view('livewire.foo', [
            'destinations' => $destinations,
        ]);
    }
}
