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
        $toys = Toy::query();

        // Filter toys by category
        $toys = Toy::when($request->category, function ($query) use ($request) {
            return $query->where('category_id', $request->category);
        })->get();

        return view('index', compact('categories', 'toys'));
    }
}
