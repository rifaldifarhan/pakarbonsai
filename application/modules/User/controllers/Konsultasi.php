<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    $this->load->model("M_gejala");
    $this->load->model("M_penyakit");
    $this->load->model("M_Diagnosis");
    $this->load->model("M_cetak");

    if (!isset($_SESSION['username'])) {
      redirect(base_url('Auth/Login'));
    }
  }

  public function index()
  {
    $data = array(
      'list_gejala' => $this->M_gejala->getAll()->result(),
      'content'     => 'User/diagnosis.php'
    );
    // echo json_encode($data['data']['list_gejala']);
    $this->load->view('template_user/template_user', $data);
  }

  public function hitung()
  {
    $gejala = $this->input->post("gejala");
    $penyakit = $this->db->get("penyakit")->result();
    $hasil_penyakit = array();

    // jika semua gejala dipilih
    if (sizeof($gejala) >= $this->M_gejala->getAll()->num_rows()) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Diagosis Tidak Ditemukan Karena Anda Memilih Semua Gejala! </div>');
      redirect("User/Konsultasi");
      die();
    }
    // Jika tidak memilih gejala
    elseif (sizeof($gejala) == 0) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Belum Memilih Gejala, Silahkan Memilih Gejala Terlebih Dahulu! </div>');
      redirect("User/Konsultasi");
      die();
    }

    foreach ($penyakit as $value) {
      $hasil_hitung = 0;
      $skor_gejaladipilih = 0;
      $skor_penyakit = 0;

      // skor untuk semua penyakit
      $data_skor_penyakit = $this->M_Diagnosis->getSkorPenyakit($value->id_penyakit)->result();
      foreach ($data_skor_penyakit as  $dsp) {
        $skor_penyakit += $dsp->skor;
      }

      // skor untuk gejala dan penyakit yang dipilih
      for ($i = 0; $i < sizeof($gejala); $i++) {
        $data_skor_gejala = $this->M_Diagnosis->getSkorGejala($gejala[$i], $value->id_penyakit);
        if ($data_skor_gejala->num_rows() > 0) {
          $skor_gejaladipilih +=  $data_skor_gejala->row_array()['skor'];
        }
      }

      //Rumus total gejala dipilih / total penyakit
      if ($skor_gejaladipilih > 0 && $skor_penyakit > 0) {
        $hasil_hitung = $skor_gejaladipilih / $skor_penyakit;
      }
      // input pada data riwayat konsultasi
      $temp = array(
        "id_penyakit"   => $value->id_penyakit,
        "nama"          => $value->nama_penyakit,
        "pengendalian"  => $value->pengendalian,
        "skor_penyakit" => $skor_penyakit,
        "skor_gejaladipilih" => $skor_gejaladipilih,
        "hasil_hitung"  => $hasil_hitung
      );
      array_push($hasil_penyakit, $temp);
    }
    usort($hasil_penyakit, function ($a, $b) {
      return $b['hasil_hitung'] <=> $a['hasil_hitung'];
    });
    // echo json_encode($hasil_penyakit);

    $data_riwayat = array(
      'username'      => $_SESSION['username'],
      'tgl_diagnosa'  => date("Y-m-d"),
      'penyakit'      => $hasil_penyakit[0]['nama'],
      'hasil'         => $hasil_penyakit[0]['hasil_hitung'],
      'pilihan'       => json_encode($gejala)
    );
    $this->db->insert('riwayat_konsultasi', $data_riwayat);

    $data = array(
      'content' => 'User/hasil_diagnosis.php',
      'hasil'   => $hasil_penyakit
    );
    // echo json_encode($data['hasil']);
    $this->load->view('template_user/template_user', $data);
  }

  // public function cetak_laporan()
  // {
  //   $this->load->library('dompdf_gen');

  //   $this->load->view('User/cetak_laporan');

  //   $paper_size = 'A4';
  //   $orientation = 'potrait';
  //   $html = $this->output->get_output();
  //   $this->dompdf->set_paper($paper_size, $orientation);
  //   $this->dompdf->load_html($html);
  //   $this->dompdf->render();
  //   $this->dompdf->stream("Hasil Diagnosis Penyakit Tanaman Bonsai.pdf", array('Attachment' => 0));
  // }
}
