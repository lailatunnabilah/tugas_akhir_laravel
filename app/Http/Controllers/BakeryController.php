<?php

namespace App\Http\Controllers;

use App\Models\Bakery;
use Illuminate\Http\Request;

class BakeryController extends Controller
{
    public function index(){
        $bakery = Bakery::all();
        return view('bakery.index',compact(['bakery']));
    }

    public function create()
    {
      return view('bakery.create');  
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Bakery::create($request->except(['_token','submit']));
        return redirect('/bakery');
    }

    public function edit($id)
    {
        $bakery = Bakery::find($id);
        return view('bakery.edit',compact(['bakery']));
    }

    public function update($id, Request $request)
    {
        $bakery = Bakery::find($id);
        $bakery->update($request->except(['_token','submit']));
        return redirect('/bakery');
    }

    public function destroy($id)
    {
        $bakery = Bakery::find($id);
        $bakery->delete();
        return redirect('/bakery');
    }
}
