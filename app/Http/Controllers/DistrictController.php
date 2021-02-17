<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\District;

class DistrictController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $districts = District::all();
        return response()->json($districts, 200);
    }

    public function departments($departments)
    {
        $districts = District::where('department_id', $department)->get();
        return response()->json($districts, 200);
    }
    
    public function province($province)
    {
        $districts = District::where('province_id', $province)->get();
        return response()->json($districts, 200);
    }
}
