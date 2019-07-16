<?php
date_default_timezone_set("Asia/Jakarta");

/**
 * FUngsi koneksi database.
 */
function conn($host, $username, $password, $database)
{
    $conn = mysqli_connect($host, $username, $password, $database);

    // Menampilkan pesan error jika database tidak terhubung
    return ($conn) ? $conn : "Koneksi database gagal: " . mysqli_connect_error();
}

/**
 * Fungsi untuk mengkonversi format tanggal menjadi format Indonesia.
 */
function indoDate($date)
{
    $exp = explode("-", substr($date,0,10));
    return $exp[2] . ' ' . month($exp[1]) . ' ' . $exp[0];
}

/**
 * Fungsi untuk mengkonversi format bulan angka menjadi nama bulan.
 */
function month($kode)
{
    $month = '';
    switch ($kode) {
        case '01':
            $month = 'Januari';
            break;
        case '02':
            $month = 'Februari';
            break;
        case '03':
            $month = 'Maret';
            break;
        case '04':
            $month = 'April';
            break;
        case '05':
            $month = 'Mei';
            break;
        case '06':
            $month = 'Juni';
            break;
        case '07':
            $month = 'Juli';
            break;
        case '08':
            $month = 'Agustus';
            break;
        case '09':
            $month = 'September';
            break;
        case '10':
            $month = 'Oktober';
            break;
        case '11':
            $month = 'November';
            break;
        case '12':
            $month = 'Desember';
            break;
    }
    return $month;
}

/**
 * Fungsi backup database.
 */

/**
 * Fungsi retore database.
 */
