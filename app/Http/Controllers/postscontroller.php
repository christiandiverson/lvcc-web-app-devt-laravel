<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\post;
use Auth;
class postscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $posts = post::all();
        return view ('posts.index', compact('posts'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function  store(Request $request)
    {

        //return $request->all(); 
            
      $post = new post;   

      $post-> user_id = Auth::user()->id;
      $post->status = $request->status;
      $post->live = (boolean) $request->live;
      $post->post_on = $request->post_on;

      $post->save();
       
       return redirect('/posts');

        //post::create($request->all());

    }

    /**      * Display the specified resource.      *      * @param  int  $id
* @return \Illuminate\Http\Response      */     
public function show($id) 
    {         
        $posts = post::findorfail($id);
        return view( 'posts.show',compact('posts'));    

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $posts = post::findorfail($id);
        return view( 'posts.edit',compact('posts'));    

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
        //$posts = post::findorfail($id);

        $post = new post;   

      $post-> user_id = Auth::user()->id;
      $post->status = $request->status;
      $post->live = (boolean) $request->live;
      $post->post_on = $request->post_on;

      $post->save();


        //if(!isset($request->live))
          //  $posts->update(array_merge($request->all(), ['live'=>false]));
        //else
        //$posts->update($request->all());     

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $posts = post::findorfail($id);
          $posts->delete();
           return redirect('/posts');

           //post::destroy();
    }
}
