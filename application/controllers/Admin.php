<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

public function __construct()
{
	parent:: __construct();
	$this->load->model('Admin_model','admin');
	if (!$this->session->userdata('id'))
		 redirect(base_url().'signup/login');
	$this->load->helper('url');
	$this->load->library('email');
	$this->load->library('session');
}


// https://github.com/shahddeepak/testdeep.git

public function index()
{
	// Admin login page show]
	$this->load->view('admin/profile/login');
}


public function dashboard()
{
	//Admin Dashboard
	// $id=$this->session->userdata('id');
	// $data['employee']=$this->admin->select_count('employee',$id);
	// $data['employee']=$this->admin->select_count('employee');
	// $data['deposit']=$this->admin->count_deposit_amt('employee');
	// $data['previous_amt']=$this->admin->count_previous_amt('employee');
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/dashboard');
	$this->load->view('admin/include/footer');
}


public function profile()
{
   //Admin Profile Page Show
	$id=$this->session->userdata('id');
	$admin['profile']=$this->admin->select_where('admin',array('id'=>$id));
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/profile/profile',$admin);
	$this->load->view('admin/include/footer');
}

public function profile_update($id)
{
	//Admin Profile Update
	if($this->input->post('admin_name'))
	{
		$data=array('name'=>$this->input->post('admin_name'),
					'mobile'=>$this->input->post('mobile'),
					'address'=>$this->input->post('address'));
		$profile_update=$this->admin->update_row('admin',$data,array('id'=>$id));

		if($profile_update)
		{
			$this->session->set_flashdata('message','Profile Update Successfully Done');
			redirect(base_url('admin/profile'));
		}
	}
	else
	{
		$this->session->set_flashdata('message','Insert All Field');
		redirect(base_url('admin/profile'));
	}
}


public function password()
{
   //Admin Change Password Page Show
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/profile/change_password');
	$this->load->view('admin/include/footer');
}



public function password_update()
{
   //Admin Password Update
   $id=$this->session->userdata('id');
   $chack_password=array('id'=>$id,
						 'password'=>md5($this->input->post('old_password')));

   $password_result=$this->admin->select_where('admin',$chack_password);

   if($password_result)
   {
	   $password_update=array('password'=>md5($this->input->post('current_password')));
	   $update_password_result=$this->admin->update_row('admin',$password_update,array('id'=>$id));
	   	  $this->session->set_flashdata('message','Password Change successfully');
		  redirect(base_url('admin/password'));
   }
   else
   {
   		$this->session->set_flashdata('message','Old Password Not Match');
		  redirect(base_url('admin/password'));
   }
}


public function department()
{
   //Department Add Page Show

	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/department');
	$this->load->view('admin/include/footer');
}


public function department_insert()
{
	//Department Insert Here
  	if($this->input->post('department_name'))
	{
		$department_data=array('name'=>$this->input->post('department_name'));
		$department_result=$this->admin->insert('department',$department_data);
		if($department_result)
		{
			$this->session->set_flashdata('message','Department Add Successfully Done');
			redirect(base_url('admin/department_list'));
		}
	}
	else
	{
		 redirect(base_url('admin/department'));
	}
}


public function department_list()
{
   //Department List Show
   $departments['departments']=$this->admin->select_desc('department','id');
   $this->load->view('admin/include/header');
   	$this->load->view('admin/include/sidebar');
   $this->load->view('admin/department_list',$departments);
   $this->load->view('admin/include/footer');
}


public function department_edit($id)
{
   //Employee Edit Page Show

	$department['department_object']=$this->admin->select_where('department',array('id'=>$id));
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/department_edit',$department);
	$this->load->view('admin/include/footer');
}


public function department_update($id)
{
   //Employee Update
	if($this->input->post('department_name'))
	{

		$department_data=array('name'=>$this->input->post('department_name'));
   		$department_result=$this->admin->update_row('department',$department_data,array('id'=>$id));
	   if($department_result)
	   {
	   	$this->session->set_flashdata('message','Department Update Successfully');
		  redirect(base_url('admin/department_list'));
	   }
	}
	else
	{
		  redirect(base_url('admin/department_list'));

	}
}


public function department_delete($id)
{
   //Employee  Delete
   $department_result=$this->admin->delete('department',array('id'=>$id));
   if($department_result)
   {
   	$this->session->set_flashdata('message','Department Delete Successfully');
		redirect(base_url('admin/department_list'));
   }
}




