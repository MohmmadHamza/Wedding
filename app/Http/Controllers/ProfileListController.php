<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class ProfileListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch the authenticated user
        $user = Auth::user();

        // Get the count of posts for the authenticated user
        $postsCount = $user->posts()->count();

        // Get all posts for the authenticated user
        $posts = $user->posts()->with('likes')->get();

        // Get all media for the authenticated user's posts
        $postMedias = $posts->pluck('image_path'); // Assuming image_path is where you store media URLs

        return view('profile', [
            'user' => $user,
            'postsCount' => $postsCount,
            'postMedias' => $postMedias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
