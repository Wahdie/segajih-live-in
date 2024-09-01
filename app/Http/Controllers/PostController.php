<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showByCategoryAndTitle($categorySlug, $postSlug = null)
    {
        // Cari kategori berdasarkan nama
        $category = Category::where('slug', $categorySlug)->firstOrFail();
        $categoryName = $category->name;
        // Jika post title diberikan, cari post berdasarkan judul dan kategori
        if ($postSlug) {
            $posts = Post::where('category_id', $category->id)
                         ->where('slug', 'like', '%' . $postSlug . '%')
                         ->get();
        } else {
            // Jika tidak, ambil semua post dalam kategori tersebut
            $posts = Post::where('category_id', $category->id)->get();
        }

        return view('posts.index', [
            'categorySlug' => ucfirst($categorySlug),
            'categoryName' => ucfirst($categoryName),
            'posts' => $posts,
        ]);
    }
}
