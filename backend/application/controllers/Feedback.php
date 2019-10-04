<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET , OPTIONS");
header("Access-Control-Allow-Header: Origin , Content-Type");


    
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

    
 		function __construct()
 		{
 	    parent::__construct();
            $this->load->helper('form');
         }
         
	
    public function index()
    {
        $this->load->view('home/feedback');
    }
    
     public function post_feedback()
	{
       // $message = FALSE;
        
      if (isset($_POST['submit'])) {	
      
        $data = array(
            'name'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'message'=>$this->input->post('message'),
        );
        
            $co = $this->model_insertvalues->addItem($data, 'feedback');
            if ($co == TRUE) {
                $this->session->set_flashdata("success",' 
                    <div class="alert alert-success"> 
                        <strong>Feedback Successfully submitted</strong>
                    </div> '
                    );
                    
            }else{

            $this->session->set_flashdata("error",'<div class="alert alert-danger">
                        <strong>Submission error!</strong>
                    </div>');
                    
            }      
      }        
    }
  
}
