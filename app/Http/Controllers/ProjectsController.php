<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        return Project::all();
    }
}
