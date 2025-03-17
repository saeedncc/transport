<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Vehicle;
use App\Http\Requests\VehicleRequest;
use App\Http\Requests\VehicleAssignRequest;
use App\Http\Resources\VehicleCollection;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Response
    {

        $vehicles=Vehicle::select(['id','plate_number','brand','model','year','driver_id'])
            ->orderBy('id','desc')
            ->get();

        if($vehicles->isEmpty()){
            return response([
                'status' => false,
                'message' => trans('main.notfound'),
            ]);
        }

        return response([
            'status' => true,
            'data' => (new VehicleCollection($vehicles)),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleRequest $request) : Response
    {
        $data = $request->validated();

        Vehicle::create($data);

        return response([
            'status' => true,
            'message' => trans('main.registered'),
        ]);

    }

     /**
     * Assign a Driver to A Vehicle.
     */
    public function assignDriver(Vehicle $vehicle, VehicleAssignRequest $request) : Response
    {
        $data = $request->validated();

        $vehicle->fill($data);
        $vehicle->touch();
        $vehicle->save();

        return response([
            'status' => true,
            'message' => trans('main.registered'),
        ]);

    }

    public function withDriver() : Response
    {

        $vehicles=Vehicle::select(['id','plate_number','brand','model','year','driver_id'])
            ->with('driver:id,name,license_number,phone_number')
            ->whereNotNull('driver_id')
            ->orderBy('id','desc')
            ->get();

        if($vehicles->isEmpty()){
            return response([
                'status' => false,
                'message' => trans('main.notfound'),
            ]);
        }


        return response([
            'status' => true,
            'data' => (new VehicleCollection($vehicles)),
        ]);

    }

}
