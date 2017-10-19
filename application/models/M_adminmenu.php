<?php
/**
*
*/
class M_adminmenu extends CI_Model{

	public function getMenu($where=""){
		$data = $this->db->query('select * from menu '.$where);
		return $data->result_array();}
        function getId($where){
 		$this->db->where('nama', $where);
 		$data = $this->db->get('menu');
 		return $data->result_array();
 	}
	public function getCurrentRow(){
        return $this->db->get('menu')->num_rows();
    }
	public function InsertData($tabelName,$data){
		$res = $this->db->insert($tabelName,$data);
		return $res;
	}
	public function UpdateData($tabelName,$data,$where){
		$res = $this->db->update($tabelName,$data,$where);
		return $res;
	}
	public function DeleteData($tabelName,$where){
		$res = $this->db->delete($tabelName,$where);
		return $res;
	}
}