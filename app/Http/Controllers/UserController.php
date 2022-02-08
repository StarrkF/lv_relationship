<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUWtihR()
    {
        dd(User::with(['cat','dept'])->get());
    }

    public function userInfo()
    {
        $users=User::with(['cat','dept'])->get();

        return view('index',compact('users'));
    }
}
