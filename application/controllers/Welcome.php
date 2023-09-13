<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper('prime_helper');
        // $this->load->library('aritmatika');

        $this->load->helper('romawi_helper');
        $this->load->helper('angka_helper');
        $this->load->library('date');
    }

    public function index()
    {
        // $bilangan = 9;

        // $this->load->view('welcome_message', [
        // 	'bilangan' => $bilangan,
        // 	'isPrime' => isPrime($bilangan)
        // ]);

        // $a = 4;
        // $b = 2;

        // $hasilTambah = $this->aritmatika->tambah($a, $b);
        // $hasilKurang = $this->aritmatika->kurang($a, $b);
        // $hasilKali = $this->aritmatika->kali($a, $b);
        // $hasilBagi = $this->aritmatika->bagi($a, $b);

        $angka = 10;
        $romawi = "VII";

        $tanggal_y_m_d = $this->date->tanggal_y_m_d();
        $tanggal_d_M_y = $this->date->tanggal_d_M_y();

        $this->load->view('welcome_message', [
            'angka' => $angka,
            'romawi' => $romawi,
            'angka_ke_romawi' => angka_ke_romawi($angka),
            'romawi_ke_angka' => romawi_ke_angka($romawi),
            'tanggal_y_m_d' => $tanggal_y_m_d,
            'tanggal_d_M_y' => $tanggal_d_M_y,
        ]);
    }
}
