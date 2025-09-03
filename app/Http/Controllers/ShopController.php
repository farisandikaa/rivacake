<?php

namespace App\Http\Controllers;

use App\Models\ShopItem;

class ShopController extends Controller
{
    public function index()
{
    $kuekering = ShopItem::whereRaw('LOWER(category) = ?', ['kuekering'])->get();
    $kuebasah = ShopItem::whereRaw('LOWER(category) = ?', ['kuebasah'])->get();

    return view('shop', compact('kuekering', 'kuebasah'));
}


}
