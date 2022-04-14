<?php

namespace App\Controllers;

use App\Libraries\TPDF;
use App\Models\M_penduduk;
use App\Models\M_surat;
use App\Models\M_log_surat;

class PrintPdf extends BaseController
{
    protected $response;

    public function __construct()
    {
        $this->pdf = new TPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $this->pdf->setFont('dejavusans', '', 12, '', true);
        $this->pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
    }

    public function surat_ket_tidak_mampu($id)
    {
        $penduduk = new M_penduduk();

        $surat = new M_surat();

        // $log = new M_log_surat();

        $data['penduduk'] = $penduduk->find($id);
        $data['surat'] = $surat->where('nama_surat', 'surat_ket_tidak_mampu');

        $html = view('admin/print/surat-ket-tidak-mampu', $data);

        $this->pdf->AddPage();
        $this->pdf->writeHTML($html, true, false, true, false, '');
        $this->response->setContentType('application/pdf');

        $this->pdf->Output('surat-ket-tidak-mampu.pdf', 'I');
    }
}