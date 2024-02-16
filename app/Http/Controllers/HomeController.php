<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function exportSkLahir() {
        $pdf = PDF::loadView('export-lahir.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSkKawin() {
        $pdf = PDF::loadView('export-kawin.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSkBelumKawin() {
        $pdf = PDF::loadView('export-belum-kawin.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSkDuda() {
        $pdf = PDF::loadView('export-duda..export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSkJanda() {
        $pdf = PDF::loadView('export-janda..export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSkCerai() {
        $pdf = PDF::loadView('export-cerai..export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKTU() {
        $pdf = PDF::loadView('export-sktu.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKTMBayarCerai() {
        $pdf = PDF::loadView('export-sktm-bayar-cerai.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKTMBedahRumah() {
        $pdf = PDF::loadView('export-sktm-bedah-rumah.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKTMDisabilitas() {
        $pdf = PDF::loadView('export-sktm-disabilitas.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKTMJKNKIS() {
        $pdf = PDF::loadView('export-sktm-jkn-kis.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKTMLansia() {
        $pdf = PDF::loadView('export-sktm-lansia.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKTMSekolah() {
        $pdf = PDF::loadView('export-sktm-sekolah.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKBedaNama() {
        $pdf = PDF::loadView('export-beda-nama.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSuratKeterangan() {
        $pdf = PDF::loadView('export-surat-keterangan.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKPindahLingkungan() {
        $pdf = PDF::loadView('export-pindah-lingkungan.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKPindahDesa() {
        $pdf = PDF::loadView('export-pindah-desa.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKPindahKecamatan() {
        $pdf = PDF::loadView('export-pindah-kecamatan.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKPindahProvinsi() {
        $pdf = PDF::loadView('export-pindah-provinsi.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKBepergian() {
        $pdf = PDF::loadView('export-bepergian.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKTempatTinggal() {
        $pdf = PDF::loadView('export-tempat-tinggal.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKHargaTanah() {
        $pdf = PDF::loadView('export-harga-tanah.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKPenghasilanOrtu() {
        $pdf = PDF::loadView('export-penghasilan-ortu.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSilsilah() {
        $pdf = PDF::loadView('export-silsilah.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSKMeninggal() {
        $pdf = PDF::loadView('export-meninggal.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSuratIzinOrangTua() {
        $pdf = PDF::loadView('export-surat-izin-orang-tua.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportHibahSamsat() {
        $pdf = PDF::loadView('export-hibah-samsat.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSuratPembelianSolar() {
        $pdf = PDF::loadView('export-surat-pembelian-solar.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSuratKeteranganDomisili() {
        $pdf = PDF::loadView('export-surat-keterangan-domisili.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportPendaftaran() {
        $pdf = PDF::loadView('export-pendaftaran.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportKeteranganAhliWaris() {
        $pdf = PDF::loadView('export-keterangan-ahli-waris.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }

    public function exportSuratKuasa() {
        $pdf = PDF::loadView('export-surat-kuasa.export')->setPaper('a4', 'portrait');
        return $pdf->stream();
    }
}
