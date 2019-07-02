<?php

namespace App\Http\Controllers\Root;

use App\JadwalMobile;
use App\JoinMobile;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('root');
    }

    public function dashboard(){
        $utd = Transaction::where('join_mobile_id', null)->count();
        $mobile = Transaction::where('utd_id', null)->count();
        $pages = 'dash';
        $finish = JadwalMobile::where('status', '1')->count();
        $ongoing = JadwalMobile::where('status', '0')->count();
        $events = JadwalMobile::all()->where('tipe','a')->where('status',0);
        $joins = JoinMobile::all();

        return view('root.dashboard', compact('utd','mobile','pages','finish','ongoing', 'events', 'joins'));
    }
}
