<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\CarShop;

class CarShopController extends Controller
{
    public function index()
    {
        $carShops = CarShop::all();
        return view('carshop.index', ['carShops' => $carShops]);
    }

    public function create()
    {
        return view('carshop.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'size' => 'required',
        ]);

        CarShop::create($request->post());

        return redirect()->route('carshop.index')->with('success', 'CarShop has been created successfully.');
    }

    public function edit($id)
    {
        $carShop = CarShop::find($id);
        return view('carshop.edit', compact('carShop'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'size' => 'required',
        ]);

        $carShop = CarShop::find($id);
        $carShop->name = $request->name;
        $carShop->location = $request->location;
        $carShop->size = $request->size;
        $carShop->save();

        return redirect()->route('carshop.index')->with('success','CarShop Has Been updated successfully');
    }

    public function destroy($id)
    {
        CarShop::where('id', $id)->delete(); //(i => i.id == id)
        return redirect()->route('carshop.index')->with('success', 'CarShop has been deleted successfully');
    }
}
