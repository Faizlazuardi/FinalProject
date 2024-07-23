<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Toy;
use App\Models\User;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $toys = Toy::all();
        return view('index', compact('categories', 'toys'));
    }
    public function show(string $category)
    {
        $categories = Category::all();
        $toy = Toy::findOrFail($category);
        return view('index', compact('categories','toy'));
    }
    public function detail(Request $request)
    {
        $toyName = $request->input('toy');
        $toy = Toy::where('name', $toyName)->firstOrFail();
        return view('index', compact('toy'));
    }
}
