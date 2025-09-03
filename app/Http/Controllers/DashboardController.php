<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\ShopItem;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik jumlah post per kategori galery
        $AchievementCount = Post::where('category', 'Achievement')->count();
        $DocumentaryClassCount = Post::where('category', 'DocumentaryClass')->count();
        $ProductCount    = Post::where('category', 'Product')->count();

        // Total semua post
        $totalPosts = Post::count();

        // Ambil 5 post terbaru
        $latestPosts = Post::latest()->take(5)->get();

        // Statistik jumlah shop item per kategori
        $kuekeringCount = ShopItem::where('category', 'kuekering')->count();
        $kuebasahCount = ShopItem::where('category', 'kuebasah')->count();

        // Total semua item
        $totalitems = ShopItem::count();

        // Ambil 5 item terbaru
        $latestitems = ShopItem::latest()->take(5)->get();

        return view('dashboard', compact(
            'AchievementCount',
            'DocumentaryClassCount',
            'ProductCount',
            'totalPosts',
            'latestPosts',
            'kuekeringCount',
            'kuebasahCount',
            'totalitems',
            'latestitems'
        ));
    }
}
