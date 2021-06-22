<style>
					.store-uploader{
							background: white none repeat scroll 0 0;
								border: 1px solid #ddd;
								box-sizing: border-box;
								float: left;
								padding: 2%;
								width: 100%;
								margin-top:10px ;
						}
						.store-uploader img{
							width:100px;
							height:100px;
							float:left;
							border:1px thin #ddd;
							display:none;
						}
						.store-up-control{
							width:100%;
							float:left;
							border-top:1px solid #ddd;
							padding:1% 0;
						}
						
						.store-up-control .ctrl-add{
							float:left;
							margin:2px 0 2px 10px;
						}
						.store-up-control .ctrl-remove{
							float:right;
							margin:2px 10px 2px 0px;
						}
						/*div.uploader input {
    opacity: 0;
    filter: alpha(opacity:0);
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    float: right;
    height: 25px;
    border: none;
    cursor: default;
}*/
uniform.default.css:453
div.uploader input {
    width: 190px;
}
						.store-up-image-wrap{
							text-align:center;
							width:100%;
							float:left;
							margin-bottom:8px;
						}
						div.uploader {
						border-radius: 14px;
						margin: 35px 0;
							}
							.box-header {
    height: 16px;
    font-size: 16px;
    line-height: 16px;
    padding: 10px;
    background: #eee;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    overflow: hidden;
}
a {
    color: #646464;
}
.box1 {
  /*  border: 2px solid #eee;*/
    background: #fff !important;
    margin-bottom: 28px;
}
.store-uploader {
    background: white none repeat scroll 0 0;
    border: 1px solid #ddd;
    box-sizing: border-box;
    float: left;
    padding: 2%;
    width: 100%;
    margin-top: 10px;
}
	input[type='file']{
		
	     width: 178px;
    margin: 35px auto;
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
                    <form id="frmnews" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="#" name="frmnews">
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Address<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea  id="inp-field-addr" name="hspaddress" placeholder="Enter Hospital Address"  class="form-control col-md-7 col-xs-12"><?php if($news){echo $news[0]->c_haddress;} ?></textarea>
						</div>
			</div>
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone <span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <input type="text" id="inp-field-phone" name="hspphn" placeholder="Enter Hospital Phone"  class="form-control col-md-7 col-xs-12" value="<?php if($news){echo $news[0]->c_hphone;} ?>">
                         </div>
			</div>
            <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <input type="text" id="inp-field-email" name="hspemail" placeholder="Enter Hospital Email"  class="form-control col-md-7 col-xs-12" value="<?php if($news){echo $news[0]->c_hemail;} ?>">
                         </div>
			</div>
            
            <!--Social Media Start-->
            
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <input type="text" id="startdate" name="hspfb" placeholder="Enter Facebook Link"  class="form-control col-md-7 col-xs-12" value="<?php if($news){echo $news[0]->c_hfb;} ?>">
                         </div>
			</div>
            
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter <span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <input type="text" id="startdate" name="hsptw" placeholder="Enter Twitter Link"  class="form-control col-md-7 col-xs-12" value="<?php if($news){echo $news[0]->c_htw;} ?>">
                         </div>
			</div>
            
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google Plus <span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
						<input type="text" id="startdate" name="hspgplus" placeholder="Enter Google Plus Link"  class="form-control col-md-7 col-xs-12" value="<?php if($news){echo $news[0]->c_hgp;} ?>">
                         </div>
			</div>
            
			<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube <span class="required">*</span>
                        </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							 <input type="text" id="startdate" name="hspyout" placeholder="Enter Youtube Link"  class="form-control col-md-7 col-xs-12" value="<?php if($news){echo $news[0]->c_hyout;} ?>">
                         </div>
			</div>
            
            
            <!--/. Social Media End-->
            
            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button type="button" class="btn btn-info" id="btnsubmit">Add Details</button>
                        <a href="<?php echo ADMIN_PATH?>news" id="btncancel" class="btn btn-info">Cancel</a>
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

<script type="text/javascript">	
   	//------insert -------------//
$(document).ready(function(e) {
    
	$("#btnsubmit").click(function(e) {
			//alert(1);
			var e=validation();
		if(e==0){
			for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
                }
  			var url="<?php echo ADMIN_PATH?>contactus/addcontact";
  			var redirect = "<?php echo ADMIN_PATH?>contactus/addcontact";
  			var form = document.forms.namedItem("frmnews");                        
			var oData = new FormData(document.forms.namedItem("frmnews"));           
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
 				//	 document.location = redirect;
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
                                   //  'titleemal':$('#titleemal').val(),
									 'imgfile':$('#imgfile').val(),
									 'startdate':$('#startdate').val(),
									 'enddate':$('#enddate').val()

                                 }

      /*  if(values.titleeen == ''){
            $('#titleeen').addClass('errors');
            $('#titleeen').attr("placeholder", "Please enter Unit Name.")
			$('#titleeen').css({'border':'1px solid red'});
		    $('#titleeen').addClass('errorInput');
            error=1;
        } 
	/*	 if(values.titleemal == ''){
            $('#titleemal').addClass('errors');
            $('#titleemal').attr("placeholder", "Please enter Unit Type.")
			$('#titleemal').css({'border':'1px solid red'});
		    $('#titleemal').addClass('errorInput');
            error=1;
        } */
		/*
		
		 if(values.startdate == ''){
            $('#startdate').addClass('errors');
            $('#startdate').attr("placeholder", "Please enter Unit Type.")
			$('#startdate').css({'border':'1px solid red'});
		    $('#startdate').addClass('errorInput');
            error=1;
        } 
		 if(values.enddate == ''){
            $('#enddate').addClass('errors');
            $('#enddate').attr("placeholder", "Please enter Unit Type.")
			$('#enddate').css({'border':'1px solid red'});
		    $('#enddate').addClass('errorInput');
            error=1;
        } 
		 if(values.imgfile == ''){
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

    
    





