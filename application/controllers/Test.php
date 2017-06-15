<?php 
   class Test extends CI_Controller { 
	
      public function index() { 
         $this->load->view('Home'); 
         $this->load->helper('url');

      } 
   } 
?>
