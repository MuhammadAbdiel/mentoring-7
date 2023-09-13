<?php
defined('BASEPATH') or exit('No direct script access allowed');

function romawi_ke_angka($romawi)
{
    $angka = 0;
    $romawi_nilai = array(
        'M'  => 1000,
        'D'  => 500,
        'C'  => 100,
        'L'  => 50,
        'X'  => 10,
        'V'  => 5,
        'I'  => 1
    );

    $prev_value = 0;

    for ($i = strlen($romawi) - 1; $i >= 0; $i--) {
        $nilai = $romawi_nilai[$romawi[$i]];

        if ($nilai < $prev_value) {
            $angka -= $nilai;
        } else {
            $angka += $nilai;
        }

        $prev_value = $nilai;
    }

    return $angka;
}
