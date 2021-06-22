
<style>
.text-error
{
	color:#F00;
}
/*
.span10
{    overflow-x: hidden !important;
}
		  div.box {
    height: 245px;
    padding: 10px;
    overflow: auto;
     border:none !important;
    background-color: #e4e4ea !important;
}
.box {
    border: 2px solid #eee;
    background: #fff !important;
    margin-bottom: 28px;
	height: auto !important;
	    border: 1px solid #ffffff !important;
}
.store-box {
    padding: 5px 5px 0px 5px;
    float: left;
    width: 100%;
}
.box-header {
    height: 16px;
    font-size: 16px;
    line-height: 16px;
    padding: 10px;
    background: #fff;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    overflow: hidden;
	    border: 3px solid #80808061;
}.box-header {
    height: 100% !important;
}*/

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
							
                         
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="fname" name="fname"   class="form-control col-md-7 col-xs-12" value="<?php echo $details['1'] ?>" placeholder="First Name" readonly="readonly">
                         <input type="hidden" id="hdnId" name="hdnId" value="<?php echo $id; ?>" />
                         <input type="hidden" id="hdnOp" name="hdnOp" value="<?php echo $details['0']; ?>" />
                         <span class="text-error"><?php echo form_error('name'); ?></span>
                          
                        </div>
                         
                        </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:red;">Doctor <span class="required" style="color:red;">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="selDoctor" name="selDoctor" class="form-control col-md-7 col-xs-12">
                          <option value="0">Select</option>
                          <?php foreach($doctor as $val){ ?>
                          <option value="<?php echo $val->id ?>" <?php if($val->id==$details['2']){ ?> selected="selected" <?php } ?>><?php echo $val->name ?></option>
                          <?php } ?>
                        </select>
                          
                            
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" style="color:red;">Token No <span class="required" style="color:red;">*</span>
                        </label>
						 
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="token" name="token" class="form-control col-md-7 col-xs-12" value="<?php echo $details['3']; ?>" readonly="readonly">
                            
                      </div>
                      </div>
                      
                       
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image1 <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top: 8px;">
                           
                          <a href="<?php echo base_url();?><?php echo $details['8']."/".$details['9']."/".$details['10']; ?>" target="new" style="padding:8px;color:blue;">Image1</a>
                        
                       
                            
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image2<span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      
                           <a href="<?php echo base_url();?><?php echo $details['11']."/".$details['12']."/".$details['13']; ?>" target="new" style="padding:8px;color:blue;">Image2</a>
                        
                       
                            
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image3 <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       
                          <a href="<?php echo base_url();?><?php echo $details['14']."/".$details['15']."/".$details['16']; ?>" target="new" style="padding:8px;color:blue;">Image3</a>
                        
                       
                            
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image4 <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                         <a href="<?php echo base_url();?><?php echo $details['17']."/".$details['18']."/".$details['19']; ?>" target="new" style="padding:8px;color:blue;">Image4</a>
                        
                       
                            
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image5 <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                         <a href="<?php echo base_url();?><?php echo $details['20']."/".$details['21']."/".$details['22']; ?>" target="new" style="padding:8px;color:blue;">Image5</a>
                        
                       
                            
                      </div>
                      </div>
                      
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image6 <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           
                          <a href="<?php //echo base_url();?><?php //echo $details['23']."/".$details['24']."/".$details['25']; ?>" target="new" style="padding:8px;color:blue;">Image6</a>
                        
                       
                            
                      </div>
                      </div>-->
                      
                      
          
                      
                      
                      
                      
                      
                      
                      
                      
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



jQuery(document).on('click', '.ctrl-add', function(){	
		$elm=$(this).parent().parent();  
             
			  	$html = '';
				$html = '<div class="form-group">';
				$html = '</div>';
				$html +='<div class="col-md-6 col-sm-6 col-xs-12" style="border:1px solid #cbcbcb;padding:5px;">';
				$html +='<input type="file" id="imgfile"  name="imgfile" class="form-control col-md-7 col-xs-12">';
				$html +='<img src="" id="imgfiles" width="100" height="100" style="border:none;margin-top: 10px;">';
				$html +='<a class="ctrl-add"><i class="fa fa-plus-circle" style="font-size:25px;"></i></a>';
				$html +=' <a class="ctrl-remove"><i class="icon-minus" style="font-size:25px;"></i></a>';
				$html += '</div>';
				$html += '</div>';
              $elm.after($html);
		$('.ctrl-remove').html('<i class="fa fa-minus-circle"></i>');
	});
	
	
	jQuery(document).on('click', '.ctrl-remove', function(){	
		$elm=$(this).parent().parent();  
		var len=$('.form-group').length;
		if(len == 2 )
		{
			$('.ctrl-remove').remove();
		}
              $elm.remove();
	});
	
	
	
	 





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
  			var url="<?php echo base_url()?>staff/patient_resources/patientReport";
  			var redirect = "<?php echo base_url()?>staff/patient_resources/reportList";
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


    
    





