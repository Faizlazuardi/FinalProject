<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\Category;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    public function index($name = null)
    {
        $categories = Category::all();
        if ($name) {
            // Filter toys
            $toys = Toy::where('name', 'like', '%' . $name . '%')->get();
        } else {
            // Get all toys
            $toys = Toy::all();
        }
        return view('index', compact('toys', 'categories'));
    }
}
