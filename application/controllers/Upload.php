<?php

class Upload extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('upload'); //Loading url helper    
    }   




  public function index(){
     
     $this->load->view('animal/main_view',array('error'=>''));
}

public function upload(){
    $config['upload_path']="./images/";
     $config['allowed_types']='jpg|jpeg|gif|png';
     $this->load->library($config);
    if(!$this->upload->do_upload()){
    $error=array('error'=>$this->upload->display_errors());
    $this->load->view('animal/main_view',$error);
}
else {
$file_data=$this->upload->data();
$data['img']='./images/'.$file_data['file_name'];
$this->load->view('sucess_msg',$data);

}
}
}