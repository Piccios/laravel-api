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
        $projects = Project::with('type', 'technologies')->paginate(10);

        return response()->json(
            [
                'response' => true,
                'message' => 'Lista progetti',
                'results' => $projects
            ]);
    }

    public function show(Project $project)
    {
        // Ritorna un JSON con il singolo progetto
        return $project;
    }
}
