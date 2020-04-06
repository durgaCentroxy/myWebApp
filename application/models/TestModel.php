<?php
class TestModel extends CI_Model
{
    public function demo()
    {
        // echo "i am TestModel";
        $this->load->view('website/home');
    }
    // public function demo1()
    // {
    //     echo "i am TestModel having function demo1";
    //     $this->load->view('demo'); 
    // }
    
}
?>