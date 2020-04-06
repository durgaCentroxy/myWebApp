<?php
class PostModel extends CI_Model
{
    public function login()
    {
        $this->load->view('website/userlogin');
    }
    public function validateUser($username, $password)
    {
        // $this->load->library('database');
        $get_data = $this->db->where(['userName'=>$username, 'password'=>$password])
                             ->get('users');
        if($get_data->num_rows())
        {
            return $get_data->row()->id;
            // echo "data is there";
        }
        else
        {
            // echo "data is not there";
            return false;
        }
    }
    public function demo()
    {
        $this->load->view('website/home');
    }
    
    public function saveRecord($posts)
    {
        $this->db->insert('posts', $posts);
        echo "records inserted successfully";
        
    }
}
?>