<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all posts with the user and like count
        $allPosts = Post::with('user')
            ->withCount('likes')
            ->orderBy('created_at', 'desc')  // Order by creation date, descending
            ->get();

        // Get the latest post (most recent) from the list
        $latestPost = $allPosts->first();

        // Get top 10 posts with the most likes
        $topPosts = Post::withCount('likes')
            ->orderBy('likes_count', 'desc')  // Order by like count, descending
            ->take(10)  // Limit to top 10 posts
            ->get();

        return view('dashboard', compact('allPosts', 'latestPost', 'topPosts'));
    }


}
