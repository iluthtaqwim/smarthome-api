<?php

namespace App\Http\Controllers;

use App\Models\Parameter;
use App\Http\Requests\StoreParameterRequest;
use App\Http\Requests\UpdateParameterRequest;
use Illuminate\Http\Request;
use Validator;

class ParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate =  Validator::make($request, [
            'voltage' => 'required|numeric',
            'current' => 'required|numeric',
            'power' => 'required|numeric',
            'frequency' => 'required|numeric',
            'power_factor' => 'required|numeric',
            'humidity' => 'required|numeric',
            'temperature' => 'required|numeric',
            'hardware_code' => 'required|string',
        ]);
        if ($validate->fails()) {
            return response()->json(['error' => $validate->errors()], 401);
        } else {
            $parameter = Parameter::create($request->all());
            return response()->json($parameter, 201);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParameterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreParameterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function show(Parameter $parameter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function edit(Parameter $parameter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParameterRequest  $request
     * @param  \App\Models\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParameterRequest $request, Parameter $parameter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parameter  $parameter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parameter $parameter)
    {
        //
    }
}
