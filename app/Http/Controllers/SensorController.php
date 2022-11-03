<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sensors.index');
    }

    public function sensors()
    {
        $request = Sensor::orderBy('id', 'desc')->limit(150)->get();

        return response()->json($request);
    }
}
