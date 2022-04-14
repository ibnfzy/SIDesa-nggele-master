<?php

namespace App\Libraries;

use TCPDF;

class TPDF extends TCPDF
{
    public function header()
    {
        // Logo
        $headerData = $this->getHeaderData();
        $header = 'admin/uploads/header-surat.png';
        $this->Image($header, 10, -1, 190, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
    }

    public function footer()
    {
        // nothing
    }
}