  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_menu extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_adminmenu');

       	if(!$this->session->userdata('user'))
        {
        	redirect('Login/index');}
    }

	function load()
	{
		$data = $this->M_adminmenu->getMenu();
		$this->load->view('adminmenu', array('data' => $data));
	}
	
	function add_data()
	{
		$this->load->view('form_add');
	}
        
    function do_insert() {
       $data = array(
		'nama' => $this->input->post('nama'),
		'harga' => $this->input->post('harga'),
		'jenis' => $this->input->post('jenis'),
		);
		$this->M_adminmenu->InsertData('menu',$data);
		redirect('Admin_menu/load');}
        
 //        public function dowda_insert()
	// {
	// 	$config['upload_path']          = './images/';
 //        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        
 //        $this->load->library('upload', $config);
        
	// 	if(isset($_FILES['images']) && $_FILES['images']['size'] > 0){
 //        	if (!$this->upload->do_upload('images')){
 //                $error = array('error' => $this->upload->display_errors());
 //                print_r($error);
 //            }
 //        	else{
 //                $data = $this->upload->data();
	// 			$nama = $_POST['nama'];
	// 			$harga = $_POST['harga'];
	// 	        $jenis = $_POST['jenis'];
	// 	        $gambar = $data['file_name'];
	// 			$data_insert = array(
	// 				'nama' => $nama,
	// 				'harga' => $harga,
	// 	            'jenis' => $jenis,
	// 	            'gambar' => $gambar
	// 	);
	// 			$res = $this->M_adminmenu->InsertData('menu',$data_insert);
	// 			if($res>=1){
	// 				redirect('Admin_menu/load');
	// 			}
	// 		}
	// 	}
 //        else{
	// 			$nama = $_POST['nama'];
	// 			$harga = $_POST['harga'];
	// 	        $jenis = $_POST['jenis'];
				
	// 			$data_insert 	= array(
	// 				'nama' => $nama,
	// 				'harga' => $harga,
	// 	            'jenis' => $jenis,
	// 			);
	// 			$res = $this->M_adminmenu->InsertData('menu',$data_insert);
	// 			if($res>=1){
	// 				redirect('Admin_menu/load');
	// 			}
 //        }
 //    }
	public function do_delete($kode){
		$where = array('kode' => $kode);
		$res = $this->M_adminmenu->DeleteData('menu',$where);
		if($res>=1){
			redirect('Admin_menu/load');}}
	public function edit_data($kode){
		$menu = $this->M_adminmenu->getMenu("where kode = '$kode'");
		$data = array(
			"kode" => $menu[0]['kode'],
			"nama" => $menu[0]['nama'],
			"harga" => $menu[0]['harga'],
            "jenis" => $menu[0]['jenis'],
		);
		$this->load->view('form_edit',$data);
	}
	public function do_update(){
		$kode 		= $_POST['kode'];
		$nama		= $_POST['nama'];
		$harga 		= $_POST['harga'];
		$jenis 	    = $_POST['jenis'];
				
		$data_insert 	= array(			
		'nama' 		=> $nama,
		'harga' 		=> $harga,
		'jenis'	=> $jenis,
		);
		$where = array('kode' => $kode);
		$res = $this->M_adminmenu->UpdateData('menu',$data_insert,$where);
		if($res>=1){
			redirect('Admin_menu/load');}}

}