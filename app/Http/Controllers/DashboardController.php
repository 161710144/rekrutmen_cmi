<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
      if (Auth::user()->hasRole('admin')) {
        return view('admin.dash');
      }elseif(Auth::user()->hasRole('hrd')){
        return view('hrd.dash');
      }elseif (Auth::user()->hasRole('user')){
        return view('user.dash');
      }
    }
}
