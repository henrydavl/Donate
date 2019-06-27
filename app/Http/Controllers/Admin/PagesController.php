<?php

namespace App\Http\Controllers\Admin;

use App\JadwalMobile;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard(){
        $utd = Transaction::where('join_mobile_id', null)->count();
        $mobile = Transaction::where('utd_id', null)->count();
        $pages = 'dash';
        $finish = JadwalMobile::where('status', 1)->count();
        $ongoing = JadwalMobile::where('status', 0)->count();

        return view('admin.dashboard', compact('utd','mobile','pages','finish','ongoing'));
    }
}
