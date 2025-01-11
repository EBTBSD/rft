<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\SexModel;

class usersController extends Controller
{
    // Felhasználók listázása
    public function users()
    {
        $users = User::all();
        return view('admin.users', ['records' => $users]);
    }

    // Új felhasználó létrehozása
    public function create()
    {
        $sexOptions = SexModel::all(); // Példa: nemek lekérdezése
        return view('admin.create_user', ['sexOptions' => $sexOptions]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer|min:0',
            'sex' => 'required|exists:sex_models,id',
            'email' => 'required|email|unique:users,email',
            'salary' => 'required|integer|min:0',
            'permission' => 'required|string',
        ]);

        User::create($validated); // Új felhasználó létrehozása
        return redirect()->route('admin.users')->with('success', 'Új felhasználó sikeresen létrehozva!');
    }

    // Felhasználó módosítása
    public function edit($id)
    {
        $user = User::findOrFail($id); // Felhasználó keresése ID alapján
        $sexOptions = SexModel::all(); // Példa: nemek lekérdezése
        return view('admin.edit_user', ['user' => $user, 'sexOptions' => $sexOptions]);
    }

    public function modify(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'age' => 'required|integer|min:0',
            'sex' => 'required|exists:sex_models,id',
            'email' => 'required|email|unique:users,email,' . $id,
            'salary' => 'required|integer|min:0',
            'permission' => 'required|string',
        ]);

        $user = User::findOrFail($id);
        $user->update($validated); // Adatok frissítése
        return redirect()->route('admin.users')->with('success', 'Felhasználó sikeresen módosítva!');
    }

    // Felhasználó törlése
    public function delete($id)
    {
        $user = User::findOrFail($id); // Felhasználó keresése ID alapján
        $user->delete(); // Törlés
        return redirect()->back()->with('success', 'Felhasználó sikeresen törölve!');
    }
}
