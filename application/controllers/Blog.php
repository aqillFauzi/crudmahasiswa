<?php 
defined('BASEPATH') or exit ('No direct script allowed');
class Blog extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    function index(){
        $this->load->view("hello_Codeigniter");
    }
}


?>