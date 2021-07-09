<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function login()
	{
        $_username = $this->input->post('username');
        $_pass = $this->input->post('pass');

        if(!empty($_username)){
            if($_username == 'admin' && $_pass == 'admin' or $_username == 'bambang' 
            && $_pass == 'bambang098' or $_username == 'eka' && $_pass == 'eka123' ){
                $this->session->set_userdata('username', $_username);
                $this->session->set_userdata('role', 'Admin');
                redirect(base_url(), 'refresh');
            }else{
                $data['info'] = 'Username atau Password Salah';
            }
        }

        $data[]='';
        $this->load->view('header');
        $this->load->view('user/login',$data);
        $this->load->view('footer');
    }

    public function logout(){
        session_destroy();
        redirect(base_url(), 'refresh');
    }
}