<?php
class Test extends CI_Controller
{
    public function index()
    {
        $this->load->model('TestModel');
        $this->TestModel->demo();
        
        // $this->TestModel->demo1();
    }
    // public function demo()
    // {
    //     $this->load->model('TestModel');
        
    // }
}
?>