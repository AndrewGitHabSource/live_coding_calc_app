<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\CalcService;

class CalcController extends Controller
{
    public function index(Request $request) {
        return view('calc');
    }

    public function calc(Request $request, CalcService $calc) {
        return view('calc', ['result' => $calc->calc($request->first, $request->second, $request->operation)]);
    }
}
