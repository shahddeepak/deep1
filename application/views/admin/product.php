<div id="content" class="main-content">
<div class="layout-px-spacing">
   <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-6 col-6  mt-5">
         <h4>Product Add</h4>
      </div>
      <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right mt-5">
         <a href="<?=base_url();?>admin/product_list"><button class="btn btn-outline-primary btn-rounded mb-2">Product List</button></a>
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
   <form method="post" id="product_add" action="<?=base_url();?>admin/product_insert" autocomplete="off" enctype="multipart/form-data" class="simple-example">
      <div class="form-row">
         <div class="col-md-12 mb-4">
            <label for="fullName">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="product_name">
         </div>
          <div class="col-md-12 mb-4">
            <label for="fullName">Category Name</label>
            <select class="form-control" name="category_id" id="category_id">
               <option value="">Select Category</option>
               <?php foreach($categorys as $category){?>
               <option value="<?=$category->id;?>"><?=$category->name;?></option>
            <?php }?>
            </select>
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Price Single Product (Rs.)</label>
            <input type="text" class="form-control" name="price" id="price">
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Quantity</label>
            <input type="text" class="form-control" name="quantity" id="quantity">
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Unit</label>
            <input type="text" class="form-control" name="unit" id="unit">
         </div>
    
      </div>
      <button class="btn btn-primary submit-fn mt-2" type="submit">Submit</button>
   </form>
</div>