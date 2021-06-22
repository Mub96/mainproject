
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
                    <br />
                    <form  class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="" id="frm" name="frm">
                    
                      <div class="form-group">
                       <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Patient Image <span class="required">*</span>-->
                        </label>
							
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <!--  <input type="file" id="imgfile"  name="imgfile" class="form-control col-md-7 col-xs-12">-->
                          <?php $image= $details['9']."/".$details['10']."/".$details['11'];?>
                          <input type="hidden" id="hdnId" name="hdnId" value="<?php echo $details['12']; ?>" />
                          <input type="hidden" id="hdnOp" name="hdnOp" value="<?php echo $opnos; ?>" />
                          <label style="margin: 58px 260px;">Date: <?php echo date('d-m-y'); ?></label>
                          <img src="<?php echo base_url();?><?php echo $image; ?>" id="imgfiles" width="100" height="100" style="border:none;margin-top: 10px;float:right;margin-bottom:25px;">
                        
                     
                            
                      </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                         <input type="text" id="fname" name="fname"   class="form-control col-md-7 col-xs-12" value="<?php echo $details['0'] ?>" placeholder="First Name" readonly="readonly">
                         <span class="text-error"><?php echo form_error('name'); ?></span>
                          
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                         <input type="text" id="lname" name="lname"   class="form-control col-md-7 col-xs-12" value="<?php echo $details['1'] ?>" placeholder="Last Name" readonly="readonly">
                         <span class="text-error"><?php echo form_error('name'); ?></span>
                          
                        </div>
                        </div>
                        
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea id="address" name="address" class="form-control col-md-7 col-xs-12" readonly="readonly"> <?php echo $details['2'] ?> </textarea>
                        <!-- <input type="text" id="designation" name="designation"   class="form-control col-md-7 col-xs-12" value="<?php //echo set_value('designation') ?>">-->
                          <span class="text-error"><?php echo form_error('address'); ?></span> 
                        </div>
                        
                        </div>
                        
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">City & State<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="city" name="city"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $details['3'] ?>" placeholder="City">
                          <span class="text-error"><?php echo form_error('city'); ?></span> 
                          
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="state" name="state"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $details['4'] ?>" placeholder="State">
                          <span class="text-error"><?php echo form_error('state'); ?></span> 
                          
                        </div>
                       </div>
                       
                       
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Zipcode & Mob No<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="zipcode" name="zipcode"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $details['5'] ?>" placeholder="Zipcode">
                          <span class="text-error"><?php echo form_error('zipcode'); ?></span> 
                          
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="text" id="mobno" name="mobno"   class="form-control col-md-7 col-xs-12" value="<?php echo $details['6'] ?>" placeholder="Mob No" readonly="readonly">
                          <span class="text-error"><?php echo form_error('mobno'); ?></span> 
                          
                        </div>
                       </div>
                      
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="email" id="email" name="email"   class="form-control col-md-7 col-xs-12" value="<?php echo $details['7'] ?>" readonly="readonly">
                          
                          
                        </div>
                       </div>
                      
                
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Health Condition<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea id="condition" name="condition" class="form-control col-md-7 col-xs-12" readonly="readonly"><?php echo $details['8'] ?></textarea>
                        <!-- <input type="text" id="designation" name="designation"   class="form-control col-md-7 col-xs-12" value="<?php //echo set_value('designation') ?>">-->
                        <span class="text-error"><?php echo form_error('address'); ?></span> 
                        </div>
                        
                        </div>
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:red;">Select Doctor <span class="required" style="color:red;">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="selDoctor" name="selDoctor" class="form-control col-md-7 col-xs-12">
                          <option value="0">Select</option>
                          <?php foreach($doctor as $val){ ?>
                          <option value="<?php echo $val->id ?>"><?php echo $val->name ?></option>
                          <?php } ?>
                        </select>
                          
                            
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:red;">Token No <span class="required" style="color:red;">*</span>
                        </label>
						<?php $opno=opno(); ?>	
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="token" name="token" class="form-control col-md-7 col-xs-12" value="<?php echo $opno; ?>" readonly="readonly">
                            
                      </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:red;">Treatment for <span class="required" style="color:red;">*</span>
                        </label>
						 
                      <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea id="treatment" name="treatment" class="form-control col-md-7 col-xs-12"></textarea>
                            
                      </div>
                      </div>
                      
                      
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button name="btnsubmit" value="submit" type="button" class="btn btn-info" id="btnsubmit">Submit</button>
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
			//alert("yes");
			for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
                }
  			var url="<?php echo base_url()?>doctor/patient_resources/bookOp";
  			var redirect = "<?php echo base_url()?>doctor/patient_resources/appointList";
  			var form = document.forms.namedItem("frm");                        
			var oData = new FormData(document.forms.namedItem("frm"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { alert(oReq.responseText);
					
				 if(oReq.responseText==1){
					// alert("Exist");
					swal("Already Exist!", "Exist!", "error")
					  //alert("Exist");
				 }
					 else
					 {
					 swal("Sucessfully!", "Sucessfully Added!", "success")
 					 document.location = redirect;
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
									 'fname':$('#fname').val(),
									 'address':$('#address').val(),
									 'city':$('#city').val(),
									 'state':$('#state').val(),
									 'zipcode':$('#zipcode').val(),
									 'mobno':$('#mobno').val(),
 
                                 }

        if(values.fname == ''){
            $('#fname').addClass('errors');
            $('#fname').attr("placeholder", "Please enter first name")
			$('#fname').css({'border':'1px solid red'});
		    $('#fname').addClass('errorInput');
            error=1;
        } 
		if(values.address == ''){
            $('#address').addClass('errors');
            $('#address').attr("placeholder", "Please enter address.")
			$('#address').css({'border':'1px solid red'});
		    $('#address').addClass('errorInput');
            error=1;
        } 
		 if(values.city == ''){
            $('#city').addClass('errors');
            $('#city').attr("placeholder", "Please enter city.")
			$('#city').css({'border':'1px solid red'});
		    $('#city').addClass('errorInput');
            error=1;
        } 
		 if(values.state == ''){
            $('#state').addClass('errors');
            $('#state').attr("placeholder", "Please enter state.")
			$('#state').css({'border':'1px solid red'});
		    $('#state').addClass('errorInput');
            error=1;
        } 
		if(values.zipcode == ''){
            $('#zipcode').addClass('errors');
            $('#zipcode').attr("placeholder", "Please enter zipcode.")
			$('#zipcode').css({'border':'1px solid red'});
		    $('#zipcode').addClass('errorInput');
            error=1;
        } 
		 
		if(values.mobno == ''){
            $('#mobno').addClass('errors');
            $('#mobno').attr("placeholder", "Please enter mobile no.")
			$('#mobno').css({'border':'1px solid red'});
		    $('#mobno').addClass('errorInput');
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


    
    





