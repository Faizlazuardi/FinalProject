<?php
namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ToyController extends Controller
{
    public function index()
    {
        $categories = Category::with('toys')->get(); // Eager load toys with categories
        return view('index', compact('categories'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('toys.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images/toys', 'public');
        }

        Toy::create($validated);

        return redirect()->route('toys.index')->with('success', 'Toy created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $toy = Toy::findOrFail($id);
        return view('toys.show', compact('toy'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $toy = Toy::findOrFail($id);
        $categories = Category::all();
        return view('toys.edit', compact('toy', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
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

        return redirect()->route('toys.index')->with('success', 'Toy updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
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
