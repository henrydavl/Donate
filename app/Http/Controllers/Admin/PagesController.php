<?php

namespace App\Http\Controllers\Admin;

use App\JadwalMobile;
use App\JoinMobile;
use App\Transaction;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function __construct()
    {
            $this->middleware('admin');
    }

    public function dashboard(){
        $ids = Auth::user()->utd_id;
        $utd = Transaction::where('utd_id', $ids)->count();
        $pages = 'dash';
        $finish = JadwalMobile::where('status', '1')->count();
        $ongoing = JadwalMobile::where('status', '0')->count();
        $events = JadwalMobile::all()->where('tipe','a')->where('status',0);
        $joins = JoinMobile::all();

        return view('admin.dashboard', compact('utd','pages','finish','ongoing', 'events', 'joins'));
    }
}
