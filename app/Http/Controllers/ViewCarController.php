<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;

class ViewCarController
{
    /**
     * Show the profile for a given user.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
//        $users = DB::table('car_info')->get();
//
//        $name = "";
//        foreach ($users as $user)
//        {
//            $name = $user->username;
//        }

        return view('view-car', []);
    }
}
