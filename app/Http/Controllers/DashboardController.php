<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Donation;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $donations = Donation::where('user_id', $user->id)->latest()->get();

        return view('dashboard', compact('user', 'donations'));
    }
    public function adminindex()
    {
        $user = Auth::user();

        $total_donations = Donation::count();

        return view('admin.dashboard', compact('user', 'total_donations'));
    }
}