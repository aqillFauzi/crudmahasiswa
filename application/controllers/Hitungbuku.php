<?php 
defined('BASEPATH') or exit('No direct script allowed');

class Hitungbuku extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->library('perpustakaan');

    }
    function index(){
        $this->perpustakaan->proses();
    }
}
?>