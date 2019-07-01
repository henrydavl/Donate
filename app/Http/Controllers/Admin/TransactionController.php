<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use App\User;
use App\Utd;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'trans';
        $ongoings = Transaction::all()->whereIn('statetrans', array('1','3','5','7','9'))->sortBy('id');
        $completes = Transaction::all()->whereIn('statetrans', array('0','2','4','6','8','10','11'))->sortBy('id');
        $user = User::where('role_id', '>', 2)->pluck('name', 'id')->all();
        $utd = Utd::where('status', '1')->pluck('nama', 'id')->all();
        return view('admin.transaction.index', compact('pages', 'ongoings', 'completes', 'user', 'utd'));
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
        $input = $request->all();
        if ($input['q1_jamtidur'] >= 4){
            if ($input['q2_obat'] == '0'){
                if ($input['q3_mens'] == '0'){
                    if ($input['q4_sick'] == '-'){
                        $input['statetrans'] = '1';
                    }
                }
            }
        }else{
            $input['statetrans'] = '0';
        }

        $transa = Transaction::where('user_id', $input['user_id'])->where('statetrans', '11')->first();
        if ($transa){
            $last = Carbon::parse($transa->timeTransEnd)->timestamp;
            $now = Carbon::now()->timestamp;
            if ($now - $last >= 5184000000){
                $input['statetrans'] = '3';
            }else{
                $input['statetrans'] = '2';
                $user = User::find($request->user_id);
                return redirect()->route('transaction.index')->with('Fail', 'Maaf user '.$user->name.' belum dapat melakukan donor darah (belum 2 bulan)');
            }
        }

        $trans = Transaction::create($input);

        return redirect()->route('transaction.index')->with('Success', 'Berhasil menambahkan transaksi baru')->with('link', $trans->id);
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
        $trans = Transaction::find($id);
        $pages = 'trans';
        $last = Transaction::where('user_id', $trans->user_id)->where('statetrans', '11')->first();
        if ($last){
            return view('admin.transaction.edit', compact('trans','pages', 'last'));
        }
        return view('admin.transaction.edit', compact('trans','pages', 'last'));
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
        Transaction::find($id)->delete();
        return redirect()->route('transaction.index')->with('Success', 'Transaksi dihapus');
    }
}
