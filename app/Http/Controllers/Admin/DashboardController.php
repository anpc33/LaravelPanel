<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = User::count();
        $totalCategories = Category::count();
        $activeUsers = User::where('is_active', true)->count();
        $adminUsers = User::where('role', 'admin')->count();
        $inactiveUsers = User::where('is_active', false)->count();
        $recentUsers = User::latest()->take(5)->get();
        $recentCategories = Category::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalCategories',
            'activeUsers',
            'adminUsers',
            'inactiveUsers',
            'recentUsers',
            'recentCategories'
        ));
    }
}
