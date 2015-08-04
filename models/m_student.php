<?php
class M_student extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
         public function set_student()
        {
            $this->load->helper('url');
            
            
            
            $sem_data = array(
                'semester_id'=> date("Y-m-d H:i:s") ,
                'student_id' => $this->input->post('id'),
                'test1' => $this->input->post('test1'),
                'test2' => $this->input->post('test2'),
                'quiz1' => $this->input->post('quiz1'),
                'quiz2' => $this->input->post('quiz2'),
                'Assignment1' => $this->input->post('assignment1'),
                'Project1' => $this->input->post('project'),
            );
            
            $this->db->insert('semester_data',$sem_data);

            
            $data = array(
            'student_id' => $this->input->post('id'),
            'f_name' => $this->input->post('f_name'),
            'l_name' => $this->input->post('l_name'),
            'programme_name' => $this->input->post('Programme'),
            'course' => $this->input->post('course'),
            'current_semester' => date("Y-m-d H:i:s") ,
                
        );

                $this->db->insert('student_data', $data);
          
          
         
        
        }
        
        public function get_student()
        {   
            $sql ="select 
                    test1,
                    test2,
                    quiz1,
                    quiz2,
                    Assignment1,
                    Project1
                    from semester_data
                    where student_id = 17352";
            
            
 
        $result = $this->db->query($sql)->row();
        return $result; 
            
        }
       


}