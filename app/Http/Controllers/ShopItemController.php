<?php
namespace App\Http\Controllers;

use App\Models\ShopItem;
use Illuminate\Http\Request;

class ShopItemController extends Controller
{
    public function publicIndex()
    {
        $items = ShopItem::latest()->get();
        return view('shop', compact('items'));
    }

    public function index()
{
    $items = ShopItem::latest()->paginate(10); 
    return view('admin.shop.index', compact('items'));
}

    public function create()
    {
        return view('admin.shop.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'category'=> 'required|string'
    ]);

    $data = $request->only(['name', 'description', 'price', 'category']);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('shop_images', 'public');
        $data['image'] = $imagePath;
    }

    ShopItem::create($data);

    return redirect()->route('shop-items.index')->with('success', 'Item berhasil ditambahkan.');
}


    public function edit($id)
    {
        $item = ShopItem::findOrFail($id);
        return view('admin.shop.edit', compact('item'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'category'=> 'required|string',
    ]);

    $item = ShopItem::findOrFail($id);

    $data = $request->only(['name', 'description', 'price', 'category']);

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('shop_images', 'public');
        $data['image'] = $imagePath;
    }

    $item->update($data);

    return redirect()->route('shop-items.index')->with('success', 'Item berhasil diperbarui.');
}


    public function destroy($id)
    {
        ShopItem::destroy($id);
        return redirect()->route('shop-items.index')->with('success', 'Item berhasil dihapus.');
    }
    public function show($id)
    {
        $item = ShopItem::findOrFail($id);
        return view('admin.shop.show', compact('item'));
    }
    
    
}
