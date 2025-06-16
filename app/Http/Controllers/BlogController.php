<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show($id){
        $blogs = Blog::find($id);

        if(!$blogs){
            return view('blog.notfound');
        }

        return view('blog.show', compact('blogs'));
    }
}
