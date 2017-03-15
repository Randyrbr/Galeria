  <?php
  defined('BASEPATH') OR exit('No direct script acces allowed');

 class Web extends CI_Controller{

 Public function _construct()
 { 
 	parent::_construct();
 }

 	function index()
 	{
 		$this->load->view('inicio');

	 }
 
 } 