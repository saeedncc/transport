<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Driver;
use App\Http\Requests\DriverRequest;
use App\Http\Resources\DriverCollection;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : Response
    {

		$drivers=Driver::select('id','name','license_number','phone_number')
            ->orderBy('id','desc')
            ->get();

        if($drivers->isEmpty()){
            return response([
                'status' => false,
                'message' => trans('main.notfound'),
            ]);
        }

        return response([
            'status' => true,
            'data' => (new DriverCollection($drivers)),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DriverRequest $request) : Response
    {
        $data = $request->validated();

        Driver::create($data);

        return response([
            'status' => true,
            'message' => trans('main.registered'),
        ]);

    }

}
