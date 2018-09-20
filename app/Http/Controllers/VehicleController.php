<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use Illuminate\Support\Facades\Redirect;

class VehicleController extends Controller
{
    protected $_vehicle;

    public function __construct(Vehicle $vehicle)
    {
        $this->_vehicle = $vehicle;
    }
    /**
     * Load all vehicles
     */
    public function index()
    {
       $allVehicles = Vehicle::all();
       return view('vehicules.index')->with("allVehicles",$allVehicles);
       //return to vehicles view
    }

    /**
     * Store all kinds of vehicles
     */

    public function create()
    {
        return view('vehicules.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['model' => 'required',
            'make' => 'required',
            'type' => 'required',
            'year' => 'required']);
        //   creation
        $vehicle = new Vehicle();
        $vehicle->model = $request->input('model');
        $vehicle->make = $request->input('make');
        $vehicle->year = $request->input('year');
        $vehicle->type = $request->input('type');
        $vehicle->save();
        return redirect(route('vehicules.index'))->with('success', 'Vehicle  was added with success');
    }

    /**
     * Update all kinds of vehicles
     */

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view("vehicules.edit")->with("vehicle", $vehicle);
        //
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, ['model' => 'required',
            'make' => 'required',
            'type' => 'required',
            'year' => 'required']);

        $vehicle = Vehicle::find($id);

        $vehicle->model = $request->input('model');
        $vehicle->make = $request->input('make');
        $vehicle->year = $request->input('year');
        $vehicle->type = $request->input('type');
        $vehicle->save();
        return redirect(route('vehicules.index'))->with('success', 'Vehicle  was edited with success');

    }

    /**
     * Remove a vehicle
     */


    public function remove($id)
    {
       
        Vehicle::where('id', $id)->delete();
       
    return redirect(route('vehicules.index'));
    }
}
