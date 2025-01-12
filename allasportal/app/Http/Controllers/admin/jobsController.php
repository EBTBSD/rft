<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobsModel;

class jobsController extends Controller
{
    // Összes állás listázása
    public function jobs()
    {
        $jobs = jobsModel::all(); // Összes állás lekérdezése
        return view('admin.jobs', ['records' => $jobs]); // Nézet visszaadása
    }

    // Új állás létrehozása
    public function create()
    {
        return view('admin.create_job'); // Nézet az új állás hozzáadásához
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        jobsModel::create($validated); // Új állás létrehozása

        return redirect()->route('admin.jobs')->with('success', 'Állás sikeresen hozzáadva!');
    }

    // Egy állás szerkesztése
    public function edit($id)
    {
        $job = jobsModel::findOrFail($id); // Állás keresése ID alapján
        return view('admin.edit_job', ['job' => $job]); // Szerkesztési nézet visszaadása
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $job = jobsModel::findOrFail($id); // Állás keresése ID alapján
        $job->update($validated); // Adatok frissítése

        return redirect()->route('admin.jobs')->with('success', 'Állás sikeresen frissítve!');
    }

    // Állás törlése
    public function delete($id)
    {
        $item = jobsModel::findOrFail($id); // Állás keresése ID alapján
        $item->delete(); // Törlés

        return redirect()->back()->with('success', 'Elem sikeresen törölve!');
    }
}
