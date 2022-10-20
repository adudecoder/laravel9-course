<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        $user->posts()->create([
            'title' => 'Meu primeiro post',
            'cover' => 'Isso é um post',
            'content' => 'Conteudo',
        ]);
        // $user->posts()->delete();
        dd($user->posts->toArray());

        // $user->users()->create([
        //     'name' => 'Gabriel',
        //     'email' => 'gabriel@gmail.com',
        //     'address' => 'sp rua louca',
        // ]);
        return view('user', [
            'name' => 'Victor',
            'user' => $user
        ]);
    }
}
