<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    public function index()
    {
        $role=Auth::user()->role;
        if($role=="1")
        {
            $user_asi = User::where('role', 0)->get();
            return view('admin.dashboard')->with('user_asi', $user_asi)->with($role);
            dd($user_asi);
        }
        else
        {
            return view('dashboard');
        }
    }
}
