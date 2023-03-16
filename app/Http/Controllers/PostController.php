<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    
        // $posts = post::where('active', true)->get();

        $posts = post::active()->get();

        $data = [
           'posts' => $posts
        ];

        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request ->input('title');
        $content = $request ->input('content');

        post::insert([
            'title' => $title,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        return redirect('posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $selected_post = post::SelectById($id)->first();

        $view_data = [
            'post' => $selected_post
        ];

        return view ('posts.show', $view_data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    $selected_post = post::SelectById($id)->first();

    $view_data = [
        'post' => $selected_post
    ];

    return view ('posts.edit', $view_data);
    
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

        $title = $request->input('title');
        $content = $request->input('content');

        post::SelectById($id)
              ->update([
                 'title' => $title,
                 'content' => $content,
                 'updated_at' => date('Y-m-d H:i:s')
            ]);

        return redirect("posts/{$id}");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    post::SelectById($id)->delete();

        return redirect('posts');

    }

    
    public function trash() {

        $trash_item = post::onlyTrashed()->get();

        $data = [
            'posts' => $trash_item
        ];

        return view('posts.recylebin', $data);

    }

}