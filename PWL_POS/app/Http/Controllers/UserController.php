<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::firstOrNew([
            'username' => 'manager23',
            'nama' => 'Manager dua tiga',
            'password' => Hash::make('password'),
            'level_id' => 5,
        ]);
        return view('user', ['data' => $user]);
    }
}
