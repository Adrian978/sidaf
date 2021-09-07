<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class PirtcetakExport extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('ModelExport');
  }

  public function index()
  {
    $data['pirtcetak'] = $this->ModelExport->pirtcetak();
  }

  public function export()
  {


    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('My Notes Code')
      ->setLastModifiedBy('My Notes Code')
      ->setTitle("Data Pirt Cetak")
      ->setSubject("Pirt Cetak")
      ->setDescription("Laporan Semua Tanda Terima Pirt Cetak")
      ->setKeywords("Data Pirt Cetak");
    // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
    $style_col = array(
      'font' => array('bold' => true), // Set font nya jadi bold
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
    $style_row = array(
      'alignment' => array(
        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
      ),
      'borders' => array(
        'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
        'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
        'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
        'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
      )
    );
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PIRT CETAK"); // Set kolom A1 dengan tulisan "DATA PIRT CETAK"
    $excel->getActiveSheet()->mergeCells('A1:M1'); // Set Merge Cell pada kolom A1 sampai Q1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B3', "NAMA"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C3', "ALAMAT PRODUKSI"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D3', "PENYULUHAN PKP"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('E3', "CETAK PIRT"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('F3', "SERTIFIKAT");
    $excel->setActiveSheetIndex(0)->setCellValue('G3', "NOMOR HP");
    $excel->setActiveSheetIndex(0)->setCellValue('H3', "PIRT");
    $excel->setActiveSheetIndex(0)->setCellValue('I3', "IRT");
    $excel->setActiveSheetIndex(0)->setCellValue('J3', "PRODUK");
    $excel->setActiveSheetIndex(0)->setCellValue('K3', "KEMASAN");
    $excel->setActiveSheetIndex(0)->setCellValue('L3', "MERK");
    $excel->setActiveSheetIndex(0)->setCellValue('M3', "MASA BERLAKU");

    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);

    // Panggil function view yang ada di ModelExport untuk menampilkan semua data pirtcetak
    $pirtcetak = $this->ModelExport->pirtcetak();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach ($pirtcetak as $data) { // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->nama);
      $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data->alm_pr);
      $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, date_indo($data->tgl_penyuluhan));
      $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, date_indo($data->tgl_pirt));
      $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data->sertifikat);
      $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $data->telp);
      $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $data->pirt);
      $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $data->irt);
      $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $data->produk);
      $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $data->kemasan);
      $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $data->merk);
      $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, date_indo($data->masa_pirt));

      // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
      $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row);

      $no++; // Tambah 1 setiap kali looping
      $numrow++; // Tambah 1 setiap kali looping
    }
    // Set width kolom
    $excel->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(25); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(50); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom G
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(25); // Set width kolom H
    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25); // Set width kolom I
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(25); // Set width kolom J
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(25); // Set width kolom K
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(25); // Set width kolom K
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(25); // Set width kolom K

    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data Pirt Cetak");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Pirt Cetak.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }
}
