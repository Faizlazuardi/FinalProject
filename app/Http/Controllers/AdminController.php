<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Toy;
use App\Models\Category;
use App\Models\InvoiceHeader;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = User::where('role', 'user')->count();
        $totalToys = Toy::count();
        $totalRevenue = InvoiceHeader::sum('total_price');

        return view('admin.index', compact('totalUsers', 'totalToys', 'totalRevenue'));
    }
}
