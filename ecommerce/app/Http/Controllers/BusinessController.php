<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businessAll = Business::all();

        $businessWhere = Business::where('name', 'Lind-Reilly')->get();
        $businessWhereFirst = Business::where('name', 'Lind-Reilly')->first();

        $businessFind = Business::find(1);
        dd($businessFind, $businessAll, $businessWhere, $businessWhereFirst);
    }
}
