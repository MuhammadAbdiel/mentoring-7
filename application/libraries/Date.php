<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Date
{

  public function tanggal_y_m_d()
  {
    return date('Y-m-d');
  }

  public function tanggal_d_M_y()
  {
    return date('d M Y');
  }
}
