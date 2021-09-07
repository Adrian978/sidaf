<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdukImport extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Import Excel';
        $data['produk'] = $this->db->get('produk')->result();
        $this->load->view('import/index', $data);
    }

    public function create()
    {
        $data['title'] = "Upload File Excel";
        $this->load->view('import/importproduk', $data);
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
                    $produk = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $kemasan = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $merk = $worksheet->getCellByColumnAndRow(4, $row)->getValue();

                    $data[] = array(
                        'kode' => $kode,
                        'nik' => $nik,
                        'produk' => $produk,
                        'kemasan' => $kemasan,
                        'merk' => $merk,
                    );
                }
            }

            $this->db->insert_batch('produk', $data);


            $this->session->set_flashdata('success', 'Data Berhasil di-import');
            redirect('pirt/produk');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal di-import');
            redirect('import');
        }
    }
}

    /* End of file Import.php */
    /* Location: ./application/controllers/Import.php */