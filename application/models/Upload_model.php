<?php
class Upload_model extends CI_Model{
 
    function upload_image($image){
        $data = array(
            'file_name' => $image, 
            );
        $result=$this->db->insert('imagem',$data);
        return $result;
    }
}