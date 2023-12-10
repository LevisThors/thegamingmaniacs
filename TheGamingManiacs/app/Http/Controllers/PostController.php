<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;



class PostController extends Controller
{
    public function show()
    {
        $categories = Category::whereIn('slug', ['feature', 'review', 'hot', 'trending'])
            ->with(['posts' => function ($query) {
                $query->orderBy('created_at', 'desc');
            }])
            ->get();

        $featured = $categories->firstWhere('slug', 'feature');
        $review = $categories->firstWhere('slug', 'review');
        $hotGames = $categories->firstWhere('slug', 'hot');
        $trending = $categories->firstWhere('slug', 'trending');


        return view(
            'welcome',
            [
                'featured' => $featured,
                'review' => $review,
                'hotGames' => $hotGames,
                'trending' => $trending,
            ]
        );
    }

    public function show_single($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view(
            'post',
            [
                'post' => $post,
            ]
        );
    }

    public function add()
    {
        $categories = Category::all();
        return view(
            'admin/posts/add-post',
            ['categories' => $categories]
        );
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'meta_description' => 'required|max:255',
            'slug' => 'required|unique:posts,slug|max:255',
            'categories' => 'required|array',
            'image' => 'required|image|max:2048',
            'body' => 'required',
        ]);


        $post = new Post;
        $post->title = $validatedData['title'];
        $post->meta_description = $validatedData['meta_description'];
        $post->slug = $validatedData['slug'];
        $post->image = $validatedData['image']->store('images', 'public');

        $post->body = $validatedData['body'];

        $post->save();

        $post->categories()->attach($validatedData['categories']);

        return redirect('/')->with('success', 'Post created successfully.');
    }
}
