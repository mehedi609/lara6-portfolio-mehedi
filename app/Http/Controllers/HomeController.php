<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $skills = [
            ['name' => 'Laravel', 'value' => 90],
            ['name' => 'Django', 'value' => 70],
            ['name' => 'React', 'value' => 85],
            ['name' => 'VueJS', 'value' => 80],
            ['name' => 'NextJS', 'value' => 85],
            ['name' => 'NuxtJS', 'value' => 80],
            ['name' => 'NodeJS', 'value' => 85],
            ['name' => 'Express', 'value' => 90],
            ['name' => 'MongoDB', 'value' => 80],
            ['name' => 'MySQL & Postgres', 'value' => 90],
            ['name' => 'Python', 'value' => 90],
            ['name' => 'jQuery', 'value' => 85],
            ['name' => 'HTML5', 'value' => 90],
            ['name' => 'CSS3', 'value' => 70],
        ];

        return view('index', compact('skills'));
    }
}
