<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class ObatExport extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('ModelExport');
  }

  public function index()
  {
    $data['obat'] = $this->ModelExport->obat();
  }

  public function export()
  {


    // Panggil class PHPExcel nya
    $excel = new PHPExcel();
    // Settingan awal fil excel
    $excel->getProperties()->setCreator('My Notes Code')
      ->setLastModifiedBy('My Notes Code')
      ->setTitle("Data Toko Obat")
      ->setSubject("Toko Obat")
      ->setDescription("Laporan Semua Data Toko Obat")
      ->setKeywords("Data Toko Obat");
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
    $excel->setActiveSheetIndex(0)->setCellValue('A1', "DAFTAR TOKO OBAT"); // Set kolom A1 dengan tulisan "DATA APOTEK"
    $excel->getActiveSheet()->mergeCells('A1:M1'); // Set Merge Cell pada kolom A1 sampai Q1
    $excel->setActiveSheetIndex(0)->setCellValue('A2', "PROVINSI JAWA TENGAH (KOTA SEMARANG)"); // Set kolom A1 dengan tulisan "DATA APOTEK"
    $excel->getActiveSheet()->mergeCells('A2:M2'); // Set Merge Cell pada kolom A1 sampai Q1
    $excel->getActiveSheet()->mergeCells('A3:M3'); // Set Merge Cell pada kolom A1 sampai Q1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A2')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(TRUE); // Set bold kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A2')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A3')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
    $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    $excel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
    // Buat header tabel nya pada baris ke 3
    $excel->setActiveSheetIndex(0)->setCellValue('A4', "NO"); // Set kolom A3 dengan tulisan "NO"
    $excel->setActiveSheetIndex(0)->setCellValue('B4', "NAMA TOKO OBAT"); // Set kolom B3 dengan tulisan "NIS"
    $excel->setActiveSheetIndex(0)->setCellValue('C4', "SI"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('D4', "NIB"); // Set kolom C3 dengan tulisan "NAMA"
    $excel->setActiveSheetIndex(0)->setCellValue('E4', "TANGGAL DAFTAR"); // Set kolom E3 dengan tulisan "ALAMAT"
    $excel->setActiveSheetIndex(0)->setCellValue('F4', "MASA BERLAKU TOKO OBAT");
    $excel->setActiveSheetIndex(0)->setCellValue('G4', "ALAMAT TOKO OBAT");
    $excel->setActiveSheetIndex(0)->setCellValue('H4', "PENANGGUNGJAWAB");
    $excel->setActiveSheetIndex(0)->setCellValue('I4', "TELP PENANGGUNGJAWAB");
    $excel->setActiveSheetIndex(0)->setCellValue('J4', "PEMILIK SARANA");
    $excel->setActiveSheetIndex(0)->setCellValue('K4', "TELP PEMILIK SARANA");
    $excel->setActiveSheetIndex(0)->setCellValue('L4', "KETERANGAN");
    $excel->setActiveSheetIndex(0)->setCellValue('M4', "STATUS");

    // Apply style header yang telah kita buat tadi ke masing-masing kolom header
    $excel->getActiveSheet()->getStyle('A4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('B4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('C4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('D4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('E4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('F4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('G4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('H4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('I4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('J4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('K4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('L4')->applyFromArray($style_col);
    $excel->getActiveSheet()->getStyle('M4')->applyFromArray($style_col);

    // Panggil function view yang ada di ModelExport untuk menampilkan semua data apotek
    $obat = $this->ModelExport->obat();
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    $numrow = 5; // Set baris pertama untuk isi tabel adalah baris ke 5
    foreach ($obat as $data) { // Lakukan looping pada variabel apotek
      $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
      $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $data->toko_obat);
      $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $data->si);
      $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $data->nib);
      $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, date_indo($data->tgl_daftar));
      $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, date_indo($data->masa_toko));
      $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $data->alamat);
      $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $data->ap);
      $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $data->telp_ap);
      $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $data->ps);
      $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $data->telp_ps);
      $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $data->keterangan);
      $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $data->status);

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
    $excel->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
    $excel->getActiveSheet()->getColumnDimension('C')->setWidth(25); // Set width kolom C
    $excel->getActiveSheet()->getColumnDimension('D')->setWidth(20); // Set width kolom D
    $excel->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
    $excel->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom F
    $excel->getActiveSheet()->getColumnDimension('G')->setWidth(25); // Set width kolom G
    $excel->getActiveSheet()->getColumnDimension('H')->setWidth(25); // Set width kolom H
    $excel->getActiveSheet()->getColumnDimension('I')->setWidth(25); // Set width kolom H
    $excel->getActiveSheet()->getColumnDimension('J')->setWidth(25); // Set width kolom H
    $excel->getActiveSheet()->getColumnDimension('K')->setWidth(25); // Set width kolom H
    $excel->getActiveSheet()->getColumnDimension('L')->setWidth(25); // Set width kolom H
    $excel->getActiveSheet()->getColumnDimension('M')->setWidth(25); // Set width kolom H

    // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
    $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
    // Set orientasi kertas jadi LANDSCAPE
    $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
    // Set judul file excel nya
    $excel->getActiveSheet(0)->setTitle("Laporan Data Toko Obat");
    $excel->setActiveSheetIndex(0);
    // Proses file excel
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment; filename="Data Toko Obat.xlsx"'); // Set nama file excel nya
    header('Cache-Control: max-age=0');
    $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
    $write->save('php://output');
  }
}
