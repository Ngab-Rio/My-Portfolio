<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

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
