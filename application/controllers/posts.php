<?php
class Posts extends CI_Controller
{
    public function index()
    {
        // $this->load->view('website/userlogin');
        $this->form_validation->set_rules('username', 'User Name', 'required|alpha_numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[10]');
        $this->form_validation->set_error_delimiters('<div class="text-danger"></div>');

        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $userpass = $this->input->post('password');
            if($username && $userpass)
                {
                    $this->load->model('PostModel', 'lm');
                    $id = $this->lm->validateUser($username, $userpass);
                    $get_data = $this->db->where(['userName'=>$username, 'password'=>$userpass])
                                    ->get('users');
                    $role = $get_data->row()->user_role;
                    if(($id) && ($role = 'user'))
                    {
                        $this->session->set_userdata('id', $id);
                        $this->session->set_userdata('username', $username);
                        $this->load->view('website/user_dashboard');
                        return $id;
                        return $username;
                        return $role;
                        // redirect('website/home.php');
                    }
        }
    }
    else
        {
            $this->load->view('website/userlogin');
        }
}
    public function logout()
    {
        $this->session->unset_userdata('id');
        return redirect('userlogin');
    }
    public function action()
    {
        // echo "working good";
        //checking the submit button
        if($this->input->post('submit'))
        {
            $posts = array(
                'title' => $this->input->post('title'),
                'body' => $this->input->post('title_body'),
                'author' => $this->input->post('title_author')
            );
            // $title = $this->input->post('title');
            // $title_body = $this->input->post('title_body');
            // $title_author = $this->input->post('title_author');

            $this->PostModel->saveRecord($posts);
        }
    }
}
?>