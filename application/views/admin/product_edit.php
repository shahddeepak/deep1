<div id="content" class="main-content">
<div class="layout-px-spacing">
   <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-6 col-6  mt-5">
         <h4>Product Edit</h4>
      </div>
      <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right mt-5">
         <a href="<?=base_url();?>admin/product_list"><button class="btn btn-outline-primary btn-rounded mb-2">Product List</button></a>
      </div>
   </div>
   <form method="post" id="product_add" action="<?=base_url();?>admin/product_update/<?=$product_object[0]->id;?>" autocomplete="off" enctype="multipart/form-data" class="simple-example">
      <div class="form-row">
         <div class="col-md-12 mb-4">
            <label for="fullName">Product Name</label>
            <input type="text" class="form-control" name="product_name" id="product_name" value="<?=$product_object[0]->name;?>">
         </div>
            <div class="col-md-12 mb-4">
            <label for="fullName">Category Name</label>
            <select class="form-control" name="category_id" id="category_id">
                <?php 
                      $this->db->select('*');
                      $this->db->from('category');
                      $this->db->where('id',$product_object[0]->category_id);
                      $query=$this->db->get()->result();
                      foreach($query as $row1)
                       {
                 ?>
          <option hidden value="<?= $row1->id;?>"><?= $row1->name;?></option>
          <?php }?>
               <?php foreach($categorys as $category){?>
               <option value="<?=$category->id;?>"><?=$category->name;?></option>
            <?php }?>
            </select>
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Price Single Product (Rs.)</label>
            <input type="text" class="form-control" name="price" id="price" value="<?=$product_object[0]->price;?>">
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Quantity</label>
            <input type="text" class="form-control" name="quantity" id="quantity" value="<?=$product_object[0]->quantity;?>">
         </div>
         <div class="col-md-12 mb-4">
            <label for="fullName">Unit</label>
            <input type="text" class="form-control" id="unit" name="unit" value="<?=$product_object[0]->unit;?>">
         </div>
      </div>
      <button class="btn btn-primary submit-fn mt-2" type="submit">Update</button>
   </form>
</div>