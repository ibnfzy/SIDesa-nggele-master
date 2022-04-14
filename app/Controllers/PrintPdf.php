<?php

namespace App\Controllers;

use TCPDF;
use App\Models\M_penduduk;
use App\Models\M_surat;
use App\Models\M_log_surat;

class PrintPdf extends BaseController
{
    public function __construct()
    {
        $this->pdf = new TCPDF();
        $this->pdf->setFont('dejavusans', '', 14, '', true);
        $this->response->setContentType('application/pdf');
    }

    public function surat_ket_tidak_mampu($id)
    {
        $penduduk = new M_penduduk();

        $surat = new M_surat();

        // $log = new M_log_surat();

        $data['penduduk'] = $penduduk->find($id);
        $data['surat'] = $surat->where('nama_surat', 'surat_ket_tidak_mampu');

        $html = view('admin/print/surat-ket-tidak-mampu', $data);

        $this->pdf->writeHTML($html);

        $this->pdf->Output('surat-ket-tidak-mampu.pdf', 'I');
    }
}