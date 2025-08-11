<?php 

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // Menampilkan semua post
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }

    // Form tambah post
    public function create()
    {
        return view('posts.create');
    }

    // Simpan post baru
    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|max:255',
            'content'  => 'required',
            'category' => 'required|string',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            // Simpan di storage/app/public/posts
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        Post::create([
            'title'    => $request->title,
            'content'  => $request->content,
            'image'    => $imagePath, // Simpan hanya relative path
            'category' => ucfirst(strtolower(trim($request->category)))
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil dibuat.');
    }

    // Form edit post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Update post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'    => 'required|max:255',
            'content'  => 'required',
            'category' => 'required|string',
            'image'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $imagePath = $post->image; // default gambar lama

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($post->image && Storage::disk('public')->exists($post->image)) {
                Storage::disk('public')->delete($post->image);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        $post->update([
            'title'    => $request->title,
            'content'  => $request->content,
            'image'    => $imagePath, // relative path
            'category' => ucfirst(strtolower(trim($request->category)))
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil diperbarui.');
    }

    // Hapus post
    public function destroy(Post $post)
    {
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post berhasil dihapus.');
    }

    // Lihat detail post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
