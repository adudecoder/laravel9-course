<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        // $businessAll = Business::find(1)->update([
        //     'name' => 'Victor',
        //     'email' => 'victor@gmail.com',
        //     'address' => 'rua dos doidos'
        // ]);

        // $businessAll = Business::find(1);
        // $businessAll->name = 'Tiago';
        // $businessAll->email = 'tiago@laravel9.com';
        // $businessAll->address = 'Quadra c rua B';
        // $businessAll->save();

        $input = [
            'name' => 'Victor2',
            'email' => 'victor2@gmail.com',
            'address' => 'rua dos doidos2'
        ];

        $businessAll = Business::find(1);
        $businessAll->fill($input);
        $businessAll->save();

        dd($businessAll);
    }
}
