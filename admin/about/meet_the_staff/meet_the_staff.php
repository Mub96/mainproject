
<style>
.text-error
{
	color:#F00;
	
	}

</style>




        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $title;?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  
                  
                  
                   <?php if ($this->session->flashdata('msg')) { ?>
                                    <?php echo $this->session->flashdata('msg') ?>
                                <?php } ?>
                    <br />
                    <form  class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>admin/about/meet_the_staffs" >
                    
                    
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="name" name="name"   class="form-control col-md-7 col-xs-12" value="<?php echo set_value('name') ?>">
                         <span class="text-error"><?php echo form_error('name'); ?></span>
                          
                        </div>
                        </div>
                        
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Designation<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="designation" name="designation"   class="form-control col-md-7 col-xs-12" value="<?php echo set_value('designation') ?>">
                          <span class="text-error"><?php echo form_error('designation'); ?></span> 
                        </div>
                        
                        </div>
                        
                        
                        
                        
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Experience<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="experience" name="experience"   class="form-control col-md-7 col-xs-12" value="<?php echo set_value('experience') ?>">
                          <span class="text-error"><?php echo form_error('experience'); ?></span> 
                          
                        </div>
                       </div>
                      
                      
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="email" id="experience" name="email"   class="form-control col-md-7 col-xs-12" value="<?php echo set_value('email') ?>">
                          
                          
                        </div>
                       </div>
                       
                       
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="password" id="password" name="password"   class="form-control col-md-7 col-xs-12" value="<?php echo set_value('email') ?>">
                          
                          
                        </div>
                       </div>
                       
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Confirm Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="password" id="cpwd" name="cpwd"   class="form-control col-md-7 col-xs-12" value="<?php echo set_value('email') ?>">
                          
                          
                        </div>
                       </div>
                      
                      
                      
                      
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Facebook
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" placeholder="Enter facebook link"  name="facebook"   class="form-control col-md-7 col-xs-12" value="<?php echo set_value('facebook') ?>">
                        
                          
                        </div>
                        </div>
                      
                         
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Twitter
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" placeholder="Enter twitter link"  name="twitter"   class="form-control col-md-7 col-xs-12" value="<?php echo set_value('twitter') ?>">
                        
                          
                        </div>
                       </div>
                      
                       
                      
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                           <textarea placeholder="Enter Content" id="editor1" style="width:67%" required   name="content"  ></textarea>
                        </div>
                      </div>
                      
                      
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="imgfile"  name="imgfile" class="form-control col-md-7 col-xs-12">
                          <img src="<?php echo base_url();?>images/uploads/dummy.png" id="imgfiles" width="100" height="100" style="border:none;margin-top: 10px;">
                        
                     
                            
                      </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button name="btnsubmit" value="submit" type="submit" class="btn btn-info">Submit</button>
                        <a href="<?php //echo ADMIN_PATH?>facilities" id="btncancel" class="btn btn-info">Cancel</a>
                          <!--<button type="submit" class="btn btn-primary" id="btncancel">Cancel</button>-->
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>



  <div class="clearfix"></div>
            </div>
        </div>
        <!-- /page content -->

 <script>

        CKEDITOR.replace( 'editor1', {
                fullPage: true,
                allowedContent: true,
                extraPlugins: 'wysiwygarea'
        });
      /*   CKEDITOR.replace( 'editor2', {
                fullPage: true,
                allowedContent: true,
                extraPlugins: 'wysiwygarea'
        })*/
</script>
<script type="text/javascript">

$(document).ready(function(e) {
	function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgfiles').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgfile").change(function(){
    readURL(this);
});			
   	//------insert -------------//

	   $("#btnsubmit").click(function(e) {
			//alert(1);
			var e=validation();
		if(e==0){
			for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
                }
  			var url="<?php echo base_url()?>admin/fasttrack_colon/addfasttrack";
  			//var redirect = "<?php //echo ADMIN_PATH?>specialities";
  			var form = document.forms.namedItem("frm");                        
			var oData = new FormData(document.forms.namedItem("frm"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { //alert(oReq.responseText);
					
				 if(oReq.responseText==1){
					// alert("Exist");
					swal("Already Exist!", "Exist!", "error")
					  //alert("Exist");
				 }
					 else
					 {
					 swal("Sucessfully!", "Sucessfully Added!", "success")
 					 //document.location = redirect;
					 }
					
					 }
                oReq.send(oData);
                ev.preventDefault();   
      
						}
   			});
	//----end insert--------------------//	
	function validation(){

        error=0;

        $('input').removeClass('errors');

        $('input').removeClass('errorInput');

        $('select').removeClass('errors');

        $('select').removeClass('errorInput');
        

            var values = {
									 'titleeen':$('#titleeen').val(),
									 'imgfile':$('#imgfile').val(),
									 'password':$('#password').val(),
									 'cpwd':$('#cpwd').val()

                                 }

        if(values.titleeen == ''){
            $('#titleeen').addClass('errors');
            $('#titleeen').attr("placeholder", "Please enter Title in English")
			$('#titleeen').css({'border':'1px solid red'});
		    $('#titleeen').addClass('errorInput');
            error=1;
        } 
		 if(values.imgfile == ''){
            $('#imgfile').addClass('errors');
            $('#imgfile').attr("placeholder", "Please enter Unit Type.")
			$('#imgfile').css({'border':'1px solid red'});
		    $('#imgfile').addClass('errorInput');
            error=1;
        } 
		if(values.password == ''){
            $('#password').addClass('errors');
            $('#password').attr("placeholder", "Please enter Unit Type.")
			$('#password').css({'border':'1px solid red'});
		    $('#password').addClass('errorInput');
            error=1;
        } 
		if(values.cpwd == ''){
            $('#cpwd').addClass('errors');
            $('#cpwd').attr("placeholder", "Please enter Unit Type.")
			$('#cpwd').css({'border':'1px solid red'});
		    $('#cpwd').addClass('errorInput');
            error=1;
        } 
		if(values.cpwd != values.password){
            $('#cpwd').addClass('errors');
            $('#cpwd').attr("placeholder", "Please enter Unit Type.")
			$('#cpwd').css({'border':'1px solid red'});
		    $('#cpwd').addClass('errorInput');
            error=1;
        } 
        return error;
    }
	

//---------Cancel------//
		$('#btncancel').click(function (){
          	 $('#frmunit').each (function(){  
                    this.reset();
               }); 		 
        });
	//---------End cancel------//	
	
	
});
</script>


    
    





