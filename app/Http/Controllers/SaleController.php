<?php

namespace App\Http\Controllers;

use App\Models\sale;
use App\Models\client;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = sale::all();
        //return $groups;
      return view('sales.index', compact('sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=client::all();
        return view('clients.create',  compact('clients'));
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
            'clients'=>'required',
            'date'=>'required',

        ]);
        $sale = new sale();
        $sale->clients_id=$request->input('clients');
        $sale->date=$request->input('date');
        $sale->save();
        return redirect ('/sales')->with('message', 'La venta se ha registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = sale::findOrFail($id);
        return view('sales.show',compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clients=client::all();
        $sale=sale::findOrFail($id);
        return view('sales.edit', compact('clients'))->with('sales',$sale);
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
        $sale=sale::findOrFail($id);
        $input=$request->all();
        $sale->update($input);
        return redirect ('/sales')->with('message', 'La venta se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sale = sale::findOrFail($id);

        $sale->delete();
        return redirect ('/sales');
    }
}
