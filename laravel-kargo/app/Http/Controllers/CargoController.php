<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
   
    public function index()
    {
        $cargos = Cargo::all();
        return view('cargo.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'product_name' => 'required',
            'content' => 'required',
            'weight' => 'required',
            // Add other validation rules as needed
        ]);

        // Create a new Cargo instance and save it to the database
        Cargo::create($request->all());

        // Redirect the user to the index page
        return redirect()->route('cargo.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Find the Cargo record by ID
        $cargo = Cargo::findOrFail($id);
        
        // Return the view with the Cargo data
        return view('cargo.edit', compact('cargo'));
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
        // Find the Cargo record by ID
        $cargo = Cargo::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'product_name' => 'required',
            'content' => 'required',
            'weight' => 'required',
            // Add other validation rules as needed
        ]);

        // Update the Cargo record with the new data
        $cargo->update($request->all());

        // Redirect the user to the index page
        return redirect()->route('cargo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the Cargo record by ID and delete it
        $cargo = Cargo::findOrFail($id);
        $cargo->delete();

        // Redirect the user to the index page
        return redirect()->route('cargo.index');
    }
}
