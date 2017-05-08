<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Http\Requests;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $guru = Guru::all();
        return view('guru.index',compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_guru' => 'required',
            'nama_guru' => 'required',
            'mapel' => 'required',
            ]);

        $guru = new Guru;

        $guru ->id_guru = $request->id_guru;
        $guru ->nama_guru = $request->nama_guru;
        $guru ->mapel = $request->mapel;

        $guru ->save();

        return redirect('guru');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_guru)
    {
        
        $guru = Guru::find($id_guru);

        return view('guru.detail')->with('guru', $guru);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_guru)
    {
        $guru = Guru::find($id_guru);
        return view('guru.edit')->with('guru',$guru);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_guru)
    {
        
        $this->validate($request,[
            'id_guru' => 'required',
            'nama_guru' => 'required',
            'mapel' => 'required',
            ]);

        $guru = Guru::find($id_guru);

        $guru ->id_guru = $request->id_guru;
        $guru ->nama_guru = $request->nama_guru;
        $guru ->mapel = $request->mapel;

        $guru ->save();

        return redirect('guru');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_guru)
    {
        
       $guru = Guru::find($id_guru);
       $guru-> delete();
       return redirect('guru'); 
    }
}
