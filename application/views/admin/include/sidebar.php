<div class="main-container" id="container">
<div class="overlay"></div>
<div class="search-overlay"></div>
<div class="sidebar-wrapper sidebar-theme">
   <nav id="sidebar">
      <div class="shadow-bottom"></div>
      <ul class="list-unstyled menu-categories" id="accordionExample">
         <li class="menu">
            <a href="<?=base_url();?>admin/dashboard"  aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                     <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                     <polyline points="9 22 9 12 15 12 15 22"></polyline>
                  </svg>
                  <span>Dashboard</span>
               </div>
            </a>
         </li>
         <li class="menu">
            <a href="<?=base_url();?>admin/department_list" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                     <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                     <polygon points="12 15 17 21 7 21 12 15"></polygon>
                  </svg>
                  <span>Department</span>
               </div>
            </a>
         </li>
         <li class="menu">
            <a href="<?=base_url();?>admin/employee_list" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                     <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                     <polygon points="12 15 17 21 7 21 12 15"></polygon>
                  </svg>
                  <span>Employee</span>
               </div>
            </a>
         </li>
         <li class="menu">
            <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu">
                     <rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect>
                     <rect x="9" y="9" width="6" height="6"></rect>
                     <line x1="9" y1="1" x2="9" y2="4"></line>
                     <line x1="15" y1="1" x2="15" y2="4"></line>
                     <line x1="9" y1="20" x2="9" y2="23"></line>
                     <line x1="15" y1="20" x2="15" y2="23"></line>
                     <line x1="20" y1="9" x2="23" y2="9"></line>
                     <line x1="20" y1="14" x2="23" y2="14"></line>
                     <line x1="1" y1="9" x2="4" y2="9"></line>
                     <line x1="1" y1="14" x2="4" y2="14"></line>
                  </svg>
                  <span>Product</span>
               </div>
               <div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                     <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
               </div>
            </a>
            <ul class="collapse submenu list-unstyled" id="app" data-parent="#accordionExample">
               <li>
                  <a href="<?=base_url();?>admin/category_list">Category List</a>
               </li>
               <li>
                  <a href="<?=base_url();?>admin/product_list">Product List</a>
               </li>
               
            </ul>
         </li>
      </ul>
   </nav>
</div>