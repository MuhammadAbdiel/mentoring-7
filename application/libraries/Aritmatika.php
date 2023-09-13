<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aritmatika
{

  public function tambah($a, $b)
  {
    try {
      if (gettype($a) != 'integer' || gettype($b) != 'integer') {
        throw new Exception('Variabel a dan b tidak boleh string.');
      }

      if (!is_numeric($a) || !is_numeric($b)) {
        throw new Exception('Variabel a dan b harus berisi angka.');
      }

      return $a + $b;
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }

  public function kurang($a, $b)
  {
    try {
      if (gettype($a) != 'integer' || gettype($b) != 'integer') {
        throw new Exception('Variabel a dan b tidak boleh string.');
      }

      if (!is_numeric($a) || !is_numeric($b)) {
        throw new Exception('Variabel a dan b harus berisi angka.');
      }

      return $a - $b;
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }

  public function kali($a, $b)
  {
    try {
      if (gettype($a) != 'integer' || gettype($b) != 'integer') {
        throw new Exception('Variabel a dan b tidak boleh string.');
      }

      if (!is_numeric($a) || !is_numeric($b)) {
        throw new Exception('Variabel a dan b harus berisi angka.');
      }

      return $a * $b;
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }

  public function bagi($a, $b)
  {
    try {
      if (gettype($a) != 'integer' || gettype($b) != 'integer') {
        throw new Exception('Variabel a dan b tidak boleh string.');
      }

      if (!is_numeric($a) || !is_numeric($b)) {
        throw new Exception('Variabel a dan b harus berisi angka.');
      }

      if ($b == 0) {
        throw new Exception('Pembagian oleh nol tidak diizinkan.');
      }

      return $a / $b;
    } catch (Exception $e) {
      return $e->getMessage();
    }
  }
}
