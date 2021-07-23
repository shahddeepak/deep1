<div id="content" class="main-content">
<div class="layout-px-spacing">
   <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-6 col-6  mt-5">
         <h4>Admin Profile</h4>
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
   <form method="post" id="myform" action="<?=base_url();?>admin/profile_update/<?=$profile[0]->id;?>"  enctype="multipart/form-data" class="simple-example" autocomplete="off" >
      <div class="form-row">
         <div class="col-md-12 mb-4">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="admin_name" name="admin_name"  value="<?=$profile[0]->name;?>"> 
         </div>

         <div class="col-md-12 mb-4">
            <label for="fullName">Email</label>
            <input type="email" class="form-control" readonly="" value="<?=$profile[0]->email;?>">
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Mobile</label>
            <input type="text" class="form-control" name="mobile"  id="mobile" value="<?=$profile[0]->mobile;?>">
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Address</label>
            <textarea class="form-control" id="address" name="address"><?=$profile[0]->address;?></textarea>
         </div>
      </div>
      <button class="btn btn-primary submit-fn mt-2" type="submit">Update</button>
   </form>
</div>