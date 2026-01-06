<?php

namespace App\Http\Controllers;
use App\Models\ProjectDetail;
use App\Models\SetInterval;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('auth.login');
        // return view('font_end.body');
    }
    public function fullDisplay()
    {
        $results = ProjectDetail::where('status', 'Enabled')->get();

        $setInterval = SetInterval::latest()->first();
        $interval = !empty($setInterval->set_time) ? (int)$setInterval->set_time * 1000 : 5 * 1000;  // ms

        return view('auth.fullDisplay', compact('results', 'interval'));
    }







    public function about_us()
    {
        return view('font_end.about_us');
    }

    public function films_released_by_decade($decade)
    {
        return view('font_end.films_released_by_decade', compact('decade'));
    }

    public function rate_card(){
        return view('font_end.rate_card');
    }
}
