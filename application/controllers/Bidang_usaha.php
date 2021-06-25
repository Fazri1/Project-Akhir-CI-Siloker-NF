<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang_usaha extends CI_Controller {
    public function index()
	{   
        $this->load->model('all_model', 'bidang');
        $data['list_bidang'] = $this->bidang->getAll('bidang_usaha');

        $this->load->view('header');
		$this->load->view('bidang_usaha/index',$data);
        $this->load->view('footer');
	}

    public function form(){
        $this->load->view('header');
		$this->load->view('bidang_usaha/form_bidang');
        $this->load->view('footer');
    }

    public function save(){
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');

        $this->load->model('all_model','bidang');
		$data_bidang = [$_nama];

		if(!empty($_idedit)){ //update
			$data_bidang['id'] = $_idedit;
			$this->bidang->update('bidang_usaha', $data_bidang);
		}else{
			$this->bidang->simpan('bidang_usaha', $data_bidang);

		}
        redirect('bidang_usaha','refresh');

    }

    public function edit($id){
        $this->load->model('all_model','bidang');
		$obj_bidang = $this->bidang->findById('bidang_usaha',$id);

        $data['objbidang'] = $obj_bidang;
        $this->load->view('header');
		$this->load->view('bidang_usaha/edit', $data);
        $this->load->view('footer');
    }

    public function delete($id){
        $this->load->model('all_model','bidang');
		$data_bidang['id'] = $id;
		// pastikan role diizinkan
		$this->bidang->delete('bidang_usaha', $data_bidang);
		redirect('bidang_usaha', 'refresh');
    }
}