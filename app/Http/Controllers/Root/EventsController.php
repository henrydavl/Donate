<?php

namespace App\Http\Controllers\Root;

use App\City;
use App\JadwalMobile;
use App\Utd;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
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
        return view('root.mobiles.index', compact('pages', 'completes', 'ongoings', 'city', 'utd'));
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
        return view('root.mobiles.add', compact('pages', 'city', 'utd'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
