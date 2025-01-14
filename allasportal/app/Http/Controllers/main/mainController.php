<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobsModel;

class MainController extends Controller
{
    public function main()
    {
        return view('welcome');
    }

    public function jobs()
    {
        $jobs = JobsModel::all();
        return view('job.jobs', ['records' => $jobs]);
    }
}
