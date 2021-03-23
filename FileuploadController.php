<?php

class FileuploadController extends CI_Controller
{
       function __construct()
       {
       	parent::__construct();
       	$this->load->model('Regmodel');
       }
       function index()
       {
       	$this->load->view('fupload');
       }
       function do_upload()
       {
       	$config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file'))
          {
           	$data['res']=$this->upload->display_errors();

           }

          else

           {

                   $data['res']=$this->upload->data();
                 $this->Regmodel->uploaddb($data['res']['file_name']);

                 $data['res1']= $this->Regmodel->showfile();

           }
           $this->load->view('fupload',$data);		 	

       }
}


?>