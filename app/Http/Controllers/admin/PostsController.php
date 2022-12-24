<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::NotDeletedPosts()->with('user', 'category')->paginate(10);
        return view('admin.post.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::activePostCategories();
        if (!count($cats) > 0) {
            toastr()->error('No category found. You must add category first!');
            return redirect()->route('posts.index');
        }
        return view('admin.post.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'inputTitle' => 'required',
            'inputBody' => 'required',
            'Category_id' => 'required'
        ]);
        Post::create([
            'title' => $request['inputTitle'],
            'body' => $request['inputBody'],
            'status' => $request['checkBoxActive'] == 'on' ? true : false,
            'category_id' => $request['Category_id'],
            'user_id' => Auth::user() ? Auth::id() : 1,
            'counts' => 0,
        ]);

        toastr()->success('Post was created successfully!');
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if ($post) {
            $cats = Category::activePostCategories();
            return view('admin.post.edit', compact('post', 'cats'));
        }
        toastr()->error('Can\'t find post! Please try again.');
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'inputTitle' => 'required',
            'inputBody' => 'required',
            'category_id' => 'required'
        ]);
        $post = Post::find($id);
        if ($post) {
            $post->update([
                'title' => $request['inputTitle'],
                'body' => $request['inputBody'],
                'status' => $request['checkBoxActive'] == 'on' ? true : false,
                'category_id' => $request['category_id'],
                'updated_at' => Carbon::now()
            ]);
            toastr()->success('Post was updated successfully');
            return redirect()->route('posts.index');
        }
        toastr()->error('Post was not found! Please try again.');
        return back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->existPost($id)) {
            $post = $this->existPost($id);
            $post->update([
                'deleted_at' => Carbon::now()
            ]);
            toastr()->success('Post was deleted successfully');
            return redirect()->route('posts.index');
        }
        toastr()->error('Post was not found! Please try again.');
        return back();

    }

    public function existPost($id)
    {
        $post = Post::find($id);
        if ($post) {
            return $post;
        }
        return null;
    }
}
