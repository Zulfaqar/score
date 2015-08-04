<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
   
    public function __construct()
        {
                parent::__construct();
                $this->load->model('m_student');
        }

	public function index($page = 'Student'){
         $this->load->helper('form');
        
        $data['student']= $this->m_student->get_student();
        $data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('templates/v_header');
        $this->load->view('templates/v_student');
        }

        
        
        public function key_in()
        {
            $this->load->helper('url');
            $this->load->helper('form');
            $this->load->library('form_validation');
           

            $this->form_validation->set_rules('id', 'ID', 'required');
            $this->form_validation->set_rules('f_name', 'First Name', 'required');
            $this->form_validation->set_rules('l_name', 'Last Name', 'required');
            $this->form_validation->set_rules('Programme', 'Programme', 'required');
            $this->form_validation->set_rules('course', 'Course', 'required');
            
            $this->form_validation->set_rules('test1', 'Test 1');
            $this->form_validation->set_rules('test2', 'Test 2');
            $this->form_validation->set_rules('quiz1', 'Quiz 1');
            $this->form_validation->set_rules('quiz2', 'Quiz 2');
            $this->form_validation->set_rules('assignment1', 'Assignment 1');
            $this->form_validation->set_rules('project', 'Project');

           

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('templates/v_student');
            }
            else
            {
                $this->m_student->set_student();
                redirect('student/get_student');
            }
            
        }
        
        public function get_student(){
            
            $this->load->model('m_student');
            
            $data['student']= $this->m_student->get_student();
            
            
            $this->load->view('templates/v_header'); 
            $this->load->view('templates/v_student_performance', $data);
            
            
        }
        


     
}