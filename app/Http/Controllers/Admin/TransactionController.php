<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use App\User;
use App\Utd;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        $ids = Auth::user()->utd_id;
        $ongoings = Transaction::all()->whereIn('statetrans', array('1','3','5','7','9'))->where('utd_id', $ids)->sortBy('id');
        $completes = Transaction::all()->whereIn('statetrans', array('0','2','4','6','8','10','11'))->where('utd_id', $ids)->sortBy('id');
        $user = User::where('role_id', '>', 2)->pluck('name', 'id')->all();
        $utd = Utd::where('status', '1')->where('id',$ids)->pluck('nama', 'id')->all();
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
                    }else{
                        return redirect()->route('transaction.index')->with('Fail', 'User pernah mengalami sakit serius');
                    }
                }else{
                    return redirect()->route('transaction.index')->with('Fail', 'User sedang menstruasi, hamil, atau menyusui');
                }
            }else{
                return redirect()->route('transaction.index')->with('Fail', 'User mengkonsumsi obat dalam 3 hari terkahir');
            }
        }else{
            return redirect()->route('transaction.index')->with('Fail', 'Jam tidur kurang');
        }

        $transa = Transaction::where('user_id', $input['user_id'])->where('statetrans', '11')->first();
        if ($transa != null){
            $last = Carbon::parse($transa->timeTransEnd)->timestamp;
            $now = Carbon::now()->timestamp;
            if ($now - $last >= 5184000000){
                $input['statetrans'] = '3';
            }else{
                $input['statetrans'] = '2';
                $user = User::find($request->user_id);
                return redirect()->route('transaction.index')->with('Fail', 'Maaf user '.$user->name.' belum dapat melakukan donor darah (belum 2 bulan)');
            }
        }else{
            $input['statetrans'] = '3';
        }

        $input['timeQuiz'] = Carbon::now();
        $input['timeScan'] = Carbon::now();
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
        $trans = Transaction::find($id);
        $pages = 'trans';
        $last = Transaction::where('user_id', $trans->user_id)->where('statetrans', '11')->first();
        $pawal = '';
        $ptekanan = '';
        $phb = '';
        $paf = '';
        if ($trans->pawal != null){
            $u = User::find($trans->pawal);
            $pawal = $u->name;
        }
        if ($trans->ptekanan != null){
            $uu = User::find($trans->ptekanan);
            $ptekanan = $uu->name;
        }
        if ($trans->phbTrans != null){
            $uuu = User::find($trans->phbTrans);
            $phb = $uuu->name;
        }
        if ($trans->paftapTrans != null){
            $u4 = User::find($trans->paftapTrans);
            $paf = $u4->name;
        }
        if ($last){
            return view('admin.transaction.detail', compact('trans','pages', 'last','phb','pawal','ptekanan','paf'));
        }
        return view('admin.transaction.detail', compact('trans','pages', 'last','phb','pawal','ptekanan','paf'));
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
        $pawal = '';
        $ptekanan = '';
        $phb = '';
        if ($trans->pawal != null){
            $u = User::find($trans->pawal);
            $pawal = $u->name;
        }
        if ($trans->ptekanan != null){
            $uu = User::find($trans->ptekanan);
            $ptekanan = $uu->name;
        }
        if ($trans->phbTrans != null){
            $uuu = User::find($trans->phbTrans);
            $phb = $uuu->name;
        }
        if ($last){
            return view('admin.transaction.edit', compact('trans','pages', 'last','phb','pawal','ptekanan'));
        }
        return view('admin.transaction.edit', compact('trans','pages', 'last','phb','pawal','ptekanan'));
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
        $trans = Transaction::find($id);
        $user = User::find($trans->user->id);
        $input = $request->all();
        if ($trans->statetrans == 3){
            if (!empty($request->ketBatal)){
                $input['statetrans'] = '10';
                $input['pawal'] = Auth::id();
                $input['timeStart'] = Carbon::now();
                $input['timeTransEnd'] = Carbon::now();
                $trans->update($input);
                return redirect()->route('transaction.index')->with('Fail', 'Transaksi Dibatalkan');
            }else{
                $input['statetrans'] = '5';
                $input['pawal'] = Auth::id();
                $input['timeStart'] = Carbon::now();
                $trans->update($input);
                return redirect()->route('transaction.edit',$id)->with('Success', 'Kondisi Tubuh Sesuai');
            }
        }elseif ($trans->statetrans == 5){
            if (!empty($request->ketBatal)){
                $input['statetrans'] = '10';
                $input['ptekanan'] = Auth::id();
                $input['timeTransEnd'] = Carbon::now();
                $trans->update($input);
                return redirect()->route('transaction.index')->with('Fail', 'Transaksi Dibatalkan');
            }else{
                $input['statetrans'] = '7';
                $input['ptekanan'] = Auth::id();
                $trans->update($input);
                return redirect()->route('transaction.edit',$id)->with('Success', 'Tensi Sesuai');
            }
        }elseif($trans->statetrans == 7){
            if (!empty($request->ketBatal)){
                $input['statetrans'] = '10';
                $input['phbTrans'] = Auth::id();
                $input['timeTransEnd'] = Carbon::now();
                $trans->update($input);
                return redirect()->route('transaction.index')->with('Fail', 'Transaksi Dibatalkan');
            }else{
                $input['statetrans'] = '9';
                $input['phbTrans'] = Auth::id();
                $trans->update($input);
                return redirect()->route('transaction.edit',$id)->with('Success', 'HB Normal');
            }
        }elseif ($trans->statetrans == 9){
            if (!empty($request->ketBatal)){
                $input['statetrans'] = '10';
                $input['paftapTrans'] = Auth::id();
                $input['timeTransEnd'] = Carbon::now();
                $input['noKantongDarah'] = $trans->utd_id.$request->noKantong;
                $trans->update($input);
                return redirect()->route('transaction.index')->with('Fail', 'Transaksi Dibatalkan');
            }else{
                $input['statetrans'] = '11';
                $input['timeTransEnd'] = Carbon::now();
                $input['paftapTrans'] = Auth::id();
                $input['noKantongDarah'] = $trans->utd_id.$request->noKantong;
                $trans->update($input);
                $user->update([
                    'dopoint' => $user->dopoint + 12,
                    'ndonor' => $user->ndonor + 1,
                    'lastdonor' => Carbon::now()
                ]);
                return redirect()->route('transaction.index')->with('Success', 'Transaksi Selesai');
            }
        }elseif ($trans->statetrans == 11){
            $trans->update([
                'ket' => $request->ket,
            ]);
            return redirect()->route('transaction.show',$id)->with('Success', 'Keterangan Berhasil Ditambahkan');
        }
        return redirect()->route('transaction.edit',$id)->with('Fail', 'Terjadi kesalahan, silahkan coba lagi');
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

    public function generatePDF($id){
        $transac = Transaction::find($id);
        $ketstate = $this->cekstate($transac->statetrans);
        $pawal = $this->getUserName($transac->pawal);
        $phb = $this->getUserName($transac->phbTrans);
        $ptekanan = $this->getUserName($transac->ptekanan);
        $paf = $this->getUserName($transac->paftapTrans);
        $ambil = $this->cekambil($transac->pengambilanTrans);
        $reakdon = $this->cekreak($transac->reaksiDonTrans);
        $met = '';

        if ($reakdon == 'l'){
            $reakdon = 'Lainnya : ('.$transac->ketReaksiDonor.')';
        }

        if ($ambil == 's'){
            $ambil = 'Stop : '.$transac->ccstopTrans.' cc';
        }

        $trans = [
            'udname' => $transac->utd->nama,
            'udadd' => $transac->utd->alamat,
            'transno' => '#Donor/'.$transac->utd->nama.'/No.'.$transac->id.'/Tanggal:'.$transac->timeTransEnd,
            'name' => $transac->user->name,
            'timeTransEnd' => $transac->timeTransEnd,
            'ndonor' => $transac->user->ndonor,
            'goldarah' => $transac->user->goldarah,
            'rhesus' => $transac->user->rhesus,
            'gender' => $transac->user->gender == 'l' ? 'Laki - Laki' : 'Perempuan',
            'ketstate' => $ketstate,
            'ketBatal' => $transac->ketBatal,
            'q1_jamtidur' => $transac->q1_jamtidur.' jam',
            'q2_obat' => $transac->q2_obat == 0? 'TIdak' : 'Ya',
            'q3_mens' => $transac->q3_mens == 0? 'TIdak' : 'Ya',
            'q4_sick' => $transac->q4_sick,
            'beratUser' => $transac->beratUser.' Kg',
            'tinggiUser' => $transac->tinggiUser. ' cm',
            'suhuUser' => $transac->suhuUser.' °C',
            'pawal' => $pawal,
            'tekananA_user' => $transac->tekananA_user,
            'tekananB_user' => $transac->tekananB_user,
            'denyutNadi_user' => $transac->denyutNadi_user,
            'petekan' => $ptekanan,
            'nhbTrans' => $transac->nhbTrans,
            'mac' => $transac->macDonTrans == 's' ? 'Sukarela' : 'Pengganti',
            'met' => $transac->metDonTrans,
            'hbmcsa' => $transac->hbmcsa,
            'hbmcsb' => $transac->hbmcsb,
            'phb' => $phb,
            'ccDarah' => $transac->ccDarah.' cc',
            'kantongDarah' => ucwords($transac->kantongDarah),
            'ambil' => $ambil,
            'reakdon' => $reakdon,
            'nokantong' => $transac->noKantongDarah,
            'paf' => $paf,
        ];
        $pdf = PDF::loadView('generatepdf', $trans);
        $title = 'Donor-'.$transac->utd->nama.'|No.'.$transac->id.'|Tanggal:'.$transac->timeTransEnd.'.pdf';
//        $title = 'Donor - '.$transac->user->name.' - ['.$transac->timeTransEnd.']';
        return $pdf->download($title);
    }

    private function cekstate($state){
        switch ($state){
            case 0:
                return "Tahap 1 (Tidak Sesuai Strandar Donor)";
                break;
            case 1:
                return "Tahap 1 (Sesuai Strandar Donor)";
                break;
            case 2:
                return "Tahap 1 (Belum 2 Bulan)";
                break;
            case 3:
                return "Tahap 1 (Sudah 2 Bulan)";
                break;
            case 4:
                return "Tahap 2 (Berat Badan Tidak Sesuai)";
                break;
            case 5:
                return "Tahap 2 (Besat Badan Sesuai)";
                break;
            case 6:
                return "Tahap 3 (Tensi Tidak Sesuai)";
                break;
            case 7:
                return "Tahap 3 (Tensi Sesuai)";
                break;
            case 8:
                return "Tahap 4 (HB Tidak Sesuai)";
                break;
            case 9:
                return "Tahap 4 (HB Sesuai)";
                break;
            case 10:
                return "Transaksi Dibatalkan";
                break;
            case 11:
                return "Transaksi Selesai";
                break;
            default :
                return "";
                break;
        }
    }

    private function cekreak($reaksiDonTrans)
    {
        if($reaksiDonTrans == 'h') {
            return 'Hematoma';
        } elseif($reaksiDonTrans == 'p') {
            return 'Pusing';
        } elseif($reaksiDonTrans == 'm') {
            return 'Muntah';
        } elseif($reaksiDonTrans == 'l') {
            return 'l';
        }else{
            return '';
        }
    }

    private function cekambil($pengambilanTrans)
    {
        if($pengambilanTrans == 'l'){
            return 'Lancar';
        } elseif($pengambilanTrans == 't'){
            return 'Tidak Lancar';
        } elseif($pengambilanTrans == 's'){
            return 's';
        } else {
            return '';
        }
    }

    private function getUserName($id)
    {
        $u = User::find($id);
        return $u->name;
    }
}
