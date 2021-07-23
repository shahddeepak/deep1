  $("#myform").validate({
  rules: {
    
    mobile: {
      required: true,
      minlength:10,
      number:true,
    },
       admin_name: {
      required: true,
    },
       address: {
      required: true,
    },

    
  },
  messages: {
    
      mobile: {
      required: "Mobile is required",
      number: "Please enter a valid number.",
    },
    admin_name: {
      required: "Name is required",
    },
    address: {
      required: "Address is required",
    },
      
  }
});

    $("#change_password").validate({
   rules: {
   old_password: {
     required: true,
   },
   current_password: {
     required: true,
   },
   confirm_password: {
     required: true,
     equalTo: "#current_password"
   },
   },
   messages: {
   old_password: {
     required: "Old password is required",
   },
     current_password: {
     required: "Current password is required",
   },
     confirm_password: {
     required: "Confirm password is required",
     equalTo:"current password and confirm password not match"

   },
   }
   });

$("#department_add").validate({
   rules: {
   department_name: {
     required: true,
   },
 
   },
   messages: {
   department_name: {
     required: "Department name is required",
   },
      
   }
   });

 $("#employee_add").validate({
   rules: {
   employee_name: {
     required: true,
   },
    email: {
     required: true,
   },
    mobile: {
     required: true,
     number:true,
     minlength:10,
   },
    address: {
     required: true,
   },
     department_id: {
     required: true,
   },
      password: {
     required: true,
   },
 
   },
   messages: {
   employee_name: {
     required: "Employee name is required",
   },
      email: {
     required: "Email  is required",
   },
      mobile: {
     required: "Mobile Number is required",
     number: "Please enter a valid Number.",
   },
      address: {
     required: "Address is required",
   },
       department_id: {
     required: "Department name is required",
   },
       password: {
     required: "Password name is required",
   },
      
   }
   });


$("#category_add").validate({
   rules: {
   category_name: {
     required: true,
   },
 
   },
   messages: {
   category_name: {
     required: "Category name is required",
   },
      
   }
   });

$("#product_add").validate({
   rules: {
   product_name: {
     required: true,
   },
    category_id: {
     required: true,
   },
    price: {
     required: true,
     number:true,
   },
    quantity: {
     required: true,
   },
     unit: {
     required: true,
   },
 
   },
   messages: {
   product_name: {
     required: "Product name is required",
   },
      category_id: {
     required: "Category name  is required",
   },
      price: {
     required: "Price  is required",
     number: "Please enter a valid Price.",
   },
      quantity: {
     required: "Quantity is required",
   },
       unit: {
     required: "unit  is required",
   },

      
   }
   });



//  $("#mail_add").validate({
//    rules: {
//    campion: {
//      required: true,
//    },
//    employee_email: {
//      required: true,
//    },
//     header: {
//      required: true,
//    },
//     body: {
//      required: true,
//    },
//     subject: {
//      required: true,
//    },
//      from_email: {
//      required: true,
//    },
 
//    },
//    messages: {
//    campion: {
//      required: "Campion Name is required",
//    },
//    employee_email: {
//      required: "Employee Email is required",
//    },
//       header: {
//      required: "Header  is required",
//    },
//       body: {
//      required: "Body is required",
//    },
//       subject: {
//      required: "Subject is required",
//    },
//     from_email: {
//      required: "From email id is required",
//    },
      
//    }
//    });


