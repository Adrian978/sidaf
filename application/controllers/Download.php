<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'download'));
	}

	public function index()
	{
		$this->load->view('v_download');
	}

	public function download_pkp()
	{
		force_download('file/Importpkp.xlsx', NULL);
	}

	public function download_pemohon()
	{
		force_download('file/Importpemohon.xlsx', NULL);
	}

	public function download_produk()
	{
		force_download('file/Importproduk.xlsx', NULL);
	}

	public function download_pirt()
	{
		force_download('file/Importpirt.xlsx', NULL);
	}

	public function download_apotek()
	{
		force_download('file/Importapotek.xlsx', NULL);
	}

	public function download_obat()
	{
		force_download('file/Importobat.xlsx', NULL);
	}
}
