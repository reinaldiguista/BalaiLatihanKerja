<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */ 

	public function __construct(){
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
       
        $this->load->library('email');
        $this->load->helper('url');
        $this->load->database();
        $this->load->model('pendaftar');
		$this->load->library('email');
    }
	
	public function index()
	{
		$this->load->view('header');
        $this->load->view('signup');
        $this->load->view('footer');
	}

	public function signup_form(){
        
		// $this->form_validation->set_rules('nik','NIK', 'numeric|required');
		$this->form_validation->set_rules('nama','nama', 'required');
		// $this->form_validation->set_rules('no_hp','no. hp', 'required|numeric');
		// $this->form_validation->set_rules('jenis_kelamin','jenis kelamin', 'required');

        // $this->form_validation->set_rules('alamat','alamat', 'trim|required');
        $this->form_validation->set_rules('email','email', 'trim|required|valid_email|is_unique[tb_pendaftar.email]');//ganti nama tabel
        // $this->form_validation->set_rules('txt_username','Username', 'trim|required');
        $this->form_validation->set_rules('password','password', 'required');
        $this->form_validation->set_rules('konfirmasi_password', 'konfirmasu password', 'trim|required|matches[password]');
        
        if($this->form_validation->run() == false){
            $this->load->view('header');
            $this->load->view('signup');
            $this->load->view('footer');
            
        }else{
            //call db
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password'))
            );
            
            
            if($this->pendaftar->insertPendaftar($data)){
                
                //send confirm mail
                if($this->pendaftar->sendEmail($this->input->post('email'))){
                    //redirect('Login_Controller/index');
                    //$msg = "Successfully registered with the sysytem.Conformation link has been sent to: ".$this->input->post('txt_email');
                    $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Successfully registered. Please confirm the mail that has been sent to your email. </div>');

                    $this->load->view('header');
                    $this->load->view('signup');
                    $this->load->view('footer');
                }else{
                    
                    //$error = "Error, Cannot insert new user details!";
                    $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Failed!! Please try again.</div>');
                    $this->load->view('header');
                    $this->load->view('signup');
                    $this->load->view('footer');
                }
                
                
            }
        }
        
	}
	
	function confirmEmail($hashcode){
        if($this->pendaftar->verifyEmail($hashcode)){
            $this->session->set_flashdata('verify', '<div class="alert alert-success text-center">Email address is confirmed. Please login to the system</div>');
            redirect('Welcome');
        }else{
            $this->session->set_flashdata('verify', '<div class="alert alert-danger text-center">Email address is not confirmed. Please try to re-register.</div>');
            redirect('Welcome');
        }
    }

	
}
