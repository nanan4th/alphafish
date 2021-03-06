<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user=User::find($request->user()->id);
        $request->validate([
            'name'=> 'required|string|max:255',
            'restaurant'=>'required|string|max:255',
            'dates'=>'required',
            'hour'=>'required|integer',
            'numberOfPeople'=>'required|integer'
        ]);
        $input = $request->all();
        $user->order()->create($input);
        return redirect('/');
    }

    public function showAll()
    {
        //
        $orders = Order::latest()->paginate(5);
        return view('orders.index', compact('orders'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // public function showById($id)
    // {
    //     //
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Order::whereId($id)->delete();
        return redirect()->route('orders.index')->with('success', 'Food deleted successfully');
    }
}
