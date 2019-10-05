<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET , OPTIONS");
header("Access-Control-Allow-Header: Origin , Content-Type");


    
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

    
 		function __construct()
 		{
 	    parent::__construct();
            $this->load->helper('form');
         }
         
	
    public function index()
    {
        unset($_SESSION['role']);
        unset($_SESSION['email']);
        if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');
            if ($this->form_validation->run() == TRUE) {
                
                $data = array( 'email' => $_POST['email']);

                $user = $this->model_getvalues->getDetails2($_POST['role'], $data);

                if ($user) {
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['role'] = $_POST['role'];
                    $arr =  array(
                    'reset_status' => 1,
                    );
                    
                    $this->model_updatevalues->updateVal($_POST['role'], $arr, 'email', $_POST['email']);
                    $data['role'] = $_POST['role'];
                    redirect("index.php/forgot_password/reset");

                } else {
                    $this->session->set_flashdata("error"," <div class='alert alert-danger'><h6>User does not exist in out database</h6></div>");
                }

            } else {
                $this->session->set_flashdata("error"," <div class='alert alert-danger'><h6>Invalid email address</h6></div>");
            }
        }
        $this->load->view('home/forgotpswrd');
    }


    public function reset()
    {
         if (isset($_POST['submit'])) {
            if (isset($_SESSION['email']) && isset($_SESSION['role'])) {
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('cpassword', 'Password', 'required');
                if ($this->form_validation->run() == TRUE || $_POST['password'] != $_POST['cpassword']) {
                    
                    $data = array( 'email' => $_SESSION['email'], 'reset_status' => 1);

                    $user = $this->model_getvalues->getDetails2($_SESSION['role'], $data);

                    if ($user) {

                        $arr =  array(
                        'password' => md5($_POST['password']),
                        'reset_status' => 0
                        );
                        
                        $this->model_updatevalues->updateVal($_SESSION['role'], $arr, 'email', $_SESSION['email']);
                        redirect("index.php/".$_SESSION['role']."/login");


                    } else {
                        $this->session->set_flashdata("error"," <div class='alert alert-danger'><h6>Initiate password reset first</h6></div>");
                        redirect("index.php/forgot_password");
                    }

                } else {
                    $this->session->set_flashdata("error"," <div class='alert alert-danger'><h6>Invalid or mismatched password</h6></div>");
                }
            } else {
                $this->session->set_flashdata("error"," <div class='alert alert-danger'><h6>Initiate password reset first</h6></div>");
                redirect("index.php/forgot_password");
            }
        }
        $this->load->view('home/resetpassword');
    }
  
}
