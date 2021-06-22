
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
                    <form id="frmfacilitiesup" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="#" name="frmfacilitiesup">
					  <div class="form-group">
                      <input type="hidden" id="txthidden" name="txthidden"  value="<?php echo encode($support_services->sup_services_id);?>">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="titleeen" name="titleeen" placeholder="Enter Facility"  class="form-control col-md-7 col-xs-12" value="<?php echo $support_services->sup_services_title ?>">
                          
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                           <textarea placeholder="Enter Content in English" id="editor1" style="width:67%" required   name="contenten"  ><?php echo $support_services->sup_services_content ?></textarea>
                        </div>
                      </div>
                      
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12 tboxfull">
                          
                          <?php $i=0; if(!empty($banneren)){foreach($banneren as $val){ ?>
                          
                          <div class="g_box"> 
                          <div class="tbox">
                          
               <input type="hidden" id="oldimg"  name="oldimg[]" value="<?php echo $val->sup_ser_img;?>"/>
               <input type="hidden" id="oldimgthum"  name="oldimgthum[]" value="<?php echo $val->sup_ser_thum;?>"/>           
                            <input type="file" id="imgfile"  name="imgfile[]" placeholder="Experience"  class="chktoken form-control imgfile" style="float: left;"/>
                        
 <i style="cursor:pointer;margin-top:10px;margin-left:9px;" class="<?php if($i==0){echo 'fa fa-plus addmore addmoreexp';}else{ echo 'fa fa-close txtclose';} ?>"></i></div>
                          <img class="imgfiles" src="<?php echo SITE_PATH.$val->sup_ser_img; ?>" id="imgfiles" width="100" height="100" style="border:none;">
                        
                     </div>
                     
                     <?php $i++;} } ?>
                            
                      </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button type="button" class="btn btn-info" id="btnsubmit">Submit</button>
                        <a href="<?php echo ADMIN_PATH?>support_services" id="btncancel" class="btn btn-info">Cancel</a>
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
    
</script>
<script type="text/javascript">

$(document).ready(function(e) {
	
	$(".addmore").click(function(){
	var elm=$(this).parent().parent().parent().parent();
	/*var elmval=elm.children().find('.viewtbox').val();*/
	
	var tboxhtm='<div class="g_box"><div class="tbox"><input type="file" id="imgfile" name="imgfile[]" placeholder="Experience" class="chktoken form-control imgfile" style="float:left;"/><i style="cursor:pointer;margin-top:10px;margin-left:9px;" class="fa fa-close txtclose"></i></div><img class="imgfiles" src="<?php echo SITE_PATH;?>uploads/dummy.jpg" id="imgfiles" width="100" height="100" style="border:none;"></div>';
	
	elm.children('.tboxfull').append(tboxhtm);
	
	})
	
$(document).on('click', '.txtclose', function() {

		var elm=$(this).parent().parent()  ;
		elm.remove();
	
	
	})	

	function readURL(input,th) 
	{
    if (input.files && input.files[0]) 
	{
        var reader = new FileReader();
        reader.onload = function (e) 
		{
            th.parent().parent().find('.imgfiles').attr('src', e.target.result);
			th.parent().find('#oldimg').remove();
			th.parent().find('#oldimgthum').remove();
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).on('change','.imgfile',function()
{
	var th=$(this);
    readURL(this,th);
	
});				
   	//------insert -------------//

	       	 $("#btnsubmit").click(function(ev) {
			//alert(1);
			var e=validation();
		if(e==0){
			for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
                }
  			var url="<?php echo ADMIN_PATH?>support_services/update";
  			var redirect = "<?php echo ADMIN_PATH?>support_services";
  			var form = document.forms.namedItem("frmfacilitiesup");                        
			var oData = new FormData(document.forms.namedItem("frmfacilitiesup"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { //alert(oReq.responseText);
					
				
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
                                   'icon':$('#txticon').val()
									 /*'imgfile':$('#imgfile').val(),*/

                                 }

        if(values.titleeen == ''){
            $('#titleeen').addClass('errors');
            $('#titleeen').attr("placeholder", "Please enter Unit Name.")
			$('#titleeen').css({'border':'1px solid red'});
		    $('#titleeen').addClass('errorInput');
            error=1;
        } 
	 if(values.icon == ''){
            $('#txticon').addClass('errors');
            $('#txticon').attr("placeholder", "Please enter icon.")
			$('#txticon').css({'border':'1px solid red'});
		    $('#txticon').addClass('errorInput');
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


    
    





