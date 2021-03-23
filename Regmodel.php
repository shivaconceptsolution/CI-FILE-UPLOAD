<?php


class Regmodel extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function reginsert($uid,$pass,$email,$mobile)
	{
           $x=$this->db->insert('reg',array("userid"=>$uid,"password"=>$pass,"email"=>$email,"mobile"=>$mobile));
           return $x;

	}

	function login($uid,$pass)
	{
		$res=$this->db->get_where('reg',array("email"=>$uid,"password"=>$pass));
		return $res->num_rows();
	}
    
    function uploaddb($imgname)
    {
       return $this->db->insert('tbl_upload',array("path"=>$imgname));
    }  

    function showfile()
    {
     return $this->db->get('tbl_upload')->result_array();
    }
}



?>