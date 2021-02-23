<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function show()
    {
        $data = User::all();
        $i = 1;
        return view('Admin/Admin/index', compact(['data', 'i']));
    }
}
