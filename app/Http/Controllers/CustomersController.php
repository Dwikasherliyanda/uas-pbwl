<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Decorations;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('customers')
            ->join('decorations', 'decorations.id_decor', '=', 'customers.decor_cust')
            ->orderBy('id_cust', 'ASC')
            ->get();
        return view('customers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $decors = Decorations::all();
        return view('customers.create', compact('decors'));
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
            'nama_cust' => 'string|max:256',
            'decor_cust' => 'string|max:256',
            'lok_cust' => 'string|max:256',
        ]);

        Customers::create($validatedData);
        return redirect('/customers');
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
        $data = DB::table('customers')
            ->join('decorations', 'decorations.id_decor', '=', 'customers.decor_cust')
            ->where('id_cust', $id)
            ->get();
        $decors = Decorations::all();
        return view('customers.edit', compact('data', 'decors'));
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
            'nama_cust' => 'string|max:256',
            'decor_cust' => 'string|max:256',
            'lok_cust' => 'string|max:256',
        ]);

        $cust = Customers::find($id);
        $cust->nama_cust = $request->input('nama_cust');
        $cust->decor_cust = $request->input('decor_cust');
        $cust->lok_cust = $request->input('lok_cust');
        $cust->update($validatedData);

        return redirect('/customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cust = Customers::find($id);
        $cust->delete();

        return redirect('/customers');
    }
}
