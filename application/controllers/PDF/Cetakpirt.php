<?php
class Cetakpirt extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pirtcetak', '', TRUE);
        $this->load->library('pdf');
    }

    public function cetak($kode)
    {
        $this->db->where('pirt.kode', $kode);
        $this->db->from('pirt');
        $this->db->join('pkp', 'pirt.nik = pkp.nik', 'INNER');
        $this->db->join('pemohon', 'pirt.nik = pemohon.nik', 'INNER');
        $pirtcetak = $this->db->get()->result();
        $pirtcetak2 = $this->db->get("ket_pirt")->result();
        $pirtcetak3 = $this->db->get("kepala_dinas")->result();
        foreach ($pirtcetak as $row) {

            $pdf = new FPDF('P', 'mm', 'Legal');
            $pdf->SetMargins(30.5, 82.5, 30.5);
            $pdf->AddPage();
            // membuat halaman baru
            $pdf->AddFont('BookmanOldStyle-Bold', '', 'bookosb.php');
            $pdf->AddFont('BookmanOldStyle', '', 'bookos.php');
            // setting jenis font yang akan digunakan
            $pdf->SetFont('BookmanOldStyle-Bold', '', 12);
            // mencetak string
            $pdf->Write(10, '         SERTIFIKAT PRODUKSI PANGAN INDUSTRI RUMAH TANGGA');
            $pdf->Cell(190, 7, '', 0, 1, 'C');
            $pdf->Write(10, '                                P-IRT  No. ');
            $pdf->Write(10, $row->pirt);
            $pdf->Cell(190, 9, '', 0, 1, 'C');
            // Memberikan space kebawah agar tidak terlalu rapat
            $pdf->SetFont('BookmanOldStyle', '', 12);
            $pdf->Write(10, 'Diberikan Kepada :');
            $pdf->Cell(5, 10, '', 0, 1);
            $pdf->Write(10, '   Nama IRT              :  ');
            $pdf->Write(10, $row->irt);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, '   Nama Pemilik /     :  ');
            $pdf->Write(10, $row->nama);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, '   Penanggungjawab');
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, '   Alamat                  :  ');
            $pdf->SetMargins(77.5, 25.4, 30.9);
            $pdf->Cell(5, 2, '', 0, 1);
            $pdf->Write(6, $row->alm_pr);
            $pdf->SetMargins(30.5, 82.5, 30.5);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, '   Jenis Pangan        :  ');
            $pdf->Write(10, $row->produk);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, '   Kemasan              :  ');
            $pdf->Write(10, $row->kemasan);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, '   Merk                     :  ');
            $pdf->Write(10, $row->merk);
            $pdf->Cell(10, 10, '', 0, 1);
        }

        foreach ($pirtcetak2 as $row) {
            $pdf->Write(6, $row->keterangan);
        }

        foreach ($pirtcetak as $row) {
            $pdf->SetMargins(35.5, 25.4, 30.9);
            $pdf->Cell(10, 6, '', 0, 1);
            $pdf->Write(10, 'Kota                  :  Semarang');
            $pdf->Cell(10, 6, '', 0, 1);
            $pdf->Write(10, 'Provinsi             :  Jawa Tengah');
            $pdf->Cell(10, 6, '', 0, 1);
            $pdf->Write(10, 'Pada Tanggal     :  ');
            $pdf->Write(10, date_indo($row->tgl_penyuluhan));
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->SetMargins(30.5, 82.5, 30.5);
            $pdf->Cell(10, 6, '', 0, 1);
            $pdf->Write(6, 'Sertifikat  Produksi Pangan Industri Rumah Tangga (P-IRT) ini berlaku sampai dengan tanggal ');
            $pdf->SetFont('BookmanOldStyle-Bold', '', 12);
            $pdf->Write(6, date_indo($row->masa_pirt));
            $pdf->SetFont('BookmanOldStyle', '', 12);
            $pdf->SetMargins(110.5, 25.4, 30.9);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Cell(10, 7, '', 0, 1);
            $pdf->Write(10, 'Semarang, ');
            $pdf->Write(10, date_indo($row->tgl_pirt));
            $pdf->Cell(10, 5, '', 0, 1);
            $pdf->Cell(10, 5, '', 0, 1);
            $pdf->Write(10, 'Kepala Dinas Kesehatan');
            $pdf->Cell(305, 7, '', 0, 1, 'C');
            $pdf->Cell(305, 7, '', 0, 1, 'C');
        }
        foreach ($pirtcetak3 as $row) {
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
