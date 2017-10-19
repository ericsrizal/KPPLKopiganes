<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct(){
	    parent::__construct();
	    $this->load->model('M_adminmenu');
        $this->load->model('M_login');
        $this->load->library('form_validation');
    }

	public function index()
	{
		$data = $this->M_adminmenu->getMenu();
		$this->load->view('home',array('data' => $data));
	}
    function userloginview() {
		$this->load->view('userlogin');
	}

	public function userlogin()  
    {
       
        $username = $this->input->post('user');
        $password = $this->input->post('pass');
        $coba = sha1($password);
        $isLogin = $this->M_login->userlogin_authen($username, $coba);
        if ($isLogin == TRUE)
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$username));
            redirect('Menu/index'); }
        
        else
        {
           echo '<script language="javascript">';
            echo 'alert("Login Gagal");';
            echo 'window.history.go(-1);';
            echo '</script>';
        }
        
    }  
    public function userlogout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect('Menu/index');}



	function validateuser(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[12]|is_unique[user.username]');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		
		if($this->form_validation->run() != false){ 
            $this->registeruser();
		}else{
			$data['message'] = 'Gagal Validate';
			$this->load->view('userlogin', $data);

		}
	}
	
	function registeruser(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
                $coba = sha1($password);
        $email = $this->input->post('email');

		$where = array(
					'username' => $username,
					'password' => $coba,
					'email'	   => $email,
					);
		$this->M_login->insert_user("user",$where);		
		$data['message'] = 'Validate berhasil';
		$this->load->view('userlogin', $data);


	}
}