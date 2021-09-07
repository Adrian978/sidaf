<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class PirtttdExport extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('ModelExport');
  }

  public function index()
  {
    $data['pirtttd'] = $this->ModelExport->pirtttd();
  }

  public function export()
  {


    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('My Notes Code')
      ->setLastModifiedBy('My Notes Code')
      ->setTitle("Data PIRT TTD")
      ->setSubject("PIRT TTD")
      ->setDescription("Laporan Semua Tanda Terima PIRT TTD")
      ->setKeywords("Data PIRT TTD");
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
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "SERTIFIKAT PIRT TAHUN 2021"); // Set kolom A1 dengan tulisan "DATA PIRT TTD"
    $excel->getActiveSheet()->mergeCells('A1:P1'); // Set Merge Cell pada kolom A1 sampai Q1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A2', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B2', "FOTO"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C2', "NAMA"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D2', "ALAMAT PRODUKSI"); // Set kolom D3 dengan tulisan "JENIS KELAMIN"
    $excel->setActiveSheetIndex(0)->setCellValue('E2', "ALAMAT KTP"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('F2', "NOMOR HP");
    $excel->setActiveSheetIndex(0)->setCellValue('G2', "SERTIFIKAT");
    $excel->setActiveSheetIndex(0)->setCellValue('H2', "PENYULUHAN PKP");
    $excel->setActiveSheetIndex(0)->setCellValue('I2', "MASA");
    $excel->setActiveSheetIndex(0)->setCellValue('J2', "PIRT");
    $excel->setActiveSheetIndex(0)->setCellValue('K2', "PRODUK");
    $excel->setActiveSheetIndex(0)->setCellValue('L2', "KEMASAN");
    $excel->setActiveSheetIndex(0)->setCellValue('M2', "MERK");
    $excel->setActiveSheetIndex(0)->setCellValue('N2', "TTD KASIE");
    $excel->setActiveSheetIndex(0)->setCellValue('O2', "TTD KABID");
    $excel->setActiveSheetIndex(0)->setCellValue('P2', "TTD KADINAS");

    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('N2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('O2')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('P2')->applyFromArray($style_col);

    // Panggil function view yang ada di ModelExport untuk menampilkan semua data PIRT TTD
    $pirtttd = $this->ModelExport->pirtttd();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 3; // Set baris pertama untuk isi tabel adalah baris ke 4
    foreach ($pirtttd as $data) { // Lakukan looping pada variabel siswa
      $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->berkas);
      $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data->nama);
      $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data->alm_pr);
      $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $data->alm_pkp);
      $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $data->telp);
      $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $data->sertifikat);
      $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, date_indo($data->tgl_penyuluhan));
      $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, date_indo($data->masa_pirt));
      $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $data->pirt);
      $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $data->produk);
      $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $data->kemasan);
      $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $data->merk);
      $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow,);
      $excel->setActiveSheetIndex(0)->setCellValue('O' . $numrow,);
      $excel->setActiveSheetIndex(0)->setCellValue('P' . $numrow,);

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
      $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('O' . $numrow)->applyFromArray($style_row);
      $excel->getActiveSheet()->getStyle('P' . $numrow)->applyFromArray($style_row);

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
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('N')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('O')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('P')->setWidth(25); // Set width kolom F

    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data PIRT TTD");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data PIRT TTD.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }
}
