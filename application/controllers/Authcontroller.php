<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authcontroller extends CI_Controller{

    public function index(){
        $a['data'] = ['title' => 'Login'];
        $this->load->view('template/header-login', $a);
        $this->load->view('login');
        $this->load->view('template/footer-login');
    }

    public function home(){
        $a['data'] = ['title' => 'Home'];
        $this->load->view('template/header-home', $a);
        $this->load->view('dashboard');
        $this->load->view('template/footer-home');        
    }

    public function addincome(){
        $a['data'] = ['title' => 'Add Income'];
        $this->load->view('template/header-home', $a);
        $this->load->view('income');
        $this->load->view('template/footer-home');                
    }
}