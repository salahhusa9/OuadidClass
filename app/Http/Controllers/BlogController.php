<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        
        return view('blog.index',['blogs' => $blogs]);
    }
    public function create()
    {
        return view('blog.create');
    }

    public function store(BlogRequest $input)
    {

        Blog::create([
            'title' => $input->title,
            'body' => $input->body,
        ]);

            return redirect(route('blog'));
    }

    public function edit($id){

        $blog =  Blog::findOrFail($id);

        return view('blog.edit',['blog' => $blog]);
    }

    public function update(BlogRequest $input , $id)
    {
        $blog =  Blog::findOrFail($id);

        $blog->update([
            'title' => $input->title,
            'body' => $input->body,
        ]);

        return redirect(route('blog'));
    }

    public function delete($id)
    {
        $blog =  Blog::findOrFail($id);

        $blog->delete();

        return redirect(route('blog'));

    }
}
