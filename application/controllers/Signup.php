<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {
public function __construct()
{
	parent::__construct();
	$this->load->model('Admin_model','admin');
	$this->load->helper('url');
	$this->load->library('email');
	$this->load->library('session');
}

public function login()
{
	//Admin Login Hear
  	if($this->input->post('email'))
	{	
		$check_email=array('email'=>$this->input->post('email'));
		$email_result=$this->admin->select_where('admin',$check_email);
		if($email_result)
		{
			$check_email_password=array('email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password')));
		
			$email_password_result=$this->admin->select_where('admin',$check_email_password);
			if($email_password_result)
			{

				
				$this->session->set_userdata(array(
				'id' => $email_password_result[0]->id,
				'email' => $email_password_result[0]->email,
				'name' => $email_password_result[0]->name,
				
				));
				$this->session->set_flashdata('message','Login Successfully Done');

				redirect(base_url('admin/dashboard'));
			}
			else
			{
				$this->session->set_flashdata('message','Invalid Password');
				$this->load->view('admin/profile/login');	
			}
		}
		else
		{
			$this->session->set_flashdata('message','Invalid Email'); 
			$this->load->view('admin/profile/login');	
		}
	}
	else{
		$this->load->view('admin/profile/login');	
	}
}


public function forget_password()
{
	$this->load->view('admin/profile/forgot_password');
}


public function forget()
{
   $email=array('email'=>$this->input->post('email'));
   $recieve=$this->admin->select_where('admin',$email);
   if($recieve)
   {
   			$Token = str_shuffle('123456789@abcdef');
			$Token = substr($Token,1,5);

			 $from_email = "admin@gmail.com"; 
    		 $to_email = $this->input->post('email'); 
			 $msg = 'Your New Password is   '. $Token;
			 mail($to_email,"W3",$msg);
	  		 $data=array('password'=>md5($Token));
	  		 $value=$this->admin->update_row('admin',$data,array('email'=>$to_email));
		   	  $this->session->set_flashdata('message','Password send in this mail Successfully'); 
			  redirect(base_url('signup/forget_password'));
	}
   else
   {
   		$this->session->set_flashdata('message','Invalid email'); 
		  redirect(base_url('signup/forget_password'));
   }
}


public function logout() 
{        
	//Admin Logout
	$this->session->unset_userdata('id');
	$this->session->unset_userdata('name');
	redirect(base_url('signup/login'));
}


// public function signup()
// {
// 	//Admin Signup Page Show
// 	$this->load->view('admin/profile/signup');
// }

// public function admin_insert()
// {
// 	//Admin Login Hear
// 	$date=date('y-m-d');
//   	if($this->input->post('company_name'))
// 	{	
// 		$check_company=array('company'=>$this->input->post('company_name'));
// 		$company_result=$this->admin->select_where('admin',$check_company);
// 		if(empty($company_result))
// 		{
// 			$check_email=array('email'=>$this->input->post('email'));
// 			$email_result=$this->admin->select_where('admin',$check_email);
// 			if(empty($email_result))
// 			{
// 					$config['upload_path'] = 'assets/profile';
// 					$config['allowed_types'] = 'jpg|jpeg|png|gif';
// 					$config['file_name'] = $_FILES['profile_pic']['name'];
// 					$this->load->library('upload',$config);
// 					$this->upload->initialize($config);
// 					$this->upload->do_upload('profile_pic');
// 					$uploadData = $this->upload->data();
// 					$picture =$uploadData['file_name'];

// 					$admin_data=array('name'=>$this->input->post('admin_name'),
// 									 'company'=>$this->input->post('company_name'),
// 									 'email'=>$this->input->post('email'),
// 									 'password'=>md5($this->input->post('password')),
// 									 'mobile'=>$this->input->post('mobile'),
// 									 'address'=>$this->input->post('address'),
// 									 'profile_pic'=>$picture,
// 									 'date'=>$date);
// 					$admin_result=$this->admin->insert('admin',$admin_data);
// 					if($admin_result)
// 					{
// 						$this->session->set_flashdata('message','Admin Add Successfully Done');
// 						redirect(base_url('admin'));
// 					}
// 			}

// 			else
// 			{
// 				$this->session->set_flashdata('message','Email Allready Exit'); 
// 				$this->load->view('admin/profile/signup');	
// 			}
// 		}
// 		else
// 		{
// 			$this->session->set_flashdata('message','Company Name Allready Exit'); 
// 			$this->load->view('admin/profile/signup');	
// 		}
// 	}
// 	else
// 	{
// 		$this->load->view('admin/profile/signup');	
// 	}
// }










}
?>