<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PkpImport extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Import Excel';
        $data['pkp'] = $this->db->get('pkp')->result();
        $this->load->view('import/index', $data);
    }

    public function create()
    {
        $data['title'] = "Upload File Excel";
        $this->load->view('import/importPkp', $data);
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

                for ($row = 3; $row <= $highestRow; $row++) {

                    $nik = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $tgl_penyuluhan = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $tgl_cetak = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $sertifikat = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $status = $worksheet->getCellByColumnAndRow(4, $row)->getValue();

                    $data[] = array(
                        'nik' => $nik,
                        'tgl_penyuluhan' => $tgl_penyuluhan,
                        'tgl_cetak' => $tgl_cetak,
                        'sertifikat' => $sertifikat,
                        'status' => $status
                    );
                }
            }

            $this->db->insert_batch('pkp', $data);


            $this->session->set_flashdata('success', 'Data Berhasil di-import');
            redirect('pirt/pkp');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal di-import');
            redirect('import');
        }
    }
}

    /* End of file Import.php */
    /* Location: ./application/controllers/Import.php */