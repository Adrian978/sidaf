<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApotekImport extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Import Excel';
        $data['apotek'] = $this->db->get('apotek')->result();
        $this->load->view('import/index', $data);
    }

    public function create()
    {
        $data['title'] = "Upload File Excel";
        $this->load->view('import/importapotek', $data);
    }

    public function excel()
    {
        if (isset($_FILES["file"]["name"])) {
            // upload
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_name = $_FILES['file']['name'];
            $file_size = $_FILES['file']['size'];
            $file_type = $_FILES['file']['type'];
            // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads

            $object = PHPExcel_IOFactory::load($file_tmp);

            foreach ($object->getWorksheetIterator() as $worksheet) {

                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();

                for ($row = 5; $row <= $highestRow; $row++) {

                    $nm_apotek = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $sia = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $nib = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $tgl_daftar = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $masa_apotek = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $alamat = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $apa = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $telp_apa = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $psa = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $telp_psa = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    $sipa = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                    $masa_sipa = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
                    $apoteker_pendamping = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
                    $keterangan = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
                    $status = $worksheet->getCellByColumnAndRow(15, $row)->getValue();

                    $data[] = array(
                        'nm_apotek' => $nm_apotek,
                        'sia' => $sia,
                        'nib' => $nib,
                        'tgl_daftar' => $tgl_daftar,
                        'masa_apotek' => $masa_apotek,
                        'alamat' => $alamat,
                        'apa' => $apa,
                        'telp_apa' => $telp_apa,
                        'psa' => $psa,
                        'telp_psa' => $telp_psa,
                        'sipa' => $sipa,
                        'masa_sipa' => $masa_sipa,
                        'apoteker_pendamping' => $apoteker_pendamping,
                        'keterangan' => $keterangan,
                        'status' => $status,
                    );
                }
            }

            $this->db->insert_batch('apotek', $data);


            $this->session->set_flashdata('success', 'Data Berhasil di-import');
            redirect('ia/apotek');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal di-import');
            redirect('import');
        }
    }
}

    /* End of file Import.php */
    /* Location: ./application/controllers/Import.php */