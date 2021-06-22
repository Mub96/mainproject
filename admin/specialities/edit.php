
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
                    <form id="frmspecialitiesup" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="#" name="frmspecialitiesup">
					  <div class="form-group">
                      <input type="hidden" id="txthidden" name="txthidden"  value="<?php echo encrypt($getspecialitiesiden->spe_id);?>">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="titleeen" name="titleeen" placeholder="Enter Facility Title in English"  class="form-control col-md-7 col-xs-12" value="<?php echo $getspecialitiesiden->spe_title ?>">
                          
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                           <textarea placeholder="Enter Content" id="editor1" style="width:67%" required   name="contenten"  ><?php echo $getspecialitiesiden->spe_content ?></textarea>
                        </div>
                      </div>
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="imgfile"  name="imgfile" class="form-control col-md-7 col-xs-12">
                          <img src="<?php echo SITE_PATH;?><?php echo $getspecialitiesiden->spe_image ?>" id="imgfiles" width="100" height="100" style="border:none;">
                        
                     
                            
                      </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button type="button" class="btn btn-info" id="btnsubmit">Submit</button>
                        <a href="<?php echo ADMIN_PATH?>specialities" id="btncancel" class="btn btn-info">Cancel</a>
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
  			var url="<?php echo ADMIN_PATH?>specialities/update";
  			var redirect = "<?php echo ADMIN_PATH?>specialities";
  			var form = document.forms.namedItem("frmspecialitiesup");                        
			var oData = new FormData(document.forms.namedItem("frmspecialitiesup"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { alert(oReq.responseText);
				swal("Sucessfully!", "Sucessfully Added!", "success")
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
									 'titleeen':$('#titleeen').val(),
									/* 'imgfile':$('#imgfile').val(),*/

                                 }

        if(values.titleeen == ''){
            $('#titleeen').addClass('errors');
            $('#titleeen').attr("placeholder", "Please enter Title in English")
			$('#titleeen').css({'border':'1px solid red'});
		    $('#titleeen').addClass('errorInput');
            error=1;
        } 

		/* if(values.imgfile == ''){
            $('#imgfile').addClass('errors');
            $('#imgfile').attr("placeholder", "Please enter Unit Type.")
			$('#imgfile').css({'border':'1px solid red'});
		    $('#imgfile').addClass('errorInput');
            error=1;
        } */
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


    
    





