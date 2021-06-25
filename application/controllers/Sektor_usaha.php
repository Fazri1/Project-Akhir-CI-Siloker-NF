<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sektor_usaha extends CI_Controller {
    public function index()
	{
        $this->load->model('all_model', 'sektor');
        $data['list_sektor']=$this->sektor->getAll('sektor_usaha');

        $this->load->view('header');
		$this->load->view('sektor_usaha/index',$data);
        $this->load->view('footer');
    }

    public function form(){
        $this->load->view('header');
		$this->load->view('sektor_usaha/form_sektor');
        $this->load->view('footer');
    }

    public function save(){
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');

        $this->load->model('all_model', 'sektor');
		$data_sektor = [$_nama];

		if(!empty($_idedit)){ //update
			$data_sektor['id'] = $_idedit;
			$this->sektor->update('sektor_usaha', $data_sektor);
		}else{
			$this->sektor->simpan('sektor_usaha', $data_sektor);

		}
        redirect('sektor_usaha','refresh');

    }

    public function edit($id){
        $this->load->model('all_model','sektor');
		$obj_sektor = $this->sektor->findById('sektor_usaha',$id);

        $data['objsektor'] = $obj_sektor;
        $this->load->view('header');
		$this->load->view('sektor_usaha/edit', $data);
        $this->load->view('footer');
    }

    public function delete($id){
        $this->load->model('all_model','sektor');
		$data_sektor['id'] = $id;
		// pastikan role diizinkan
		$this->sektor->delete('sektor_usaha', $data_sektor);
		redirect('sektor_usaha', 'refresh');
    }
}