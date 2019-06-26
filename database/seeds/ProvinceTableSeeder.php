<?php

use App\Province;
use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Province();
        $p->id = "11";
        $p->nama = "ACEH";
        $p->save();

        $p = new Province();
        $p->id = "12";
        $p->nama = "SUMATERA UTARA";
        $p->save();

        $p = new Province();
        $p->id = "13";
        $p->nama = "SUMATERA BARAT";
        $p->save();

        $p = new Province();
        $p->id = "14";
        $p->nama = "RIAU";
        $p->save();

        $p = new Province();
        $p->id = "15";
        $p->nama = "JAMBI";
        $p->save();

        $p = new Province();
        $p->id = "16";
        $p->nama = "SUMATERA SELATAN";
        $p->save();

        $p = new Province();
        $p->id = "17";
        $p->nama = "BENGKULU";
        $p->save();

        $p = new Province();
        $p->id = "18";
        $p->nama = "LAMPUNG";
        $p->save();

        $p = new Province();
        $p->id = "19";
        $p->nama = "KEPULAUAN BANGKA BELITUNG";
        $p->save();

        $p = new Province();
        $p->id = "21";
        $p->nama = "KEPULAUAN RIAU";
        $p->save();

        $p = new Province();
        $p->id = "31";
        $p->nama = "DKI JAKARTA";
        $p->save();

        $p = new Province();
        $p->id = "32";
        $p->nama = "JAWA BARAT";
        $p->save();

        $p = new Province();
        $p->id = "33";
        $p->nama = "JAWA TENGAH";
        $p->save();

        $p = new Province();
        $p->id = "34";
        $p->nama = "DI YOGYAKARTA";
        $p->save();

        $p = new Province();
        $p->id = "35";
        $p->nama = "JAWA TIMUR";
        $p->save();

        $p = new Province();
        $p->id = "36";
        $p->nama = "BANTEN";
        $p->save();

        $p = new Province();
        $p->id = "51";
        $p->nama = "BALI";
        $p->save();

        $p = new Province();
        $p->id = "52";
        $p->nama = "NUSA TENGGARA BARAT";
        $p->save();

        $p = new Province();
        $p->id = "53";
        $p->nama = "NUSA TENGGARA TIMUR";
        $p->save();

        $p = new Province();
        $p->id = "61";
        $p->nama = "KALIMANTAN BARAT";
        $p->save();

        $p = new Province();
        $p->id = "62";
        $p->nama = "KALIMANTAN TENGAH";
        $p->save();

        $p = new Province();
        $p->id = "63";
        $p->nama = "KALIMANTAN SELATAN";
        $p->save();

        $p = new Province();
        $p->id = "64";
        $p->nama = "KALIMANTAN TIMUR";
        $p->save();

        $p = new Province();
        $p->id = "65";
        $p->nama = "KALIMANTAN UTARA";
        $p->save();

        $p = new Province();
        $p->id = "71";
        $p->nama = "SULAWESI UTARA";
        $p->save();

        $p = new Province();
        $p->id = "72";
        $p->nama = "SULAWESI TENGAH";
        $p->save();

        $p = new Province();
        $p->id = "73";
        $p->nama = "SULAWESI SELATAN";
        $p->save();

        $p = new Province();
        $p->id = "74";
        $p->nama = "SULAWESI TENGGARA";
        $p->save();

        $p = new Province();
        $p->id = "75";
        $p->nama = "GORONTALO";
        $p->save();

        $p = new Province();
        $p->id = "76";
        $p->nama = "SULAWESI BARAT";
        $p->save();

        $p = new Province();
        $p->id = "81";
        $p->nama = "MALUKU";
        $p->save();

        $p = new Province();
        $p->id = "82";
        $p->nama = "MALUKU UTARA";
        $p->save();

        $p = new Province();
        $p->id = "91";
        $p->nama = "PAPUA BARAT";
        $p->save();

        $p = new Province();
        $p->id = "94";
        $p->nama = "PAPUA";
        $p->save();
    }
}
