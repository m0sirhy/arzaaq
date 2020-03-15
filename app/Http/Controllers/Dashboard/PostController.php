<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Intervention\Image\Facades\Image;
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
        //
        return view('dashboard.posts.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::get();
        return view('dashboard.posts.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required'

        ]);
        $request_data = $request->except('image');

        if ($request->image) {
            Image::make($request->image)->save(public_path('uploads/post_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();
        } 
      // dd($request_data);
        Post::Create($request_data);
         session()->flash('success', __('site.added_successfully'));
         return redirect()->route('dashboard.posts.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Post $post)
    {
        //
        return view('dashboard.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        
        if ($request->image) {

            if ($post->image != 'default.png') {

                Storage::disk('public_uploads')->delete('/post_images/' . $post->image);
                    
            }//end of if

            Image::make($request->image)->save(public_path('uploads/post_images/' . $request->image->hashName()));

            $request_data['image'] = $request->image->hashName();

        }//end of if
        
        $post->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('dashboard.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        if ($post->image != 'default.png') {

            Storage::disk('public_uploads')->delete('/post_images/' . $post->image);

        }//end of if

        $post->delete();
        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('dashboard.posts.index');
    }
}
