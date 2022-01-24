<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;
use App\Models\tb_paket;
use App\Models\tb_outlet;
use Illuminate\Http\Request;

class paketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paket  = tb_paket::all();
        $outlet  = tb_outlet::all();
        return view('paket.index', compact(
            'paket','outlet'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_outlet' => 'required',
            'jenis' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required'
        ]);
        $create = tb_paket::create($validated);
        if($create)  return redirect('paket')->with('success', 'Data Sudah Ditambahkan');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_paket $tb_paket, $id)
    {
        $update = $tb_paket->find($id)->update($request->all());
  if($update)  return redirect('paket')->with('success', 'Data Sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_paket $tb_paket,$id)
    {
        $tb_paket->find($id)->delete();
     return redirect('paket')->with('success', 'Data Sudah Dihapus');
    }
}
