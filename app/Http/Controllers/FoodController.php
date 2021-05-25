<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $foods = Food::latest()->paginate(5);
        return view('foods.index', compact('foods'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Create and Update Menu
     */
    public function create()
    {
        //Create menu
        return view('foods.create');
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
        $request->validate([
            'name'=> 'required|string|max:255',
            'price'=>'required',
            'category'=>'required|string|max:255',
            'desc'=>'required|string',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move(public_path('image/foods/'), $profileImage);
            $input['image'] = "$profileImage";
        }
  
        Food::create($input);
        return redirect()->route('foods.index')->with('success', 'Food created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $foods=Food::find($id);
        return view('foods.show', compact('foods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $foods=Food::find($id);
        return view('foods.edit', compact('foods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $foods=Food::whereId($id)->first();
        $request->validate([
            'name'=> 'required',
            'price'=>'required',
            'category'=>'required',
            'desc'=>'required',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        
        $foods->update($input);

        return redirect()->route('foods.index')->with('success', 'Food updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Food::whereId($id)->delete();
        return redirect()->route('foods.index')->with('success', 'Food deleted successfully');
    }
}
