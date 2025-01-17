<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NevRequest;
use App\Http\Requests\SalaryRequest;
use App\Http\Requests\PassRequest;
use App\Http\Requests\EmailRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile()
    {
        $user = User::all();
        return view('auth.profile', ['records' => $user]);
    }

    public function modifyName(NevRequest $request, $id)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        if (Auth::attempt($request->validated())) {
            $user->name = $request->input('name');
            $user->save();
            return redirect()->route('auth.felhasznalo')->with("Sikeres módosítás!");
        } else {
            $u = User::all();
            return view('auth.profile', ['records' => $u]);
        }
    }

    public function modifyEmail(EmailRequest $request, $id)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        if (Auth::attempt($request->validated()) && $request->input('oldemail') != $request->input('email') && $request->input('email') == $request->input('comfemail')) {
            $user->email = $request->input('email');
            $user->save();
            return redirect()->route('auth.felhasznalo')->with("Sikeres módosítás!");
        } else {
            $u = User::all();
            return view('auth.profile', ['records' => $u]);
        }
    }

    public function modifypass(PassRequest $request, $id)
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        if (Auth::attempt($request->validated()) && $request->input('oldpass') != $request->input('password') && $request->input('password') == $request->input('comfpass')) {
            $user->password = Hash::make($request->input('password'));
            $user->save();
            return redirect()->route('auth.felhasznalo')->with("Sikeres módosítás!");
        } else {
            $u = User::all();
            return view('auth.profile', ['records' => $u]);
        }
    }

    public function modifySalary(SalaryRequest $request, $id)
    {
        $userId = Auth::id();
        $user = User::findOrFail($id);

        if (Auth::attempt($request->validated())) {
            $user->salary = $request->input('salary');
            $user->sex = $request->input('sex');
            $user->save();
            return redirect()->route('auth.felhasznalo')->with("Sikeres módosítás!");
        } else {
            $u = User::all();
            return view('auth.profile', ['records' => $u]);
        }
    }
}
