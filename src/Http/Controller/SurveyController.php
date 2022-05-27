<?php

namespace Packagnevisi\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Packagnevisi\Http\requests\SurveyRequest;
use Packagnevisi\Models\Audit;

class SurveyController extends Controller
{
    public function audit()
    {
        return ['hello','this is audit route'];
    }

    public function view()
    {
        return view('survey::survey-index');
    }

    public function add()
    {
        return view('survey::add-survey');
    }

    public function store(SurveyRequest $request)
    {
        $in = $request->all();
        Audit::query()->create($in);
        return redirect(route('survey'));
    }
}
