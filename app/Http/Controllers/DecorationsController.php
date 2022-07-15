<?php

namespace App\Http\Controllers;

use App\Models\Decorations;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DecorationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Decorations::all();
        return view('decorations.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('decorations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_decor' => 'string|max:256',
            'ket_decor' => 'string|max:500',
            'harga_decor' => 'numeric',
        ]);

        Decorations::create($validatedData);
        return redirect('/decorations');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Decorations::find($id);
        return view('decorations.edit', compact('data'));
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
        $validatedData = $request->validate([
            'nama_decor' => 'string|max:256',
            'ket_decor' => 'string|max:500',
            'harga_decor' => 'numeric',
        ]);

        $decor = Decorations::find($id);
        $decor->nama_decor = $request->input('nama_decor');
        $decor->ket_decor = $request->input('ket_decor');
        $decor->harga_decor = $request->input('harga_decor');
        $decor->update($validatedData);

        return redirect('/decorations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $decor = Decorations::find($id);
        $decor->delete();

        return redirect('/decorations');
    }
}
