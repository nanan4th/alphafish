<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Restaurant;
use App\Models\Food;
class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('dashboard');
        } elseif (Auth::user()->hasRole('user')) {
            return view('userdash');
        }
    }

    public function menu(){
        $foods = Food::latest()->paginate(3);
        return view('explore', compact('foods'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
