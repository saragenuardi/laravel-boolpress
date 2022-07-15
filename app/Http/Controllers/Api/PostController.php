<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $posts_with_category = [];
        foreach ($posts as $post) {
            $category = $post->category;
            $post['cateogry'] = $category;
            $posts_with_category[] = $post;
        }

        //dd($posts_with_category);
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }

    public function show($slug) {
        $post = Post::where('slug', '=', $slug)->with(['category', 'tags'])->first();
        
        if ($post) {
            return response()->json([
                'success' => true,
                'results' => $post
            ]);
        }
          return response()->json ([
            'success' => false,
            'error' => 'nessun post trovato'
          ]);
    }

    
}
