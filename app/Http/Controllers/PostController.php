<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function toggleLike(Request $request, Post $post)
    {
        $user = auth()->user();

        // Check if the user has already liked the post
        if ($user->likes()->where('post_id', $post->id)->exists()) {
            // Unlike the post
            $user->likes()->where('post_id', $post->id)->delete();
            return response()->json(['success' => true, 'liked' => false]);
        } else {
            // Like the post
            $user->likes()->create([
                'post_id' => $post->id,
                'user_id' => $request->input('userId'),
                'created_by' => $request->input('createdBy')
            ]);
            return response()->json(['success' => true, 'liked' => true]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'image' => 'required',
            'description' => 'required|string|max:255',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        Post::create([
            'user_id' => auth()->id(),
            'image_path' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('dashboard')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
