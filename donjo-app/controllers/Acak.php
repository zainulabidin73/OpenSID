<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Acak extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('acak_model');
		$this->acak_model->acak_penduduk();
		$this->acak_model->acak_keluarga();
	}

}
