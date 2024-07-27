<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Toy;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $toys = Toy::all();
        return view('index', compact('categories', 'toys'));
    }

    public function filter($id)
    {
        $categories = Category::all();
        $toys = Toy::where('category_id', $id)->get();
        return view('index', compact('categories', 'toys'));
    }

    public function show($id)
    {
        $categories = Category::all();
        $toy = Toy::findOrFail($id);
        return view('toys.detail', compact('categories', 'toy'));
    }

    public function cart()
    {
    }
}
