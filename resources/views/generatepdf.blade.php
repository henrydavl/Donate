<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body style="font-family:Arial, sans-serif;">
<div style="border : 2px solid #70c8d2; border-radius: 20px; width: 700px; margin-left: auto; margin-right: auto;">
    <table style="margin-top: 2em; margin-bottom: 2em;">
        <tr>
            <td width="500" style="text-align: left; padding-left: 1em">
                <img height="100" src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/7f98014e-7a83-4138-a97a-bbc112df6319/ddaqw5w-67f71858-39c5-4db0-b816-7775609e3e97.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcLzdmOTgwMTRlLTdhODMtNDEzOC1hOTdhLWJiYzExMmRmNjMxOVwvZGRhcXc1dy02N2Y3MTg1OC0zOWM1LTRkYjAtYjgxNi03Nzc1NjA5ZTNlOTcucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.RPixxDJsnDpCir4TwQVunL6BmdscHYpRWOFVFYlwAm4">
            </td>
            <td width="500" style="text-align: right; padding-right: 2em">
                <h2>UDD Name</h2>
                <p>Alamat</p>
                <p>Transaksi</p>
            </td>
        </tr>
    </table>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Detail Pendornor</h3>
        <table style="margin-left: 2em;">
            <tr>
                <td style="width: 15em">Nama</td>
                <td style="width: 20em">: $trans['name']</td>
            </tr>
            <tr>
                <td style="width: 15em">Terakhir Donor</td>
                <td style="width: 20em">: $trans['timeTransEnd']</td>
            </tr>
            <tr>
                <td style="width: 15em">Donor ke</td>
                <td style="width: 20em">: $trans['ndonor']</td>
            </tr>
            <tr>
                <td style="width: 15em">Golongan Darah (rhesus)</td>
                <td style="width: 20em">: $trans['goldarah'] ($trans['rhesus'])</td>
            </tr>
            <tr>
                <td style="width: 15em">Jenis Kelamin</td>
                <td style="width: 20em">: $trans['gender']</td>
            </tr>
            <tr>
                <td style="width: 15em">State saat ini</td>
                <td style="width: 20em">: $trans['ketstate']</td>
            </tr>
            <tr>
                <td style="width: 15em">Keterangan Pembatalan</td>
                <td style="width: 20em">: $trans['ketBatal']</td>
            </tr>
        </table>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tahapan 1 (Pengisian Kuisioner & Pengecekan Terakhir Donor)</h3>
        <table style="margin-left: 2em;">
            <tr>
                <td style="width: 15em">Pertanyaan 1 (Lama Tidur)</td>
                <td style="width: 20em">: $trans['q1_jamtidur']</td>
            </tr>
            <tr>
                <td style="width: 15em">Pertanyaan 2 (Minum obat dalam 3 hari)</td>
                <td style="width: 20em">: $trans['q2_obat']</td>
            </tr>
            <tr>
                <td style="width: 15em">Pertanyaan 3 (Sedang Mensturasi, Hamil, Menyusui)</td>
                <td style="width: 20em">: $trans['q3_mens']</td>
            </tr>
            <tr>
                <td style="width: 15em">Pertanyaan 4 (Sakit Serius)</td>
                <td style="width: 20em">: $trans['q4_sick']</td>
            </tr>
        </table>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tahapan 2 (Pemeriksaan Kondisi Tubuh)</h3>
        <table style="margin-left: 2em;">
            <tr>
                <td style="width: 15em">Berat Badan</td>
                <td style="width: 20em">: $trans['beratUser'] cm</td>
            </tr>
            <tr>
                <td style="width: 15em">Tinggi Badan</td>
                <td style="width: 20em">: $trans['tinggiUser'] Kg</td>
            </tr>
            <tr>
                <td style="width: 15em">Suhu Badan</td>
                <td style="width: 20em">: $trans['suhuUser'] °C</td>
            </tr>
            <tr>
                <td style="width: 15em">Petugas</td>
                <td style="width: 20em">: $trans['pawal']</td>
            </tr>
        </table>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tahapan 3 (Pengecekan Tensi & Denyut Nadi)</h3>
        <table style="margin-left: 2em;">
            <tr>
                <td style="width: 15em">Tekanan Darah (sistole/diastole)</td>
                <td style="width: 20em">: $trans['tekananA_user'] mmHg / $trans['tekananB_user'] mmHg</td>
            </tr>
            <tr>
                <td style="width: 15em">Denyut Nadi</td>
                <td style="width: 20em">: $trans['denyutNadi_user']</td>
            </tr>
            <tr>
                <td style="width: 15em">Petugas</td>
                <td style="width: 20em">: $trans['petekan']</td>
            </tr>
        </table>
    </div>
    <div style="width: 98%;">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Tahapan 4 (Pengecekan HB)</h3>
        <table style="margin-left: 2em;">
            <tr>
                <td style="width: 15em">Nilai Hb</td>
                <td style="width: 20em">: $trans['nhbTrans']</td>
            </tr>
            <tr>
                <td style="width: 15em">Nilai Hct</td>
                <td style="width: 20em">: $trans['nhcTrans']</td>
            </tr>
            <tr>
                <td style="width: 15em">Macam Donor</td>
                <td style="width: 20em">: $trans['mac']</td>
            </tr>
            <tr>
                <td style="width: 15em">Metode Pengambilan Darah</td>
                <td style="width: 20em">: $trans['met']</td>
            </tr>
            <tr>
                <td style="width: 15em">Hb Metode Cupri Sulfat</td>
                <td style="width: 20em">:</td>
            </tr>
            <tr>
                <td style="width: 10em">Berat Jenis 1.053</td>
                <td>$trans['hbmcsa']</td>
            </tr>
            <tr>
                <td style="width: 10em">Berat Jenis 1.062</td>
                <td>$trans['hbmcsb']</td>
            </tr>
            <tr>
                <td style="width: 15em">Petugas</td>
                <td style="width: 20em">: $trans['phb']</td>
            </tr>
        </table>
    </div>
    <div style="width: 98%; margin-bottom: 2em">
        <h3 style="margin-left: 1em; padding: 0.5em; background-color: #eee; color: #555">Proses Donor</h3>
        <table style="margin-left: 2em;">
            <tr>
                <td style="width: 15em">Ditolak / Diambil Sebanyak </td>
                <td style="width: 20em">: $trans['ccDarah']</td>
            </tr>
            <tr>
                <td style="width: 15em">Jenis Kantong</td>
                <td style="width: 20em">: $trans['kantongDarah']</td>
            </tr>
            <tr>
                <td style="width: 15em">Pengambilan</td>
                <td style="width: 20em">: $trans['ndonor']</td>
            </tr>
            <tr>
                <td style="width: 15em">Reaksi Donor</td>
                <td style="width: 20em">: $trans['goldarah'] ($trans['rhesus'])</td>
            </tr>
            <tr>
                <td style="width: 15em">No. Kantong Darah</td>
                <td style="width: 20em">: $trans['gender']</td>
            </tr>
            <tr>
                <td style="width: 15em">Petugas</td>
                <td style="width: 20em">: $trans['paf']</td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>