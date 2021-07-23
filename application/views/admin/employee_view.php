<?php 
   $this->db->select('*');
   $this->db->from('department');
   $this->db->where('id',$employee_object[0]->department_id);
   $query=$this->db->get()->result();
   ?>
<style type="text/css">
   th,td { color: #000 !important; }
</style>
<div id="content" class="main-content">
<div class="layout-px-spacing">
   <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-6 col-6  mt-5">
         <h4>Employee View</h4>
      </div>
      <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right mt-5">
         <a href="<?=base_url();?>admin/employee_list"><button class="btn btn-outline-primary btn-rounded mb-2">Employee List</button></a>
      </div>
   </div>
   <?php if($this->session->flashdata('message')){?>
   <div class="alert alert-outline-primary mb-4" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
         </svg>
      </button>
      <strong><?php echo $this->session->flashdata('message'); ?></strong> 
   </div>
   <?php }?>
   <div class="row layout-top-spacing">
      <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
         <div class="widget-content widget-content-area br-6">
            <div class="table-responsive mb-4 mt-4">
               <table  class="table">
                  <tr>
                     <th>Employee Name</th>
                     <td><?=$employee_object[0]->name;?></td>
                  </tr>
                  <tr>
                     <th>Department Name</th>
                     <?php if($query){?>
                     <td><?=$query[0]->name;?></td>
                     <?php } else{?>
                     <td></td>
                     <?php }?>
                  </tr>
                  <tr>
                     <th>Email</th>
                     <td><?=$employee_object[0]->email;?></td>
                  </tr>
                  <tr>
                     <th>Mobile</th>
                     <td><?=$employee_object[0]->mobile;?></td>
                  </tr>
                    <tr>
                     <th>Address</th>
                     <td><?=$employee_object[0]->address;?></td>
                  </tr>
                  
                  <tr>
                     <th>Status</th>
                     <td>
                        <?php if($employee_object[0]->status==0){?>
                           <button class="btn btn-outline-info mb-2">Deactive</button><?php }else{?><button class="btn btn-outline-success mb-2">Active</button><?php }?>
                     </td>
                  </tr>
                   <tr>
                     <th>Added On</th>
                     <td><?=$employee_object[0]->added_on;?></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>