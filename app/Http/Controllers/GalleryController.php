<?php

namespace App\Http\Controllers;

use App\Models\Post;

class GalleryController extends Controller
{
    public function index()
{
    $Achievement = Post::whereRaw('LOWER(category) = ?', ['Achievement'])->get();
    $DocumentaryClass = Post::whereRaw('LOWER(category) = ?', ['DocumentaryClass'])->get();
    $Product    = Post::whereRaw('LOWER(category) = ?', ['Product'])->get();

    return view('gallery', compact('Achievement', 'DocumentaryClass', 'Product'));
}


}
