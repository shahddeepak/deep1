<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Login </title>
    <link rel="icon" type="image/x-icon" href="<?=base_url();?>assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/forms/switches.css">
      <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/elements/alert.css">
</head>
<style type="text/css">
        .error{
        color: red !important;
        margin-top: 2px;
        font-size: 20px;
    }
    .alert-outline-primary {
      background: #d1ecf1;
    color: #0c5460;
    }
    .alert .close {color:#0c5460; }
</style>
<body class="form">
    

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Sign In</h1>
                        <p class="">Log in to your account to continue.</p>
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
                         <form id="myform" method="post" autocomplete="off" action="<?=base_url();?>signup/login" class="text-left" > 
                        
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Email</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="name" name="email" type="email" class="form-control">
                                </div>

                                <div id="password-field" class="field-wrapper input mb-2">
                                    <div class="d-flex justify-content-between">
                                        <label for="password">Password</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                    </div>
                                    
                                    <input id="password" name="password" type="password" class="form-control">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                                    
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Log In</button>
                                    </div>
                                </div>

                                <div class="division">
                                      <span>OR</span>
                                </div>

                                <div class="social">
                                    <a href="<?=base_url();?>signup/forget_password" class="btn social-github btn btn-primary">
                                       
                                        <span class="brand-name">Forgot Password?</span>
                                    </a>
                                   <a href="<?=base_url();?>signup/signup" class="btn social-github btn btn-primary">
                                        
                                        <span class="brand-name">Signup</span>
                                    </a>
                                </div>

                               

                            </div>
                        </form>

                    </div>                    
                </div>
            </div>
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url();?>assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url();?>bootstrap/js/popper.min.js"></script>
    <script src="<?=base_url();?>bootstrap/js/bootstrap.min.js"></script>

      <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  
 <script src="<?=base_url();?>assets/js/authentication/form-2.js"></script>
    <script type="text/javascript">
    $("#myform").validate({
  rules: {
   
    email: {
      required: true,
    },
    password: {
      required: true,
    },
   
  },
  messages: {
   
      email: {
      required: "Email is required",
    },
      password: {
      required: "Password is required",
    },
      }
});

</script>

</body>
</html>