<?php 
    //Fungsi untuk menampilkan tanggal, bulan, tahun dalam bahasa indonesia
    //Menggunakan parameter format, tanggal (now) dan bahasa

    function month_id($format, $tanggal="now", $bahasa="id"){

        //Array en dan id menyimpan daftar bulan dalam bahasa inggris dan indonesia
        $en=array("Jan","Feb", "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $id = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September", "Oktober","November","Desember");
        
        //Fungsi mengembalikan tanggal hari ini dengan bulan dalam bahasa Indonesia
        //str_replace digunakan untuk mengganti array bulan dalam bahasa inggris dengan array bulan dalam bahasa indonesia
        return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));
    }

    //Fungsi untuk menampilkan tanggal, bulan, tahun dalam bahasa indonesia, namun penamaan bulan disingkat
    //Menggunakan parameter format, tanggal (now) dan bahasa
    function month_short_id($format, $tanggal="now", $bahasa="id"){

        //Array en dan id menyimpan daftar bulan dalam bahasa inggris dan indonesia
        $en=array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

        //Fungsi mengembalikan tanggal hari ini dengan bulan dalam bahasa Indonesia
        //str_replace digunakan untuk mengganti array bulan dalam bahasa inggris dengan array bulan dalam bahasa indonesia 
        //dimana penamaan bulannya disingkat
        $id = array("Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agt","Sept","Okt","Nov","Des");

        //Fungsi mengembalikan tanggal hari ini dengan bulan dalam bahasa Indonesia
        //str_replace digunakan untuk mengganti array bulan dalam bahasa inggris dengan array bulan dalam bahasa indonesia dan nama bulan disingkat
        return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));
    }

    //Fungsi untuk menampilkan tanggal, bulan, tahun dalam bahasa indonesia lengkap dengan waktu saat ini
    //Menggunakan parameter format, tanggal (now) dan bahasa
    function month_time_id($format, $tanggal="now", $bahasa="id"){

        //Array en dan id menyimpan daftar bulan dalam bahasa inggris dan indonesia
        $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
                "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $id = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
                    "Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September", "Oktober","November","Desember");
        
        //Fungsi date_default_timezone_set untuk menginisialisasi jam sesuai dengan waktu Jakarta (WIB)
        date_default_timezone_set('Asia/Jakarta');
        echo date('H:i:s ');
        
        //Fungsi mengembalikan tanggal hari ini dengan bulan dalam bahasa Indonesia
        //str_replace digunakan untuk mengganti array bulan dalam bahasa inggris dengan array bulan dalam bahasa indonesia
        return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));
    }

    //Fungsi untuk menampilkan tanggal hari ini, hanya angka tanggal tanpa bulan dan tahun
    function just_date_id($format, $tanggal="now", $bahasa="id"){
        $en=array("Sun","Mon","Tue","Wed","Thu","Fri","Sat","Jan","Feb",
                "Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
        $id = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu",
                 "Jan","Feb","Mar","Apr","Mei","Jun","Jul","Agt","Sept",
                 "Okt","Nov","Des");
        return str_replace($en, $$bahasa, date($format, strtotime($tanggal)));
    }


    //echo month_id("D, j M Y")." ";
    //echo month_short_id("D, j M Y")." ";
    //echo month_time_id("D, j M Y");
    //echo just_date_id("j");
?>