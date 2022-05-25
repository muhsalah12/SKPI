<?php
use Illuminate\Http\Request;
if (! function_exists('debugCode')) {
    function debugCode($r=array(),$f=TRUE)
    {
        echo "<pre>";
        print_r($r);
        echo "</pre>";

        if($f==TRUE)
            die;
    }
}

function isi_kriteria($value)
{
    $isi = [
        'Sangat Tidak Setuju',
        'Tidak Setuju',
        'Netral',
        'Setuju',
        'Sangat Setuju'
    ];

    return $isi[$value-1];
}

function tgl_indo($tanggal){
    $bulan = array (
        1 =>   'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Okt',
        'Nov',
        'Des'
    );
    $pecahkan = explode('-', $tanggal);
    
    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun
 
    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

function bulan($bulan){
    Switch ($bulan){
        case 1 : $bulan="Jan";
            Break;
        case 2 : $bulan="Feb";
            Break;
        case 3 : $bulan="Mar";
            Break;
        case 4 : $bulan="Apr";
            Break;
        case 5 : $bulan="Mei";
            Break;
        case 6 : $bulan="Jun";
            Break;
        case 7 : $bulan="Jul";
            Break;
        case 8 : $bulan="Aug";
            Break;
        case 9 : $bulan="Sep";
            Break;
        case 10 : $bulan="Okt";
            Break;
        case 11 : $bulan="Nov";
            Break;
        case 12 : $bulan="Des";
            Break;
        }
    return $bulan;
}

function hari_ini($hari){
 
    switch($hari){
        case 'Sunday':
            $hari_ini = "Minggu";
        break;
 
        case 'Monday':         
            $hari_ini = "Senin";
        break;
 
        case 'Tuesday':
            $hari_ini = "Selasa";
        break;
 
        case 'Wednesday':
            $hari_ini = "Rabu";
        break;
 
        case 'Thursday':
            $hari_ini = "Kamis";
        break;
 
        case 'Friday':
            $hari_ini = "Jumat";
        break;
 
        case 'Saturday':
            $hari_ini = "Sabtu";
        break;
    }
 
    return $hari_ini;
 
}
