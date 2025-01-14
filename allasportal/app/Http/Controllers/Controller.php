<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

abstract class Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function redirectToHome()
    {
        return redirect()->route('home');
    }

    protected function getCurrentUser()
    {
        return Auth::user();
    }
}
