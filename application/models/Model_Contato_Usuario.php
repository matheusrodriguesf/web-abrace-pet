<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Contato_Usuario extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'CONTATO';
    }
}