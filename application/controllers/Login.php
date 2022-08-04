<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function beranda()
{
    //perintah untuk load file view dengan nama 
    $this->load->view('beranda');
}
public function tkj()
{
    //perintah untuk load file view dengan nama 
    $this->load->view('tkj');
}
public function infopendaftaran()
{
    //perintah untuk load file view dengan nama 
    $this->load->view('infopendaftaran');
}
public function infosekretariat()
{
    //perintah untuk load file view dengan nama 
    $this->load->view('infosekretariat');
}
public function atp()
{
    //perintah untuk load file view dengan nama 
    $this->load->view('atp');
}
public function aphp()
{
    //perintah untuk load file view dengan nama 
    $this->load->view('aphp');
}
public function bank()
{
    //perintah untuk load file view dengan nama 
    $this->load->view('bank');
}
public function busana()
{
    //perintah untuk load file view dengan nama 
    $this->load->view('busana');
}



 public function __construct()
 {
  parent::__construct();
  if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
  $this->load->library('form_validation');
  $this->load->library('encrypt');
  $this->load->model('login_model');
 }

 function index()
 {
  $this->load->view('login');
 }

 function validation()
 {
  $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
  $this->form_validation->set_rules('user_password', 'Password', 'required');
  if($this->form_validation->run())
  {
   $result = $this->login_model->can_login($this->input->post('user_email'), $this->input->post('user_password'));
   if($result == '')
   {
    redirect('private_area');
   }
   else
   {
    $this->session->set_flashdata('message',$result);
    redirect('login');
   }
  }
  else
  {
   $this->index();
  }
 }

}

?>