<?php

namespace App\Http\Controllers\Root;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'blog';
        $posts = Blog::all();
        return view('root.blog.index', compact('pages', 'posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pages = 'blog';
        $post = Blog::findOrFail($id);
        return view('root.blog.show', compact('post', 'pages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::where('id', $id)->first();
        $blog->delete();
        return redirect('/root/blog')->with('Success', 'Post Deleted');
    }

    public function deactivate(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        $blog->update(['status' => '0']);
        return redirect('/root/blog')->with('Success', 'Drafted');
    }

    public function activate(Request $request)
    {
        $blog = Blog::findOrFail($request->id);
        $blog->update(['status' => '1']);
        return redirect('/root/blog')->with('Success', 'Published');
    }
}
