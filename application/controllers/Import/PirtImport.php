<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PirtImport extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Import Excel';
        $data['pirt'] = $this->db->get('pirt')->result();
        $this->load->view('import/index', $data);
    }

    public function create()
    {
        $data['title'] = "Upload File Excel";
        $this->load->view('import/importpirt', $data);
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

                    $kode = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $nik = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $pirt = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $produk = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $kemasan = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $merk = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $tgl_pirt = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $masa_pirt = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $irt = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $pre_test = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $post_test = $worksheet->getCellByColumnAndRow(10, $row)->getValue();

                    $data[] = array(
                        'kode' => $kode,
                        'nik' => $nik,
                        'pirt' => $pirt,
                        'produk' => $produk,
                        'kemasan' => $kemasan,
                        'merk' => $merk,
                        'tgl_pirt' => $tgl_pirt,
                        'masa_pirt' => $masa_pirt,
                        'irt' => $irt,
                        'pre_test' => $pre_test,
                        'post_test' => $post_test,
                    );
                }
            }

            $this->db->insert_batch('pirt', $data);


            $this->session->set_flashdata('success', 'Data Berhasil di-import');
            redirect('pirt/pirt');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal di-import');
            redirect('import');
        }
    }
}

    /* End of file Import.php */
    /* Location: ./application/controllers/Import.php */