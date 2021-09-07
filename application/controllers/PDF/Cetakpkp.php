<?php
class Cetakpkp extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pkpcetak', '', TRUE);
        $this->load->library('pdf');
    }

    public function cetak($nik)
    {
        $this->db->where('pkp.nik', $nik);
        $this->db->from('pkp');
        $this->db->join('pemohon', 'pemohon.nik = pkp.nik', 'LEFT');
        $pkpcetak = $this->db->get()->result();
        $pkpcetak2 = $this->db->get("ket_pkp")->result();
        $pkpcetak3 = $this->db->get("kepala_dinas")->result();
        foreach ($pkpcetak as $row) {

            $pdf = new FPDF('P', 'mm', 'Legal');
            $pdf->SetMargins(32.5, 75.4, 30.9);
            $pdf->AddPage();
            // membuat halaman baru
            $pdf->AddFont('BookmanOldStyle-Bold', '', 'bookosb.php');
            $pdf->AddFont('BookmanOldStyle', '', 'bookos.php');
            // setting jenis font yang akan digunakan
            $pdf->SetFont('BookmanOldStyle-Bold', '', 16);
            // mencetak string
            $pdf->Write(10, '  SERTIFIKAT PENYULUHAN KEAMANAN PANGAN');
            $pdf->Cell(190, 7, '', 0, 1, 'C');
            $pdf->Cell(190, 7, '', 0, 1, 'C');
            $pdf->SetFont('BookmanOldStyle-Bold', '', 12);
            $pdf->Write(10, '                                Nomor. ');
            $pdf->Write(10, $row->sertifikat);
            $pdf->Cell(190, 7, '', 0, 1, 'C');
            // Memberikan space kebawah agar tidak terlalu rapat
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetFont('BookmanOldStyle', '', 12);
            $pdf->Write(10, 'Diberikan Kepada :');
            $pdf->Cell(5, 7, '', 0, 1);
            $pdf->Cell(5, 7, '', 0, 1);
            $pdf->Write(10, '       Nama     :  ');
            $pdf->Write(10, $row->nama);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, '       Jabatan :  ');
            $pdf->Write(10, $row->jabatan);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, '       Alamat   :  ');
            $pdf->SetMargins(65.5, 25.4, 30.9);
            $pdf->Cell(5, 2, '', 0, 1);
            $pdf->Write(6, $row->alm_pkp);
            $pdf->SetMargins(32.5, 25.4, 30.9);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
        }

        foreach ($pkpcetak2 as $row) {
            $pdf->Write(8, $row->keterangan);
        }

        foreach ($pkpcetak as $row) {
            $pdf->SetMargins(45.5, 25.4, 30.9);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, 'Kota                  :  Semarang');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, 'Provinsi             :  Jawa Tengah');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, 'Pada Tanggal     :  ');
            $pdf->Write(10, date_indo($row->tgl_penyuluhan));
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetMargins(110.5, 25.4, 30.9);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, 'Semarang, ');
            $pdf->Write(10, date_indo($row->tgl_cetak));
            $pdf->Cell(10, 5, '', 0, 1);
            $pdf->Cell(10, 5, '', 0, 1);
            $pdf->Write(10, 'Kepala Dinas Kesehatan');
            $pdf->Cell(305, 7, '', 0, 1, 'C');
            $pdf->Cell(305, 7, '', 0, 1, 'C');
        }
        foreach ($pkpcetak3 as $row) {
            $pdf->SetFont('BookmanOldStyle-Bold', 'U', 12);
            $pdf->SetMargins(100.5, 25.4, 30.9);
            $pdf->Cell(10, 7, '', 0, 1, 'C');
            $pdf->Write(10, $row->nama_kd);
            $pdf->SetFont('BookmanOldStyle', '', 12);
            $pdf->SetMargins(110.5, 25.4, 30.9);
            $pdf->Cell(10, 7, '', 0, 1, 'C');
            $pdf->Write(10, 'NIP.  ');
            $pdf->Write(10, $row->nip);
            $pdf->Output();
        }
    }
}
