<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Ritorna un JASON con tutti i progetti
        return Project::all();
    }

    public function show(Project $project)
    {
        // Ritorna un JSON con il singolo progetto
        return $project;
    }
}
