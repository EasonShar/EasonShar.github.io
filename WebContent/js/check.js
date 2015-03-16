$(document).ready(function(){    
           $('#username').blur(function () {  
                var username = $.trim($(this).val());  
                if (username == "") {  
                    $('#usernameErr').html('Username is required');  
                }  
                else if (username.length < 6 || username.length > 12) {  
                    $('#usernameErr').html('Username should between 6-12 characters');  
                }  
                else {  
                    $('#usernameErr').html('Username is ok');  
                }  
            });
           $('#password').blur(function () {  
               var password = $.trim($(this).val());  
               if (password == "") {  
                   $('#passwordErr').html('Password is required');  
               }  
               else {  
                   $('#passwordErr').html('Password is ok');  
               }  
           });  
           $('#repassword').blur(function () {  
               var password = $.trim($('#password').val());  
               var repassword = $.trim($('#repassword').val());  
               if (password != repassword) { 
            	   $('#passwordErr2').html('The passwords you entered must be the same'); 
               } else if(repassword == "") {
            	   $('#passwordErr2').html('Enter the password again');     
               } 
               else {  
            	   $('#passwordErr2').html('OK'); 
               }  
           });  
           
           $('#email').blur(function () {  
               var email = $.trim($(this).val());  
               var regExp = /^[_a-zA-Z\d\-\.]+@[_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+$/; 
 
               if (email == "") {  
                   $('#emailErr').html('Email address is required');  
               }  
               else if (!regExp.test($(this).val())) {  
                   $('#emailErr').html('Email address is invalid');  
               }  
               else {  
                   $('#emailErr').html('Email address is ok');  
               }  
           });  
       });  

           