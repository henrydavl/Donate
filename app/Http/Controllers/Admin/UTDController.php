<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\JadwalMobile;
use App\JoinMobile;
use App\Transaction;
use App\Utd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UTDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'utdlist';
        $utds = Utd::all()->sortBy('id');
        $city = City::pluck('nama','id')->all();
        return view('admin.utd.index', compact('pages', 'utds', 'city'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'utdadd';
        $city = City::pluck('nama','id')->all();
        return view('admin.utd.add', compact('pages','city'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Utd::create($request->all());
        return redirect()->route('utd.index')->with('Success', 'Added new UTD');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $utd = Utd::find($id);
        $transs = Transaction::all()->where('utd_id', $id)->sortBy('id');
        $jadwals = JadwalMobile::all()->where('utd_id', $id)->sortBy('id');
        $joins = JoinMobile::all()->where('utd_id', $id)->sortBy('id');
        $pages = 'utdlist';
        return view('admin.utd.show', compact('pages', 'utd', 'transs', 'jadwals', 'joins'));
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
    public function update(Request $request, $id)
    {
        $utd = Utd::find($id);
        $utd->update($request->all());
        return redirect()->route('utd.index')->with('Success', 'UTD '.$utd->nama.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $utd = Utd::find($id);
        $n = $utd->nama;
        $utd->delete();
        return redirect()->route('utd.index')->with('Success', 'UTD '.$n.' deleted');
    }
}