public function employee()
{
   //Employee Add Page Show
	$departments['departments']=$this->admin->select_all('department');
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/employee',$departments);
	$this->load->view('admin/include/footer');
}


public function employee_insert()
{
	//Employee Insert Here
	$date=date('y-m-d');
  	if($this->input->post('email'))
	{
		$check_email=array('email'=>$this->input->post('email'));
		$email_result=$this->admin->select_where('employee',$check_email);
		if(empty($email_result))
		{
			$employee_data=array('name'=>$this->input->post('employee_name'),
						'department_id'=>$this->input->post('department_id'),
						'email'=>$this->input->post('email'),
						'password'=>md5($this->input->post('password')),
						'mobile'=>$this->input->post('mobile'),
						'address'=>$this->input->post('address'),
						'added_on'=>$date);
			$employee_result=$this->admin->insert('employee',$employee_data);
			if($employee_result)
			{
				$this->session->set_flashdata('message','Employee Add Successfully Done');
				redirect(base_url('admin/employee_list'));
			}
		}

		else
		{
			$this->session->set_flashdata('message','Email Allready Exit');
			redirect(base_url('admin/employee'));
		}
	}
	else
	{
		 redirect(base_url('admin/employee'));
	}
}

public function employee_list()
{
   //Employee List Show
   $employees['employees']=$this->admin->select_desc('employee','id');
   $this->load->view('admin/include/header');
   	$this->load->view('admin/include/sidebar');
   $this->load->view('admin/employee_list',$employees);
   $this->load->view('admin/include/footer');
}

public function employee_status($id)
{
	$data['data']=$this->admin->select_where('employee',array('id'=>$id));
			$status =  $data['data'][0]->status;
			if($status == 1){
					$newStatus = '0';
			}else {
					$newStatus = '1';
			}
			$data=array('status' => $newStatus);
			$result = $this->admin->update_row('employee',$data, array('id' => $id));
			redirect('admin/employee_list');
}


public function employee_edit($id)
{
   //Employee Edit Page Show
	$employee['departments']=$this->admin->select_all('department');
	$employee['employee_object']=$this->admin->select_where('employee',array('id'=>$id));
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/employee_edit',$employee);
	$this->load->view('admin/include/footer');
}

public function employee_view($id)
{
   //Employee view Page Show
	$employee['employee_object']=$this->admin->select_where('employee',array('id'=>$id));
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/employee_view',$employee);
	$this->load->view('admin/include/footer');
}

public function employee_update($id)
{
   //Employee Update
   if($this->input->post('email'))
   {
	  $check_email=array('email'=>$this->input->post('email'));
	  $email_result=$this->admin->select_where('employee',$check_email);
	  if(empty($email_result))
	  {
		 $employee_data=array('name'=>$this->input->post('employee_name'),
					'department_id'=>$this->input->post('department_id'),
					'email'=>$this->input->post('email'),
					'mobile'=>$this->input->post('mobile'),
					'address'=>$this->input->post('address'));
   		 $employee_result=$this->admin->update_row('employee',$employee_data,array('id'=>$id));
	    if($employee_result)
	    {
	   	  $this->session->set_flashdata('message','Employee Update Successfully');
		  redirect(base_url('admin/employee_list'));
	    }
	  }
	  else
	  {
			$this->session->set_flashdata('message','Email Allready Exit');
			redirect(base_url('admin/employee_list'));
	  }
	}
	else
	{
		  redirect(base_url('admin/employee_list'));

	}
}


public function employee_delete($id)
{
   //Employee  Delete
   $employee_result=$this->admin->delete('employee',array('id'=>$id));
   if($employee_result)
   {
   	$this->session->set_flashdata('message','Employee Delete Successfully');
		redirect(base_url('admin/employee_list'));
   }
}


public function category()
{
   //Category Add Page Show

	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/category');
	$this->load->view('admin/include/footer');
}


public function category_insert()
{
	//Category Insert Here
  	if($this->input->post('category_name'))
	{
		$category_data=array('name'=>$this->input->post('category_name'));
		$category_result=$this->admin->insert('category',$category_data);
		if($category_result)
		{
			$this->session->set_flashdata('message','Category Add Successfully Done');
			redirect(base_url('admin/category_list'));
		}
	}
	else
	{
		 redirect(base_url('admin/category'));
	}
}


