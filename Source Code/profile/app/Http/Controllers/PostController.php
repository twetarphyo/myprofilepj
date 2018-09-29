<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Collection;


class PostController extends Controller
{
  var $showProjects;
  var $showHome;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  public function __construct() {
    //
    //     $this->middleware('auth')->except(['create','posts','update']);
    // }
    public function view()
    {
      $post=Post::all();
      return  view('index',compact('post'));
    }

    public function index()
    {
      $showProjects=false;
      $post=Post::all();
      return view('posts.posts',compact('showHome','showProjects','post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $showProjects=true;
        $showHome=false;
        return view('posts.create_post', compact('showProjects','$showHome'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
          $post=new Post;
          // dd(request(['title','content']));
          $this->validate(request(), [
            'title'=>'required',
            'content'=>'required'
          ]);
        	Post::create(request(['title','content']));

          // $post->title=request('title');
          // $post->content=request('content');
        	// $post->save();
          // dd($post);
          return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {   $showProjects=true;
        $pos=Post::find($post);
        return view('posts.update_post',compact('pos','showProjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Post $post)
    {
      // dd($request->input());
      // $pos=new Post();
          $pos=Post::find($request->input('id'));
          // dd($pos);
          $post->title=$request->input('title');
          $post->content=$request->input('content');
          $post->save();
          $post=Post::all();
          $showProjects=false;
          return view('posts.posts', compact('post','showProjects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      $pos=Post::find($id);
      $pos->delete();
      return back();
    }
}
