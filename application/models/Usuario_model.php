<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario_model extends MY_Model {

    function __construct() {
        parent:: __construct();
        $this->table = 'RESPONSAVEL_ANIMAL';
    }
}
