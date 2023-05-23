<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TeoremaBayes extends CI_Controller
{
}

// Probabilitas prior
$priorA = 0.6; // probabilitas terjadinya kejadian A sebelum diperoleh bukti baru
$priorB = 0.4; // probabilitas terjadinya kejadian B sebelum diperoleh bukti baru

// Bukti baru
$likelihoodA = 0.9; // probabilitas terjadinya bukti baru jika kejadian A terjadi
$likelihoodB = 0.3; // probabilitas terjadinya bukti baru jika kejadian B terjadi

// Menghitung probabilitas posterior
$posteriorA = ($likelihoodA * $priorA) / (($likelihoodA * $priorA) + ($likelihoodB * $priorB));
$posteriorB = ($likelihoodB * $priorB) / (($likelihoodA * $priorA) + ($likelihoodB * $priorB));

// Menampilkan hasil
echo "Probabilitas posterior A: " . $posteriorA . "<br>";
echo "Probabilitas posterior B: " . $posteriorB . "<br>";
