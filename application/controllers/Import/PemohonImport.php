<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PemohonImport extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Import Excel';
        $data['pemohon'] = $this->db->get('pemohon')->result();
        $this->load->view('import/index', $data);
    }

    public function create()
    {
        $data['title'] = "Upload File Excel";
        $this->load->view('import/importpemohon', $data);
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
                    $nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $nama_pj = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $telp = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $alm_pkp = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $alm_pr = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $jenis_kelamin = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $jabatan = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $berkas = $worksheet->getCellByColumnAndRow(8, $row)->getValue();

                    $data[] = array(
                        'nik' => $nik,
                        'nama' => $nama,
                        'nama_pj' => $nama_pj,
                        'telp' => $telp,
                        'alm_pkp' => $alm_pkp,
                        'alm_pr' => $alm_pr,
                        'jenis_kelamin' => $jenis_kelamin,
                        'jabatan' => $jabatan,
                        'berkas' => $berkas,
                    );
                }
            }

            $this->db->insert_batch('pemohon', $data);


            $this->session->set_flashdata('success', 'Data Berhasil di-import');
            redirect('pemohon');
        } else {
            $this->session->set_flashdata('error', 'Data Gagal di-import');
            redirect('import');
        }
    }
}

    /* End of file Import.php */
    /* Location: ./application/controllers/Import.php */