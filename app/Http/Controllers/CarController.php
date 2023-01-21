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
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD ENTER CarController.edit($car)');
        $car = \App\Models\Car::where('id', '=', $car)->first();
        if ($car == null) {
            abort(404, "No car found with that id");
        }
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD EXIT CarController.edit($car)');
        return view('edit-car', ["car"=>$car]);
    }

    public function update($id){
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD ENTER CarController.update($id)');
        $params = request()->all();
        unset($params["_token"]);
        \App\Models\Car::where('id', '=', $id)->update($params);
        $cars = \App\Models\Car::all();
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD EXIT CarController.update($id)');
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
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD ENTER CarController.add()');
        $car = new \App\Models\Car();

        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD EXIT CarController.add()');

        return view('add-car', ["car" => $car]);
    }

    public function store()
    {
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD ENTER CarController.store()');
        $car = new \App\Models\Car();

        $car->carname = request('carname');
        $car->year = request('year');
        $car->mileage = request('mileage');
        $car->wheelnum = request('wheelnum');
        $car->accidentsreported = request('accidentsreported');
        $car->description = request('description');
        $car->brandname = request('brandname');
        $car->save();

        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD EXIT CarController.store()');

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
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD ENTER CarController.view($id)');

        $car = \App\Models\Car::where('id', '=', $id)->first();

        if ($car == null){
            abort(404, "No car found with that id");
        }
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD EXIT CarController.view($id)');
        return view('display-car', ["car"=>$car]);
    }

    public function delete($car)
    {
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD ENTER CarController.delete($car)');

        \App\Models\Car::where('id', '=', $car)->delete();
        $cars = \App\Models\Car::all();

        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD EXIT CarController.delete($car)');
        return view('list-car', ["cars" => $cars]);
    }
    public function list()
    {
        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD ENTER CarController.list()');

        $cars = \App\Models\Car::all();

        \Illuminate\Support\Facades\Log::channel('single')->info(date('[Y-m-d H:i:s] ') . ': ' . ' METHOD EXIT CarController.list()');

        return view('list-car', ["cars" => $cars]);
    }
}
