<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;

class EditCarController
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $car
     * @return \Illuminate\View\View
     */
    public function show($car)
    {
        return view('edit-car', []);
    }
}
