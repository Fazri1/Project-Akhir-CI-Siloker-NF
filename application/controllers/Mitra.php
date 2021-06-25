<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mitra extends CI_Controller {
    public function index()
	{
        $this->load->model('mitra_model','mitra');
        
        $data['list_mitra'] = $this->mitra->getAll();
		$this->load->view('header');
		$this->load->view('mitra/index', $data);
		$this->load->view('footer');
	}

	public function form(){
		$this->load->model('all_model','all');
		$data['list_bidang'] = $this->all->getAll('bidang_usaha');
		$data['list_sektor'] = $this->all->getAll('sektor_usaha');

		$this->load->view('header');
		$this->load->view('mitra/form_mitra',$data);
		$this->load->view('footer');
	}

	public function save(){
		$_nama_mitra = $this->input->post('nama_mitra');
		$_alamat = $this->input->post('alamat');
		$_kontak_person = $this->input->post('kontak_person');
		$_telpon = $this->input->post('telpon');
		$_email = $this->input->post('email');
		$_alamat_web = $this->input->post('alamat_web');
		$_bidang_usaha = $this->input->post('bidang_usaha');
		$_sektor_usaha = $this->input->post('sektor_usaha');
		$_idedit = $this->input->post('idedit');

		$this->load->model('mitra_model','mitra');
		$data_mitra = [$_nama_mitra,$_alamat,$_kontak_person,$_telpon,$_email,$_alamat_web,$_bidang_usaha,$_sektor_usaha];

		if(!empty($_idedit)){ //update
			$data_mitra['id'] = $_idedit;
			$this->mitra->update($data_mitra);
		}else{
			$this->mitra->simpan($data_mitra);

		}

		redirect('mitra','refresh');
	}

	public function edit($id){
		$this->load->model('mitra_model','mitra');
		$obj_mitra = $this->mitra->findById($id);

		$this->load->model('all_model','all');
		$data['list_bidang'] = $this->all->getAll('bidang_usaha');
		$data['list_sektor'] = $this->all->getAll('sektor_usaha');
		

		$data['objmitra'] = $obj_mitra;
		$this->load->view('header');
		$this->load->view('mitra/edit', $data);
		$this->load->view('footer');
	}

	public function delete($id){
		$this->load->model('mitra_model','mitra');
		$data_mitra['id'] = $id;
		// pastikan role diizinkan
		$this->mitra->delete($data_mitra);
		redirect('mitra', 'refresh');
	}
	
	// upload file
	public function view($id){
		$this->load->model('mitra_model','mitra');
		$obj_mitra = $this->mitra->findById($id);

		$this->load->model('all_model','bidang');
		$bidang_usaha = $this->bidang->findById('bidang_usaha',$obj_mitra->bidang_usaha_id);
		$sektor_usaha = $this->bidang->findById('sektor_usaha',$obj_mitra->sektor_usaha_id);

		$data['bidangUsaha'] = $bidang_usaha;
		$data['sektorUsaha'] = $sektor_usaha;
		$data['objmitra'] = $obj_mitra;
		$data['error']='';
		$this->load->view('header');
		$this->load->view('mitra/view', $data);
		$this->load->view('footer');
	}
	
	public function upload(){
		$_idmitra = $this->input->post('idmitra');
		$this->load->model('mitra_model','mitra');
		$obj_mitra = $this->mitra->findById($_idmitra);
		
		$this->load->model('all_model','bidang');
		$bidang_usaha = $this->bidang->findById('bidang_usaha',$obj_mitra->bidang_usaha_id);
		$sektor_usaha = $this->bidang->findById('sektor_usaha',$obj_mitra->sektor_usaha_id);
	
		$data['bidangUsaha'] = $bidang_usaha;
		$data['sektorUsaha'] = $sektor_usaha;
		$data['objmitra'] = $obj_mitra;

		$config['upload_path'] = './uploads/photos/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 100;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;
		$config['file_name'] = $obj_mitra->id;

		$this->load->library('upload', $config);

		if(!$this->upload->do_upload('foto')){
			$data['error'] = $this->upload->display_errors();
		}else{
			$data['error'] = '';
			$data['upload_data'] = $this->upload->data();
		}
		$this->load->view('header');
		$this->load->view('mitra/view', $data);
		$this->load->view('footer');
	}
}
