<?php

namespace App\Http\Controllers\Admin;

use App\City;
use App\JadwalMobile;
use App\JoinMobile;
use App\Utd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'mblist';
        $ongoings = JadwalMobile::all()->where('status', 0)->sortBy('id');
        $completes = JadwalMobile::all()->where('status', 1)->sortBy('id');
        $utd = Utd::pluck('nama','id')->all();
        $city = City::pluck('nama','id')->all();
        return view('admin.mobile.index', compact('pages', 'completes', 'ongoings', 'city', 'utd'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'mbadd';
        $utd = Utd::pluck('nama','id')->all();
        $city = City::pluck('nama','id')->all();
        return view('admin.mobile.add', compact('pages', 'city', 'utd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JadwalMobile::create($request->all());
        return redirect()->route('mobileunit.index')->with('Success', 'Added new Jadwal');
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
    public function update(Request $request, $id)
    {
        $jad = JadwalMobile::find($id);
        $jad->update($request->all());
        return redirect()->route('mobileunit.index')->with('Success', 'Jadwal Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jad = JadwalMobile::find($id);
        $jad->delete();
        return redirect()->route('mobileunit.index')->with('Success', 'Jadwal Deleted');
    }

    public function join(Request $request)
    {
//        $id = Auth::user()->utd_id;
        $name = JadwalMobile::find($request->id);
        $n = $name->utd->nama;
        JoinMobile::create([
           'jadwal_mobile_id' => $request->id,
           'utd_id' => 1,
           'status' => '0',
           'keterangan' => 'Join Mobile Unit'
        ]);
        return redirect('/admin/dashboard')->with('Success', 'Joined '.$n.' mobile unit');
    }

    public function reject(Request $request)
    {
//        $id = Auth::user()->utd_id;
        $name = JadwalMobile::find($request->id);
        $n = $name->utd->nama;
        JoinMobile::create([
            'jadwal_mobile_id' => $request->id,
            'utd_id' => 1,
            'status' => '1',
            'keterangan' => 'Join Mobile Unit'
        ]);
        return redirect('/admin/dashboard')->with('Success', 'Rejected '.$n.' mobile unit');
    }
}
