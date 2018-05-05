<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Tipo_Adocao extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'ANIMAL_TIPO_ADOCAO';
    }
}