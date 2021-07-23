<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
      <title>Sales Admin | CORK - Multipurpose Bootstrap Dashboard Template </title>
      <link rel="icon" type="image/x-icon" href="<?=base_url();?>assets/img/favicon.ico"/>
  
      <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
      <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <link href="<?=base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
      <link href="<?=base_url();?>plugins/apex/apexcharts.css" rel="stylesheet" type="text/css">
      <link href="<?=base_url();?>assets/css/dashboard/dash_2.css" rel="stylesheet" type="text/css" />
      <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
    
      <link rel="stylesheet" href="<?=base_url();?>plugins/font-icons/fontawesome/css/regular.css">
      <link rel="stylesheet" href="<?=base_url();?>plugins/font-icons/fontawesome/css/fontawesome.css">

      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/table/datatable/datatables.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>plugins/table/datatable/dt-global_style.css">
   </head>
   <body>
      <div class="header-container fixed-top">
         <header class="header navbar navbar-expand-sm">
            <ul class="navbar-item theme-brand flex-row  text-center">
               <li class="nav-item theme-text">
                  <a href="<?=base_url();?>admin/dashboard" class="nav-link"> C9 </a>
               </li>
            </ul>
            <ul class="navbar-item flex-row ml-md-auto">
               <li class="nav-item dropdown user-profile-dropdown">
                  <a href="" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <img src="<?=base_url();?>assets/img/90x90.jpg" alt="avatar">
                  </a>
                  <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                     <div class="">
                        <div class="dropdown-item">
                           <a class="" href="<?=base_url();?>admin/profile">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                 <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="12" cy="7" r="4"></circle>
                              </svg>
                              My Profile
                           </a>
                        </div>
                        <div class="dropdown-item">
                           <a class="" href="<?=base_url();?>admin/password">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                 <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                 <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                              </svg>
                              Change Password
                           </a>
                        </div>
                        <div class="dropdown-item">
                           <a class="" href="<?=base_url();?>signup/logout">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                 <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                 <polyline points="16 17 21 12 16 7"></polyline>
                                 <line x1="21" y1="12" x2="9" y2="12"></line>
                              </svg>
                              Logout
                           </a>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </header>
      </div>
      <div class="sub-header-container">
         <header class="header navbar navbar-expand-sm">
            <a href="" class="sidebarCollapse" data-placement="bottom">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                  <line x1="3" y1="12" x2="21" y2="12"></line>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <line x1="3" y1="18" x2="21" y2="18"></line>
               </svg>
            </a>
            <ul class="navbar-nav flex-row">
               <li>
                  <div class="page-header"></div>
               </li>
            </ul>
         </header>
      </div>