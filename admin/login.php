<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo ADMIN_STYLEPATH?>build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="frmlogin" name="frmlogin" action="" method="post">
              <h1>Login Form</h1>
                <div class="alert alert-danger page-alert" id="alert-1">
                    <button type="button" class="close "><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <strong>Enter Valid Username and Password!</strong>
                </div>

  <span id="errormsg"></span>
              <div>
                <input type="text" class="form-control" name="txtusername" id="txtusername" placeholder="Username" required />
              </div>
              <div>
                <input type="password" class="form-control" name="txtpassword" id="txtpassword" placeholder="Password" required />
              </div>
              <div>
                <a class="btn btn-default submit" id="btnlogin" href="#">Log in</a>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

               <!-- <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>-->
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

               <!-- <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>-->
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    
    
    <style>
	   .errors{color:#F00;
	   font-size:14px;}
	   .page-alert{color:#F00;
    margin-left: 25px;
    margin-top: 19px;
	background-color:rgba(0, 0, 0, 0);;}
	  /* .close{color:#fff;}*/
	   .sr-only{color:#F00;}
	   .close{color:#F00;}
	   .errorborder{border-color:red;}</style>
    
    
    
     <script src="<?php echo ADMIN_STYLEPATH ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
<!-- <script src="<?php //echo ADMIN_STYLEPATH ?>js/SweetAlert.min.js" type="text/javascript"></script>
-->
<script type="text/javascript">

$(document).ready(function(e) {
   	//------insert -------------//
     $('.page-alert').hide();
	       	 $("#btnlogin").click(function(e) {
				 //alert(0);
		var e=validation();
			if(e==0){
  			var url="<?php echo ADMIN_PATH?>index/login";
  			var redirect = "<?php echo ADMIN_PATH?>index/home";
  			var form = document.forms.namedItem("frmlogin");                        
			var oData = new FormData(document.forms.namedItem("frmlogin"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { //alert(oReq.responseText);
				if(oReq.responseText==2){
					 
			//	alert("error");
					$('.page-alert').show();
					 
				 }
					 else
					 {
						/* swal("Sucessfully!", "Sucessfully Added!", "success")*/
 					   document.location = redirect;
					}
					
					 }
                oReq.send(oData);
              //  ev.preventDefault();   
      
						}
			
   			});
	//----end insert--------------------//	
	
	          $('.page-alert .close').click(function (e) {
                    e.preventDefault();
                    $(this).closest('.page-alert').slideUp();
					          	 $('#frmlogin').each (function(){  
                    this.reset();
               }); 		 
                });

	
	function validation(){

        error=0;

        $('input').removeClass('errors');

        $('input').removeClass('errorInput');

        $('select').removeClass('errors');

        $('select').removeClass('errorInput');
        

            var values = {
                                    'username':$('#txtusername').val(),
									'password':$('#txtpassword').val(),

                                 }

        if(values.username == ''){
            $('#txtusername').addClass('errors');
            $('#txtusername').attr("placeholder", "Please enter Username")
			$('#txtusername').css({'border':'1px solid red'});
		    $('#txtusername').addClass('errorInput');
            error=1;
        } 
	  if(values.password == ''){
            $('#txtpassword').addClass('errors');
            $('#txtpassword').attr("placeholder", "Please enter Password")
			$('#txtpassword').css({'border':'1px solid red'});
		    $('#txtpassword').addClass('errorInput');
            error=1;
        } 
        return error;
    }
	

//---------Cancel------//
		$('#btncancel').click(function (){
			       	 $('#frmlogin').each (function(){  
                    this.reset();
               }); 		 
        });
	//---------End cancel------//	
	
	
		
	 $(document).on('click', '#btndelete', function(){
		 //alert(1);
                var id=$(this).attr('rel');  
				
 
							                    $.ajax({

                                            type:"post",

                          url: "<?php echo ADMIN_PATH ?>menu/delete",
					//	 redirect : "<?php echo ADMIN_PATH?>category",

                                            data:"id="+id,

                                            success:function(data){ //alert(data);
												
														location.reload() ;
                                              

                                 // 	document.location = redirect;
	
											}

				    
});

	 });
	
	
	
});
</script>


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  </body>
</html>
