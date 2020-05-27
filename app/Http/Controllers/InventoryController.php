<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function list()
    {
        $inventory = Inventory::all();

        return view('adminlte/pages/inventory/list',['data' => $inventory]);
    }

    public function create()
    {
        return view('adminlte/pages/inventory/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'quantity' => 'required|integer',
            'description' => 'required'
        ]);

        $inventory = new Inventory();
        $inventory->name = $request->name;
        $inventory->quantity = $request->quantity;
        $inventory->description = $request->description;
        $inventory->save();


        $request->session()->flash('success','Insert Data Successful');
        return redirect()->route('inventory.list');
    }

    public function delete()
    {
        # code...
    }

    public function update()
    {
        # code...
    }
}
