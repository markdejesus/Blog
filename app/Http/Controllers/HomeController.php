<?php

namespace App\Http\Controllers;

use \App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $blogList = Blog::all();
        return view('home', ['page_title' => 'Home Page', 'blog_list' => $blogList]);
    }
    public function blogList()
    {
        $blogList = Blog::all();
        return view('blog-list', ['page_title' => 'Blog List', 'blog_list' => $blogList]);
    }
    public function blogEdit(Blog $blog)
    {
        return view('blog-edit', ['page_title' => 'Blog Edit', 'blog' => $blog]);
    }
    public function blogUpdate(Request $request)
    {
        $blog = Blog::find($request->id);

        $blog->title = $request->title;
        $blog->snippet = $request->snippet;
        $blog->link = $request->link;
        $blog->posted_on = $request->posted_on;
        $blog->save();

        return redirect('blog-list');
    }


    public function blogAdd()
    {
        return view('blog-add', ['page_title'=>'Add new blog']);
    }
    public function blogAppend(Request $request)
    {
        Blog::create([
            'title' => $request->title,
            'snippet' => $request->snippet,
            'link' => $request->link,
            'posted_on' => $request->posted_on,
        ]);

        return redirect('blog-list');
    }
    public function bLogDelete(Blog $blog)
    {
        $blog->delete();
    
        return redirect('blog-list');
    
    }



}