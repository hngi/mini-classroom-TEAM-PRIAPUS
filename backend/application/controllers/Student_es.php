<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student_es extends CI_Controller {

    
    function __construct()
    
    {
          parent::__construct();
            $this->load->helper('form');
            $this->load->model('model_insertvalues');
            $this->load->model('model_getvalues');
            $this->load->model('model_deletevalues');
          if(!isset($_SESSION['email'])){
            $this->session->set_flashdata("error"," <div class='alert alert-danger '><h6>You have to login to view this page</h6></div> ");
             $data['user'] = $this->model_getvalues->getDetails('student','name',$this->session->userdata('name'));
           redirect('index.php/student/login');
  }
    }

 public function index()
    {
        // $date = date('Y-m-d');
        $this->load->view('student/header');
        $this->load->view('student/nav');
        $this->load->view('student/aside');

        $data['user'] = $this->model_getvalues->getDetails('student','name',$this->session->userdata('name'));
        $this->load->view('student/dashboard',$data);
        $this->load->view('student/footer');
    }
// public function update_student_id1($id,$data){
// $this->db->where('cou_id', $id);
// $this->db->update('students', $data);
// }

public function add_class(){
 $data['class'] = $this->model_getvalues->getTableRows('class','id!=','0','id');
 $data['user'] = $this->model_getvalues->getDetails('student','email', $this->session->userdata('email'));


  if (isset($_POST['save'])) {    
         $user = $this->session->userdata('email');

         $this->form_validation->set_rules('class[]', 'Class Name', 'required');
         if($this->form_validation->run() == TRUE) {
             $data = array(
                    'class_id'=>implode(",",$this->input->post('class')),

                );
                
                  $co = $this->model_updatevalues->updateVal('student',$data,'email', $user);
                  if ($co == TRUE) {
                      $this->session->set_flashdata("success",' 
                            <div class="alert alert-success"> 
                                <strong>Well done! Class selected Successfully.</strong>
                           </div> '
                           );
                       
                 }else{

                    $this->session->set_flashdata("error",'<div class="alert alert-danger">
                                <strong>Oh snap! "'.validation_errors().'"</strong>
                            </div>');
                            
                   }    
      }
      }

    $this->load->view('student/addclass', $data);
}
public function item_list(){

  $this->load->view('student/header');
  $this->load->view('student/nav');
  $this->load->view('student/aside');

  $data['user'] = $this->model_getvalues->getDetails('student','id',$this->session->userdata('id'));
  $class = explode(',',$data['user']['class_id']);
  $student = array();
  foreach($class as $classs){
       $this->db->where('class_id =',trim($classs));
          $query = $this->db->get('item'); 

          $student[] = $query->result();
    // $data['student'] = $this->model_getvalues->getTableRows('item', 'class_id',$classs, 'id','desc');
  }

//   print_r($student[0]); die();
  $data['stu'] = $student;
//   $data['st'] = $data['stu'];

  $this->load->view('student/item', $data);
  $this->load->view('student/footer');
}  
  
  public function limit_word($input,$num)
  {
      if (str_word_count($input,0) > $num) {
        
        $wordkey = str_word_count($input , 1);
        $wordindex = array_flip(str_word_count($input , 2));

        return substr($input , 0,$wordindex[$wordkey[$num]]);
      }

      else{
        return $input;
      }

  }

}
