<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authcontroller extends CI_Controller{
    
    public function __construct(){
        parent::__construct();

        $this->load->model('authmodel');
    }

    public function index(){
        if($this->session->has_userdata('isLoggedIn') == true){
            redirect('home');
        }
        $a['data'] = ['title' => 'Login'];
        $this->form_validation->set_rules('log_user', 'Username', 'required|trim');
        $this->form_validation->set_rules('log_pwd', 'Password', 'required|trim|min_length[5]');
        
        if($this->form_validation->run() === false){
            $this->load->view('template/header-login', $a);
            $this->load->view('login');
            $this->load->view('template/footer-login');            
        }else{
            $a = $this->input->post('log_user');
            $b = $this->input->post('log_pwd');
            
            $data = ['username' => $a, 'password' => $b];

            $c = $this->authmodel->authlogin($data);

            if($c !== false){
                $this->session->set_userdata($c);
                $this->session->set_userdata('isLoggedIn', true);
                redirect('home');
            }
        }
    }

    public function register(){
        if($this->session->has_userdata('isLoggedIn') == true){
            redirect('home');
        }       
        $a['data'] = ['title' => 'Register'];  

        $this->form_validation->set_rules('regname', 'Name', 'required|trim');
        $this->form_validation->set_rules('reguser', 'Username', 'required|trim');
        $this->form_validation->set_rules('regpwd', 'Password', 'required|trim|min_length[5]');

        if($this->form_validation->run() === false){
            $this->load->view('template/header-login', $a);
            $this->load->view('register');
            $this->load->view('template/footer-login');    
        }else{
            $a = $this->input->post('regname');
            $b = $this->input->post('reguser');
            $c = $this->input->post('regpwd');

            $data = ['name' => $a, 'username' => $b, 'password' => $c];

            $d = $this->authmodel->authregister($data);
            if($d === 1){
                $this->session->set_flashdata('regtrue', '<div class="alert alert-danger bg-danger text-white" role="alert"><strong>Oops! </strong> Username already taken</div>');
                               
                $this->load->view('template/header-login', $a);
                $this->load->view('register');
                $this->load->view('template/footer-login');  
            }elseif($d == true){
                $this->session->set_flashdata('regtrue', '<div class="alert alert-info bg-primary text-white" role="alert"><strong>Hooray! </strong> You successfully created an account</div>');

                $this->load->view('template/header-login', $a);
                $this->load->view('register');
                $this->load->view('template/footer-login');  

            }
        }
        
    }

    public function home(){
        if($this->session->has_userdata('isLoggedIn') !== true){
            redirect('');
        }
            $a['data'] = ['title' => 'Home'];
            $this->load->view('template/header-home', $a);
            $this->load->view('dashboard');
            $this->load->view('template/footer-home');    
    }

    public function addincome(){
        if($this->session->has_userdata('isLoggedIn') !== true){
            redirect('');
        }
        $cat_income = $this->authmodel->showIncCat($this->session->userdata('user_id'));

        $a['data'] = ['title' => 'Add Income'];
        $b['d'] = ['ic' => $cat_income];

        $this->form_validation->set_rules('date_income', 'Date', 'required|trim');
        $this->form_validation->set_rules('time_income', 'Time', 'required|trim');
        $this->form_validation->set_rules('amount_income', 'Amount', 'required|trim');
        $this->form_validation->set_rules('note_income', 'Note', 'required|trim');
        $this->form_validation->set_rules('category_income', 'Category', 'required|trim');

        if($this->form_validation->run() === false){
            $this->load->view('template/header-home', $a);
            $this->load->view('income', $b);
            $this->load->view('template/footer-home');                 
        }else{
            $di = $this->input->post('date_income');
            $ti = $this->input->post('time_income');            
            $ai = $this->input->post('amount_income');
            $ni = $this->input->post('note_income');            
            $ci = $this->input->post('category_income');     

            $data = ['user_id' => $this->session->userdata('user_id'), 'income_date' => $di, 'income_time' => $ti, 'income_amount' => $ai, 'income_note' => $ni, 'income_cat' => $ci];

            $mod = $this->authmodel->addIncomeData($data);

            if($mod !== false){

            }
        }
         
    }

    public function addexpense(){
        $a['data'] = ['title' => 'Add Expenses'];
        $this->load->view('template/header-home', $a);
        $this->load->view('expenses');
        $this->load->view('template/footer-home');      
    }

    public function records(){
        $a['data'] = ['title' => 'Records'];
        $this->load->view('template/header-home', $a);
        $this->load->view('records');
        $this->load->view('template/footer-home');           
    }

    public function stats_income(){
        $a['data'] = ['title' => 'Statistics - Income'];
        $this->load->view('template/header-home', $a);
        $this->load->view('income_stat');
        $this->load->view('template/footer-home');                
    }

    public function stats_expense(){
        $a['data'] = ['title' => 'Statistics - Income'];
        $this->load->view('template/header-home', $a);
        $this->load->view('expense_stat');
        $this->load->view('template/footer-home');                
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('');
    }
}