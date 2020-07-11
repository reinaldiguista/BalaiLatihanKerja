<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller{

    public function __construct() 
  {
	parent::__construct();
	$this->load->model(array('m_login'));
  	$this->load->database();
  }
  public function index()
  {
      $this->load->view('user/header');
      $this->load->view('user/index');
      $this->load->view('user/footer');
  } 
       
}