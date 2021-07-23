<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Signup</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url();?>assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="<?=base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/css/authentication/form-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/forms/switches.css">
    <style type="text/css">
      .error {color: red !important;}
      .form-form .form-form-wrap form .field-wrapper input{padding: 5px 5px 5px 10px !important}
      .social{background: #1b55e2 !important}
    </style>
</head>
<body class="form">
    

    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Registration</h1>
                       
                        
                    <form id="signup" method="post" autocomplete="off" action="<?=base_url();?>signup/user_insert"  enctype="multipart/form-data" class="text-left" > 
                     
                            <div class="form">

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Full Name</label>
                                    <input id="user_name" name="user_name" type="text" class="form-control">
                                </div>

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Company Name</label>
                                    <input id="company_name" name="company_name" type="text" class="form-control">
                                </div>

                                <div id="email-field" class="field-wrapper input">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" value="" class="form-control">
                                </div>

                                 <div id="email-field" class="field-wrapper input">
                                    <label for="email">Password</label>
                                    <input id="password" name="password" type="password" value="" class="form-control">
                                </div>

                          

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Mobile</label>
                                    <input id="mobile" name="mobile" type="text" class="form-control">
                                </div>

                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Company Address</label>
                                    
                                    <textarea id="address" name="address"  class="form-control"></textarea>
                                 
                                </div>


                                <div class="field-wrapper terms_condition">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-primary">
                                          <input type="checkbox" class="new-control-input">
                                          
                                        </label>
                                    </div>

                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Submit</button>
                                    </div>
                                </div>

                                <div class="division">
                                    <span>OR</span>
                                </div>
 <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <a href="<?=base_url();?>admin" ><button type="button" class="btn btn-primary" value="">Login</button></a>
                                    </div>
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
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="<?=base_url();?>assets/js/authentication/form-2.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript">
  $("#signup").validate({
  rules: {
    
    user_name: {
      required: true,
    },
     company_name: {
      required: true,
    },
     email: {
      required: true,
    },
     password: {
      required: true,
    },
     mobile: {
      required: true,
      minlength:10,
      number:true,
    },
     address: {
      required: true,
    },    
  },
  messages: {
    
      user_name: {
      required: "User Name is required",   
    },
     company_name: {
      required: "Company Name is required",    
    },
     email: {
      required: "Email is required",
     },
     password: {
      required: "Password is required",
     },
     mobile: {
      required: "Mobile is required",
      number: "Please enter a valid number.",
    },
     address: {
      required: "Address is required",
     },
  }
});



</script>

</body>
</html>