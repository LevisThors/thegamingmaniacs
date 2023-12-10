<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class AdminPostController extends Controller
{
    public function show()
    {
        $posts = Post::all();

        return view(
            'admin/posts/admin-post',
            [
                'posts' => $posts,
            ]
        );
    }

    public function delete($id)
    {
        $post = Post::where('id', $id)->first();

        $post->delete();

        return redirect('/admin/posts');
    }

}
