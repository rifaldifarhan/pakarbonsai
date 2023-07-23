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

  function hitung()
  {
    $gejala = $this->input->post("gejala");
    $penyakit = $this->db->get("penyakit")->result();
    $hasil_penyakit = array();

    foreach ($penyakit as $value) {
      $hasil_hitung = 0;
      $skor_penyakit = 0;

      $data_skor = array();
      $data_skor_dipilih = array();
      $nilai_semesta = 0;
      $hasil_bobot = array();
      $total_hasil_bobot = 0;
      $tanpa_evidence = array();
      $total_tanpa_evidence = 0;
      $dengan_evidence = array();
      $total_dengan_evidence = 0;
      $nilai_bayes = array();
      $total_nilai_bayes = 0;
      $total_nilai_bayes_persen = 0;

      // skor untuk semua penyakit
      $data_skor_penyakit = $this->M_Diagnosis->getSkorPenyakit($value->id_penyakit)->result();
      foreach ($data_skor_penyakit as  $dsp) {
        $data_skor[] = $dsp->skor;
      }

      // skor untuk gejala dan penyakit yang dipilih
      for ($i = 0; $i < sizeof($gejala); $i++) {
        $data_skor_gejala = $this->M_Diagnosis->getSkorGejala($gejala[$i], $value->id_penyakit);
        if ($data_skor_gejala->num_rows() > 0) {
          $nilai_semesta +=  $data_skor_gejala->row_array()['skor'];
          $data_skor_dipilih[] =  $data_skor_gejala->row_array()['skor'];
        }
      }

      // hitung hasil bobot
      for ($i = 0; $i < sizeof($data_skor_dipilih); $i++) {
        $hasil_bobot[] = round($data_skor_dipilih[$i] / $nilai_semesta, 4);
        $total_hasil_bobot += round($data_skor_dipilih[$i] / $nilai_semesta, 4);
      }

      // hitung tanpa evidence
      for ($i = 0; $i < sizeof($data_skor_dipilih); $i++) {
        $tanpa_evidence[] = round($data_skor_dipilih[$i] * $hasil_bobot[$i], 4);
        $total_tanpa_evidence += round($data_skor_dipilih[$i] * $hasil_bobot[$i], 4);
      }

      // hitung dengan evidence
      for ($i = 0; $i < sizeof($tanpa_evidence); $i++) {
        $dengan_evidence[] = round($tanpa_evidence[$i] / $total_tanpa_evidence, 4);
        $total_dengan_evidence += round($tanpa_evidence[$i] / $total_tanpa_evidence, 4);
      }

      // hitung nilai bayes
      for ($i = 0; $i < sizeof($data_skor_dipilih); $i++) {
        $nilai_bayes[] = round($data_skor_dipilih[$i] * $dengan_evidence[$i], 4);
        $total_nilai_bayes += round($data_skor_dipilih[$i] * $dengan_evidence[$i], 4);
      }
      $total_nilai_bayes_persen = (round($total_nilai_bayes, 2) * 100);

      // input pada data riwayat konsultasi
      $temp = array(
        "id_penyakit"           => $value->id_penyakit,
        "nama"                  => $value->nama_penyakit,
        "pengendalian"          => $value->pengendalian,
        // "data_skor"          => $data_skor,
        "data_skor_dipilih"     => $data_skor_dipilih,
        "nilai_semesta"         => $nilai_semesta,
        "hasil_bobot"           => $hasil_bobot,
        "total_hasil_bobot"     => $total_hasil_bobot,
        "tanpa_evidence"        => $tanpa_evidence,
        "total_tanpa_evidence"  => $total_tanpa_evidence,
        "dengan_evidence"       => $dengan_evidence,
        "total_dengan_evidence" => $total_dengan_evidence,
        "nilai_bayes"           => $nilai_bayes,
        "total_nilai_bayes"     => $total_nilai_bayes,
        "hasil_hitung"          => $total_nilai_bayes_persen,
        // "hasil_hitung"       => $hasil_hitung
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
    $this->load->view('template_user/template_user', $data);
  }
}
