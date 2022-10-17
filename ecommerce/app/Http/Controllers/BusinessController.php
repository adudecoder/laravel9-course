<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $businessAll = Business::create([
            'name' => 'Victor Martins',
            'email' => 'victor@gmail.com',
            'address' => 'Rua a Quadra b',
        ]);

        dd($businessAll);
    }
}
