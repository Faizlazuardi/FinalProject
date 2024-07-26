<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Toy;
use App\Models\Invoice;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::where('role', 'user')->count();
        $totalToys = Toy::count();
        $totalRevenue = Invoice::sum('total_price');

        return view('admin.index', compact('totalUsers', 'totalToys', 'totalRevenue'));
    }
}
