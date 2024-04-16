<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class ProjectService
{
    // get all projects
    public static function getAll(): Collection
    {
        return Project::all();
    }
}