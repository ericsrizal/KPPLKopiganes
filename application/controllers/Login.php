<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_login');
    }
    
    function index()
        {
            $this->load->view('login');
	}

public function login()  
    {
       
        $username = $this->input->post('user');
        $password = $this->input->post('pass');
        $coba = sha1($password);
        $isLogin = $this->M_login->login_authen($username, $coba);
        if ($isLogin == TRUE)
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$username));
            redirect('Admin_menu/load'); }
        
        else
        {
           echo '<script language="javascript">';
            echo 'alert("Login Gagal");';
            echo 'window.history.go(-1);';
            echo '</script>';
        }
        
    }  

public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect('Login/index');}

}
