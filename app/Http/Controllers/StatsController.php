<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    public function index()
    {
        $stats = DB::table('users')
            ->selectRaw('count(*) as total')
            ->selectRaw("count(case when status = 'confirmed' then 1 end) as confirmed")
            ->selectRaw("count(case when status = 'unconfirmed' then 1 end) as unconfirmed")
            ->selectRaw("count(case when status = 'cancelled' then 1 end) as cancelled")
            ->selectRaw("count(case when status = 'bounced' then 1 end) as bounced")
            ->first();

        return view('stats.index', ['stats' => $stats]);
    }
}
