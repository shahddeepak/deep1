<div id="content" class="main-content">
<div class="layout-px-spacing">
   <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-6 col-6  mt-5">
         <h4>Department Edit</h4>
      </div>
      <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right mt-5">
         <a href="<?=base_url();?>admin/department_list"><button class="btn btn-outline-primary btn-rounded mb-2">Department List</button></a>
      </div>
   </div>
   <form method="post" id="department_add" action="<?=base_url();?>admin/department_update/<?=$department_object[0]->id;?>" autocomplete="off" enctype="multipart/form-data" class="simple-example">
      <div class="form-row">
         <div class="col-md-12 mb-4">
            <label for="fullName">Department Name</label>
            <input type="text" class="form-control" name="department_name" id="department_name" value="<?=$department_object[0]->name;?>">
         </div>
         
      </div>
      <button class="btn btn-primary submit-fn mt-2" type="submit">Update</button>
   </form>
</div>