<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Province;

class ProvinceController extends Controller
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
        $provinces = Province::all();
        return response()->json($provinces, 200);
    }

    public function department($department)
    {
        $provinces = Province::where('department_id', $department)->get();
        return response()->json($provinces, 200);
    }
}
