
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
                    <h2><?php echo $subtitle;?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="frmsupportdeptupdate" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="#" name="frmsupportdeptupdate">
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" id="txthidden" name="txthidden"  value="<?php echo encode($departmenten[0]->support_dept_id);?>">
                         <input type="text" id="depnameen" name="depnameen" value="<?php echo $departmenten[0]->support_dept_name;?>" placeholder="Enter Department Name"  class="form-control col-md-7 col-xs-12">
                          
                        </div>
                      </div>
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12"> 
                         <input type="text" id="depnamemal" name="depnamemal" value="<?php// echo $departmentmal[0]->support_dept_name;?>" placeholder="Enter Department Name in Malayalam"  class="form-control col-md-7 col-xs-12">
                          
                        </div>
                      </div>-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                           <textarea placeholder="Enter Description" id="editor1" style="width:67%" required   name="depdescriptionen"  ><?php echo $departmenten[0]->support_dept_description;?></textarea>
                        </div>
                      </div>
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                          <textarea placeholder="Enter Description in Malayalam" id="editor2" style="width:67%" required   name="depdescriptionmal"  ><?php// echo $departmentmal[0]->support_dept_description;?></textarea>
                        </div>
                      </div>-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Icon <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							 <input type="text" id="depicon" name="depicon" value="<?php echo $departmenten[0]->support_dept_icon;?>" placeholder="Enter Department Icon"  class="form-control col-md-7 col-xs-12">
                            
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="imgfile"  name="imgfile" class="form-control col-md-7 col-xs-12">
                          <img src="<?php echo SITE_PATH;?><?php echo $departmenten[0]->support_dept_img;?>" id="imgfiles" width="100" height="100" style="border:none;">
                        
                     
                            
                      </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button type="button" class="btn btn-info" id="btnsubmit">Submit</button>
                        <a href="<?php echo ADMIN_PATH?>support_dept" id="btncancel" class="btn btn-info">Cancel</a>
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
         CKEDITOR.replace( 'editor2', {
                fullPage: true,
                allowedContent: true,
                extraPlugins: 'wysiwygarea'
        })
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
  			var url="<?php echo ADMIN_PATH?>support_dept/update";
  			var redirect = "<?php echo ADMIN_PATH?>support_dept";
  			var form = document.forms.namedItem("frmsupportdeptupdate");                        
			var oData = new FormData(document.forms.namedItem("frmsupportdeptupdate"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { //alert(oReq.responseText);
					
					 swal("Sucessfully!", "Sucessfully Updated!", "success")
 					 document.location = redirect;
					
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
									 'depnameen':$('#depnameen').val(),
                                     'depnamemal':$('#depnamemal').val(),
									
									 'depicon':$('#depicon').val()
									

                                 }

        if(values.depnameen == ''){
            $('#depnameen').addClass('errors');
            $('#depnameen').attr("placeholder", "Please enter Unit Name.")
			$('#depnameen').css({'border':'1px solid red'});
		    $('#depnameen').addClass('errorInput');
            error=1;
        } 
		 if(values.depnamemal == ''){
            $('#depnamemal').addClass('errors');
            $('#depnamemal').attr("placeholder", "Please enter Unit Type.")
			$('#depnamemal').css({'border':'1px solid red'});
		    $('#depnamemal').addClass('errorInput');
            error=1;
        } 
		
		 if(values.depicon == ''){
            $('#depicon').addClass('errors');
            $('#depicon').attr("placeholder", "Please enter Unit Type.")
			$('#depicon').css({'border':'1px solid red'});
		    $('#depicon').addClass('errorInput');
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


    
    





