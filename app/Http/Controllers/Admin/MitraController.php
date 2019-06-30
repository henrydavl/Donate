<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\Mitra;
use App\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'mitlist';
        $mitras = Mitra::all()->sortBy('id');
        $city = City::pluck('nama','id')->all();
        return view('admin.mitra.index', compact('pages', 'mitras','city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'mitadd';
        $city = City::pluck('nama','id')->all();
        return view('admin.mitra.add', compact('pages', 'city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mitra::create($request->all());
        return redirect()->route('mitra.index')->with('Success','Added new Mitra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mitra = Mitra::find($id);
        $vouchers = Voucher::all()->where('mitra_id', $id)->sortBy('created-at');
        $pages = 'mitlist';
        return view('admin.mitra.show', compact('vouchers','pages','mitra'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $mitra = Mitra::find($id);
//        $pages = 'mitlist';
//        $city = City::pluck('nama','id')->all();
//        return view('admin.mitra.edit', compact('mitra','pages','city'));
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
        $mit = Mitra::find($id);
        $mit->update($request->all());
        return redirect()->route('mitra.index')->with('Success', 'Mitra '.$mit->nama.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mit = Mitra::find($id);
        $name = $mit->nama;
        $mit->delete();
        return redirect()->route('mitra.index')->with('Success', 'Mitra '.$name.' deleted');
    }
}
