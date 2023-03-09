<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

        $posts = storage::get('posts.txt'); 
        $posts = explode("\n", $posts);
    
        // echo $posts;
        // exit;

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

        $posts = storage::get('posts.txt'); 
        $posts = explode("\n", $posts);

        $new_post = [
            count($posts) + 1,
            $title,
            $content,
            date('Y-m-d H:i:s')
        ];

        $new_post = implode(',', $new_post);

        array_push($posts, $new_post);
        $posts = implode("\n", $posts);

        // Nampilin datanya
        // Untuk menuliskan ulang file posts.txt //
        Storage::write('posts.txt', $posts );
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
        $posts = storage::get('posts.txt'); 
        $posts = explode("\n", $posts);
        $selected_post = Array();

        foreach ($posts as $post){
            $post = explode(",", $post);
            if($post[0] == $id){
                $selected_post = $post;
            }
        }

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
        //
    }
}
