<?php

namespace App\Http\Controllers\Root;

use App\Mitra;
use App\Photo;
use App\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'vcr';
        $vouchers = Voucher::all()->sortBy('id');
        $mitra = Mitra::pluck('nama','id')->all();
        return view('root.voucher.index', compact('pages', 'vouchers', 'mitra'));
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
        $this->validateImage();
        $input = $request->all();
        $a = '';
        if ($file = $request->file('image')){
            $tmp = str_replace(" ", "-",$request->nama);
            $type = $file->getClientOriginalExtension();
            $name = $tmp."_voucherpicture.".$type;
            $file->move('images', $name);
//            $image = Image::make('images/'.$name)->fit(500, 500);
//            $image->save();
            $a = $name;
        }
        Voucher::create([
            'nama' => $input['nama'],
            'mitra_id' => $input['mitra_id'],
            'image' => $a,
            'startPromo' => $input['startPromo'],
            'endPromo' => $input['endPromo']
        ]);
        return redirect()->route('voucher.index')->with('Success', 'Added new voucher');
    }

    private function validateImage()
    {
        return request()->validate([
            'image' => 'required|image|max:5000'
        ]);
    }

    private function validateImageUpdate()
    {
        return request()->validate([
            'image' => 'sometimes|image|max:5000',

        ]);
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
        $this->validateImageUpdate();
        $vcr = Voucher::find($id);
        $input = $request->all();
        if ($file = $request->file('image')){
            $tmp = str_replace(" ", "-",$request->nama);
            $type = $file->getClientOriginalExtension();
            $name = $tmp."_voucherpicture.".$type;
            $file->move('images', $name);
//            $image = Image::make('images/'.$name)->fit(500, 500);
//            $image->save();
            $input['image'] = $name;
        }
        $vcr->update($input);
        return redirect()->route('voucher.index')->with('Success', 'Voucher '.$vcr->nama.' updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vcr = Voucher::find($id);
        $name = $vcr->nama;
        $vcr->delete();
        return redirect()->route('voucher.index')->with('Success', 'Voucher '.$name.' deleted');
    }
}
