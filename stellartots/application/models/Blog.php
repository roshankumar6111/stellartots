<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function get_data(){
        $query = $this->db->limit(2)->order_by('id','desc')->get('blog');
        return $query->result_array();
        
    }
    
}
?>