public function category_list()
{
   //Category List Show
   $categorys['categorys']=$this->admin->select_desc('category','id');
   $this->load->view('admin/include/header');
   	$this->load->view('admin/include/sidebar');
   $this->load->view('admin/category_list',$categorys);
   $this->load->view('admin/include/footer');
}


public function category_edit($id)
{
   //Category Edit Page Show

	$category['category_object']=$this->admin->select_where('category',array('id'=>$id));
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/category_edit',$category);
	$this->load->view('admin/include/footer');
}


public function category_update($id)
{
   //Category Update
	if($this->input->post('category_name'))
	{

		$category_data=array('name'=>$this->input->post('category_name'));
   		$category_result=$this->admin->update_row('category',$category_data,array('id'=>$id));
	   if($category_result)
	   {
	   	$this->session->set_flashdata('message','Category Update Successfully');
		  redirect(base_url('admin/category_list'));
	   }
	}
	else
	{
		  redirect(base_url('admin/category_list'));

	}
}


public function category_delete($id)
{
   //Category  Delete
   $category_result=$this->admin->delete('category',array('id'=>$id));
   if($category_result)
   {
   	$this->session->set_flashdata('message','Category Delete Successfully');
		redirect(base_url('admin/category_list'));
   }
}


public function purchase_product()
{
   //Purchase Product Add Page Show
	$categorys['categorys']=$this->admin->select_all('category');
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/purchase_product',$categorys);
	$this->load->view('admin/include/footer');
}


public function purchase_product_insert()
{
	//Purchase Product Insert Here
  	if($this->input->post('product_name'))
	{
		$quantity=$this->input->post('quantity');
		$price=$this->input->post('price');
		$product_data=array('name'=>$this->input->post('product_name'),
							'category_id'=>$this->input->post('category_id'),
							'price'=>$this->input->post('price'),
							'quantity'=>$this->input->post('quantity'),
							'unit'=>$this->input->post('unit'),
							'total_qty_price'=>$quantity*$price);
		$product_result=$this->admin->insert('purchase_product',$product_data);
		if($product_result)
		{
			$this->session->set_flashdata('message','Product Add Successfully Done');
			redirect(base_url('admin/product_list'));
		}
	}
	else
	{
		 redirect(base_url('admin/category'));
	}
}


public function purchase_product_list()
{
   //Product List Show
   $products['products']=$this->admin->select_desc('product','id');
   $this->load->view('admin/include/header');
   	$this->load->view('admin/include/sidebar');
   $this->load->view('admin/product_list',$products);
   $this->load->view('admin/include/footer');
}

public function product_view($id)
{
   //Product Edit Page Show

	$product['product_object']=$this->admin->select_where('product',array('id'=>$id));
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/product_view',$product);
	$this->load->view('admin/include/footer');
}

public function product_edit($id)
{
   //Product Edit Page Show

	$product['product_object']=$this->admin->select_where('product',array('id'=>$id));
	$product['categorys']=$this->admin->select_all('category');
	$this->load->view('admin/include/header');
	$this->load->view('admin/include/sidebar');
	$this->load->view('admin/product_edit',$product);
	$this->load->view('admin/include/footer');
}


public function product_update($id)
{
   //Product Update
	if($this->input->post('product_name'))
	{
		$product_data=array('name'=>$this->input->post('product_name'),
							'category_id'=>$this->input->post('category_id'),
							'price'=>$this->input->post('price'),
							'quantity'=>$this->input->post('quantity'),
							'unit'=>$this->input->post('unit'),
							'total_qty_price'=>$quantity*$price);
   		$product_result=$this->admin->update_row('product',$product_data,array('id'=>$id));
	   if($product_result)
	   {
	   	$this->session->set_flashdata('message','Product Update Successfully');
		  redirect(base_url('admin/product_list'));
	   }
	}
	else
	{
		  redirect(base_url('admin/product_list'));

	}
}


public function product_delete($id)
{
   //Product  Delete
   $product_result=$this->admin->delete('product',array('id'=>$id));
   if($product_result)
   {
   	$this->session->set_flashdata('message','Product Delete Successfully');
		redirect(base_url('admin/product_list'));
   }
}


}
