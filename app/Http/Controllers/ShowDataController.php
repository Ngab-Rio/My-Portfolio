<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Projects;
use Illuminate\Http\Request;

class ShowDataController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        $projects = Projects::all();
        return view('index', compact('blogs', 'projects'));
    }

}
