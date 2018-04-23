<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Model_Pet_Lar_Temporario extends MY_Model {
  
    function __construct() {
        parent:: __construct();
        $this->table = 'ANIMAL';
    }
}