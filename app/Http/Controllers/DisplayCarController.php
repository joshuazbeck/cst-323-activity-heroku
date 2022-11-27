<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;

class DisplayCarController
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $car
     * @return \Illuminate\View\View
     */
    public function show($car)
    {

        return view('display-car', []);
    }
}
