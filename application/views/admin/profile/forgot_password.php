<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Forgot Password</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url();?>assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/forms/switches.css">
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

                        <h1 class="">Forgot Password</h1>
                        <p class=""></p>
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
                         <form id="myform" method="post" autocomplete="off" action="<?=base_url();?>signup/forget" class="text-left" > 
                        
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Email</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="email" name="email" type="email" class="form-control">
                                </div>

                                
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Submit</button>
                                    </div>
                                </div>

                                <div class="division">
                                      <span>OR</span>
                                </div>

                                <div class="social">
                                    <a href="<?=base_url();?>admin" class="btn social-btn btn-primary btn btn-primary">
                                       
                                        <span class="brand-name">Login</span>
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