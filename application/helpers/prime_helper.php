<?php
function isPrime($number)
{
  // Menghandle kasus khusus untuk bilangan 0 dan 1
  if ($number <= 1) {
    return false;
  }

  // Menggunakan loop untuk memeriksa pembagi dari 2 hingga akar dari bilangan tersebut
  for ($i = 2; $i * $i <= $number; $i++) {
    if ($number % $i == 0) {
      return false; // Bilangan bukan prima jika ada pembagi selain 1 dan dirinya sendiri
    }
  }

  return true; // Jika tidak ada pembagi selain 1 dan dirinya sendiri, maka bilangan adalah prima
}
