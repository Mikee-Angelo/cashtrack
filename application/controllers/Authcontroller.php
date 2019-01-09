<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authcontroller extends CI_Controller{

    public function index(){
        $a['data'] = ['title' => 'Login'];
        $this->load->view('template/header-login', $a);
        $this->load->view('login');
        $this->load->view('template/footer-login');
    }

    public function dashboard(){
        $a['data'] = ['title' => 'Login'];
        $this->load->view('template/header-dashboard', $a);
        $this->load->view('dashboard');
        $this->load->view('template/footer-dashboard');        
    }
}