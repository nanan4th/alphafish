<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Restaurant;
use App\Models\Food;
class DashboardController extends Controller
{
    public function menu(){
        $foods = Food::orderBy('id','asc')->paginate(9);
        return view('explore', compact('foods'))->with('i', (request()->input('page', 1) - 1) * 9);
    }
}
