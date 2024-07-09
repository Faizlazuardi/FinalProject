<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\Category;
use Illuminate\Http\Request;
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
        return view('admin.toys', compact('toys','categories'));
    }

    public function create()
    {
        $categories = category::all();
        return view('toys.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images/toys', 'public');
        }
        Toy::create($validated);
        return redirect()->route('admin.toys')->with('success', 'Toy created successfully.');
    }

    public function show(string $id)
    {
        $toy = Toy::findOrFail($id);
        return view('admin.toys', compact('toy'));
    }

    public function edit(string $id)
    {
        $toy = Toy::findOrFail($id);
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
        return redirect()->route('admin.toys')->with('success', 'Toy deleted successfully.');
    }
}
