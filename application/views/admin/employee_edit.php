<div id="content" class="main-content">
<div class="layout-px-spacing">
   <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-6 col-6  mt-5">
         <h4>Employee Edit</h4>
      </div>
      <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right mt-5">
         <a href="<?=base_url();?>admin/employee_list"><button class="btn btn-outline-primary btn-rounded mb-2">Employee List</button></a>
      </div>
   </div>
   <form method="post" id="employee_add" action="<?=base_url();?>admin/employee_update/<?=$employee_object[0]->id;?>" autocomplete="off" enctype="multipart/form-data" class="simple-example">
      <div class="form-row">
         <div class="col-md-12 mb-4">
            <label for="fullName">Employee Name</label>
            <input type="text" class="form-control" name="employee_name" id="employee_name" value="<?=$employee_object[0]->name;?>">
         </div>
            <div class="col-md-12 mb-4">
            <label for="fullName">Department Name</label>
            <select class="form-control" name="department_id" id="department_id">
                <?php 
                      $this->db->select('*');
                      $this->db->from('department');
                      $this->db->where('id',$employee_object[0]->department_id);
                      $query=$this->db->get()->result();
                      foreach($query as $row1)
                       {
                 ?>
          <option hidden value="<?= $row1->id;?>"><?= $row1->name;?></option>
          <?php }?>
               <?php foreach($departments as $department){?>
               <option value="<?=$department->id;?>"><?=$department->name;?></option>
            <?php }?>
            </select>
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?=$employee_object[0]->email;?>">
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobile" value="<?=$employee_object[0]->mobile;?>">
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Address</label>
            <textarea class="form-control" id="address" name="address"><?=$employee_object[0]->address;?></textarea>
         </div>
      </div>
      <button class="btn btn-primary submit-fn mt-2" type="submit">Update</button>
   </form>
</div>