<div id="content" class="main-content">
<div class="layout-px-spacing">
   <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-6 col-6  mt-5">
         <h4>Products List</h4>
      </div>
      <div class="col-xl-6 col-md-6 col-sm-6 col-6 text-right mt-5">
         <a href="<?=base_url();?>admin/product"><button class="btn btn-outline-primary btn-rounded mb-2">Product Add</button></a>
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
                <table id="default-ordering" class="table table-hover" style="width:100%">
                  <thead>
                     <tr>
                        <th>S No</th>
                        <th>product Name</th>
                        <th>Category Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($products)){
                     $count=1;
                      foreach($products as $product)
                      {
                           $this->db->select('*');
                           $this->db->from('category');
                           $this->db->where('id',$product->category_id);
                           $query=$this->db->get()->result();
                     ?>
                     <tr>
                        <td><?=$count;?></td>
                        <td><?=$product->name;?></td>
                       <?php if($query){?>
                        <td><?=$query[0]->name;?></td>
                        <?php } else{?>
                           <td></td>
                        <?php }?>
                        <td><?=$product->price;?></td>
                        <td><?=$product->quantity;?></td>
                       <td>
                           <a href="<?=base_url();?>admin/product_view/<?=$product->id;?>"><button class="btn btn-outline-info mb-2"><i class="far fa-eye"></i></button></a>
                           <a href="<?=base_url();?>admin/product_edit/<?=$product->id;?>"><button class="btn btn-outline-primary mb-2"><i class="far fa-edit"></i></button></a>
                           <a href="<?=base_url();?>admin/product_delete/<?=$product->id;?>" onclick="return confirm('Are you sure you want to delete this item?');"><button class="btn btn-outline-danger mb-2"><i class="far fa-trash-alt"></i></button></a>
                        </td>
                     </tr>
                     <?php $count++; } }?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</div>