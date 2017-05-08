<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Http\Requests;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'kelas' => 'required',

        ]);

        $siswa = new Siswa;

        $siswa ->id =$request->id;
        $siswa ->nama =$request->nama;
        $siswa ->kelas =$request->kelas;
        $siswa ->save();

        return redirect('siswa');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.detail')->with('siswa', $siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.edit')->with('siswa',$siswa);
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
       $this->validate($request, [
            'id' => 'required',
            'nama' => 'required',
            'kelas' => 'required',

        ]);

        $siswa = Siswa::find($id);

        $siswa ->id =$request->id;
        $siswa ->nama =$request->nama;
        $siswa ->kelas =$request->kelas;
        $siswa ->save();

        return redirect('siswa');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $siswa = Siswa::find($id);
       $siswa-> delete();
       return redirect('siswa');  
    }
}
