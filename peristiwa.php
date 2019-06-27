<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peristiwa extends CI_Controller {

	public function __construct() {
		parent::__construct();

		 $this->load->model('model_data','peristiwa');
	}

	public function index()
	{
		$data['content'] = 'main/view_peristiwa';
		$data['data'] = $this->model_data->Getperistiwa();
		$this->load->view('main/tampilan_utama',$data);
	}
	public function rekapharga()
	{
		$data['content'] = 'main/view_rekapharga';
		$data['data'] = $this->model_data->getPenghargaan();
		$this->load->view('main/tampilan_utama',$data);
	}
	public function rekaplanggar()
	{
		$data['content'] = 'main/view_rekaplanggar';
		$data['data'] = $this->model_data->getPelanggaran();
		$this->load->view('main/tampilan_utama',$data);
	}
	public function rekapsiswa()
	{
		$data['content'] = 'main/view_rekapsiswa';
		$data['data'] = $this->model_data->getSiswa();
		$this->load->view('main/tampilan_utama',$data);
	}
	// public function detilsiswa()
	// {
	// 	$data['content'] = 'main/view_detilsiswa';
	// 	$data['data'] = $this->model_data->detilSiswa();
	// 	$this->load->view('main/tampilan_utama',$data);
	// }
	public function show_id($id){
		$data['content'] = 'main/view_detilsiswa';
		$ini=$this->model_data;
		$data['ini']=$ini->show_detail($id);
		$this->load->view('main/tampilan_utama',$data);
	}
}
