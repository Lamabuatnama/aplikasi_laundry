<?php

namespace App\Http\Controllers;
use App\Models\tb_member;
use Illuminate\Http\Request;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member  = tb_member::all();
        return view('member.index', compact(
            'member'
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
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_tb_memberin' => 'required',
            'tlp' => 'required'
        ]);
        $create = tb_member::create($validated);
        if($create)  return redirect('member')->with('success', 'Data Sudah Ditambahkan');

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
    public function update(Request $request, tb_member $tb_member, $id)
    {
   $update = $tb_member->find($id)->update($request->all());
  if($update)  return redirect('member')->with('success', 'Data Sudah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_member $tb_member ,$id)
    {
        $tb_member->find($id)->delete();
     return redirect('member')->with('success', 'Data Sudah Dihapus');
    }
}
