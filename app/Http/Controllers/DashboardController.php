<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sku;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'totalCategories' => Category::count(),
            'totalProducts'   => Product::count(),
            'totalSkus'       => Sku::count(),
            'totalUsers'      => User::count(),
        ]);
    }
}
