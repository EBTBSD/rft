<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NewjobRequest;
use App\Http\Requests\AppRequest;
use App\Models\JobsModel;
use App\Models\ApplicationsModel;

class FormController extends Controller
{
    public function newjob()
    {
        return view('form.newjob');
    }

    public function store(NewjobRequest $request)
    {
        JobsModel::create($request->validated());
        return view('/jobs/newjob');
    }

    public function applyStore(AppRequest $request)
    {
        if (ApplicationsModel::create($request->validated())) {
        } else {
            $j = JobsModel::all();
            return view('job.jobs', ['records' => $j]);
        }
    }
}
