<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="font-family:Arial, sans-serif;">
<div style="border : 2px solid #70c8d2; border-radius: 20px; width: 700px; margin-left: auto; margin-right: auto;">
    <div style="text-align: center;">
        <img height="100" style="margin-top: 10px;" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/7f98014e-7a83-4138-a97a-bbc112df6319/ddaqw5w-67f71858-39c5-4db0-b816-7775609e3e97.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzdmOTgwMTRlLTdhODMtNDEzOC1hOTdhLWJiYzExMmRmNjMxOVwvZGRhcXc1dy02N2Y3MTg1OC0zOWM1LTRkYjAtYjgxNi03Nzc1NjA5ZTNlOTcucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.RPixxDJsnDpCir4TwQVunL6BmdscHYpRWOFVFYlwAm4">
    </div>
    <div style="text-align: center;">
        <h2 style="margin: 0;">{{$udname}}</h2>
        <p style="margin: 0; ">{{$udadd}}</p>
        <p style="margin: 0; ">{{$transno}}</p>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Detail Pendornor</h3>
        <div style="margin-left: 2.2em">
            <span>Nama</span>
            <span style="margin-left: 200px">: {{$name}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Terakhir Donor</span>
            <span style="margin-left: 138px">: {{$timeTransEnd}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Donor ke</span>
            <span style="margin-left: 178px">: {{$ndonor}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Golongan Darah (rhesus)</span>
            <span style="margin-left: 63px">: {{$goldarah.'('.$rhesus.')'}} </span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Jenis Kelamin</span>
            <span style="margin-left: 144px">: {{$gender}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>State saat ini</span>
            <span style="margin-left: 151px">: {{$ketstate}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Keterangan Pembatalan</span>
            <span style="margin-left: 71px">: {{$ketBatal}}</span>
        </div>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tahapan 1 (Pengisian Kuisioner & Pengecekan Terakhir Donor)</h3>
        <div style="margin-left: 2.2em">
            <span>Pertanyaan 1 (Lama Tidur)</span>
            <span style="margin-left: 52px">: {{$q1_jamtidur}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Pertanyaan 2 (Minum obat dalam <br> 3 hari)</span>
            <span style="margin-left: 198px">: {{$q2_obat}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Pertanyaan 3 (Sedang <br>Mensturasi, Hamil, Menyusui)</span>
            <span style="margin-left: 33px">: {{$q3_mens}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Pertanyaan 4 (Sakit Serius)</span>
            <span style="margin-left: 48px">: {{$q4_sick}}</span>
        </div>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tahapan 2 (Pemeriksaan Kondisi Tubuh)</h3>
        <div style="margin-left: 2.2em">
            <span>Berat Badan</span>
            <span style="margin-left: 156px">: {{$beratUser}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Tinggi Badan</span>
            <span style="margin-left: 151px">: {{$tinggiUser}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Suhu Badan</span>
            <span style="margin-left: 157px">: {{$suhuUser}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Petugas</span>
            <span style="margin-left: 187px">: {{$pawal}}</span>
        </div>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tahapan 3 (Pengecekan Tensi & Denyut Nadi)</h3>
        <div style="margin-left: 2.2em">
            <span>Tekanan Darah (sistole/diastole)</span>
            <span style="margin-left: 17px">: {{$tekananA_user}} mmHg / {{$tekananB_user}} mmHg</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Denyut Nadi</span>
            <span style="margin-left: 157px">: {{$denyutNadi_user}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Petugas</span>
            <span style="margin-left: 187px">: {{$petekan}}</span>
        </div>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tahapan 4 (Pengecekan HB)</h3>
        <div style="margin-left: 2.2em">
            <span>Nilai Hb</span>
            <span style="margin-left: 190px">: {{$nhbTrans}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Macam Donor</span>
            <span style="margin-left: 146px">: {{$mac}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Metode Pengambilan Darah</span>
            <span style="margin-left: 47px">: @if($met == 'b') Biasa @elseif($met == 'a') Aferesis @elseif($met == 'au') Autologus @endif</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Hb Metode Cupri Sulfat</span>
            <span style="margin-left: 157px"></span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Berat Jenis 1.053</span>
            <span style="margin-left: 121px">: {{$hbmcsa}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Berat Jenis 1.062</span>
            <span style="margin-left: 121px">: {{$hbmcsa}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Petugas</span>
            <span style="margin-left: 187px">: {{$phb}}</span>
        </div>
    </div>
    <div style="width: 98%; margin-bottom: 2em">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Proses Donor</h3>
        <div style="margin-left: 2.2em">
            <span>Ditolak / Diambil Sebanyak</span>
            <span style="margin-left: 56px">: {{$ccDarah}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Jenis Kantong</span>
            <span style="margin-left: 146px">: {{$kantongDarah}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Pengambilan</span>
            <span style="margin-left: 154px">:  {{$ambil}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Reaksi Donor</span>
            <span style="margin-left: 150px">: {{$reakdon}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>No. Kantong Darah</span>
            <span style="margin-left: 110px">: {{$nokantong}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Petugas</span>
            <span style="margin-left: 188px">: {{$paf}}</span>
        </div>
        <div style="margin-left: 2.2em">
            <span>Keterangan Pasca Donor</span>
            <span style="margin-left: 67px">: {{$ket}}</span>
        </div>
    </div>
    <div style="width: 98%; margin-bottom: 2em">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tanda Tangan</h3>
        <div style="margin-left: 2.2em; height: 150px">
            <span style="margin-left: 100px">Dokter</span>
            <span style="margin-left: 290px">Petugas</span>
        </div>
        <div style="margin-left: 2.2em">
            <span style="margin-left: 33px">(____________________)</span>
            <span style="margin-left: 153px">(____________________)</span>
        </div>
    </div>
</div>
</body>
</html>