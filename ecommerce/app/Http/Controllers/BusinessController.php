<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BusinessController extends Controller
{
    public function index()
    {

        $businesses = Business::all();
        return view('businesses', [
            'businesses' => $businesses
        ]);

    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'string'
        ]);

        Business::create($input);

        return Redirect::route('businesses.index');
    }
}
