<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class ToyController extends Controller
{
    public function index(Request $request)
    {
        $katakunci = $request->get('katakunci');
        $query = Toy::query();
        if (!empty($katakunci)) {
            $query->where('name', 'LIKE', "%$katakunci%");
        }
        $categories = category::all();
        $toys = $query->paginate(9);
        return view('toys.index', compact('toys', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('toys.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image||max:2048',
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'stock' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
        ]);

        $image = $request->file('image')->move(public_path('img'));

        Toy::create([
            'category_id' => $request->category_id,
            'image' => $image,
            'name' => $request->name,
            'description' => $request->description,
            'stock' => $request->stock,
            'price' => $request->price,
        ]);
        return redirect()->route('toys.index')->with('success', 'Toy created successfully.');
    }

    public function show(string $id)
    {
        $toy = Toy::findOrFail($id);
        return view('toys.index', compact('toy'));
    }

    public function edit(string $id)
    {
        $toys = Toy::findOrFail($id);
        $categories = Category::all();
        return view('toys.edit', compact('toys', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $toy = Toy::findOrFail($id);

        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            if ($toy->image) {
                Storage::disk('public')->delete($toy->image);
            }
            $validated['image'] = $request->file('image')->store('images/toys', 'public');
        }
        $toy->update($validated);
        return redirect()->route('admin.toys')->with('success', 'Toy updated successfully.');
    }

    public function destroy(string $id)
    {
        $toy = Toy::findOrFail($id);
        if ($toy->image) {
            Storage::disk('public')->delete($toy->image);
        }
        $toy->delete();
        return redirect()->route('toys.index')->with('success', 'Toy deleted successfully.');
    }
}
