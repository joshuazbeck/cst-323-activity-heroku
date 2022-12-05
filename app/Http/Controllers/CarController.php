<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;

class CarController
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $car
     * @return \Illuminate\View\View
     */
    public function edit($car)
    {
        $car = \App\Models\Car::where('id', '=', $car)->first();
        if ($car == null) {
            abort(404, "No car found with that id");
        }
        return view('edit-car', ["car"=>$car]);
    }

    public function update($id){
        $params = request()->all();
        unset($params["_token"]);
        \App\Models\Car::where('id', '=', $id)->update($params);
        $cars = \App\Models\Car::all();
        return view('list-car', ["cars" => $cars]);
    }
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function add()
    {
        $car = new \App\Models\Car();

        return view('add-car', ["car" => $car]);
    }

    public function store()
    {
        $car = new \App\Models\Car();

        $car->carname = request('carname');
        $car->year = request('year');
        $car->mileage = request('mileage');
        $car->wheelnum = request('wheelnum');
        $car->accidentsreported = request('accidentsreported');
        $car->description = request('description');
        $car->brandname = request('brandname');
        $car->save();
        return $this->list();
    }

    /**
     * Show the profile for a given user.
     *
     * @param  int  $car
     * @return \Illuminate\View\View
     */
    public function view($id)
    {
        $car = \App\Models\Car::where('id', '=', $id)->first();

        if ($car == null){
            abort(404, "No car found with that id");
        }
        return view('display-car', ["car"=>$car]);
    }

    public function delete($car)
    {
        \App\Models\Car::where('id', '=', $car)->delete();
        $cars = \App\Models\Car::all();
        return view('list-car', ["cars" => $cars]);
    }
    public function list()
    {
//        $users = DB::table('car_info')->get();
//
//        $name = "";
//        foreach ($users as $user)
//        {
//            $name = $user->username;
//        }
        $cars = \App\Models\Car::all();
        return view('list-car', ["cars" => $cars]);
    }
}
