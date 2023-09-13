<?php
defined('BASEPATH') or exit('No direct script access allowed');

function angka_ke_romawi($angka)
{
    $romawi = '';
    $romawi_nilai = array(
        'M'  => 1000,
        'CM' => 900,
        'D'  => 500,
        'CD' => 400,
        'C'  => 100,
        'XC' => 90,
        'L'  => 50,
        'XL' => 40,
        'X'  => 10,
        'IX' => 9,
        'V'  => 5,
        'IV' => 4,
        'I'  => 1
    );

    foreach ($romawi_nilai as $simbol => $nilai) {
        while ($angka >= $nilai) {
            $romawi .= $simbol;
            $angka -= $nilai;
        }
    }

    return $romawi;
}
