
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
                    <form id="frmunit" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="#" name="frmunit">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*  :</span>
                        </label> 
                        <div class="col-md-6 col-sm-6 col-xs-12">
                           
                             <label style="padding-top:8px;"><?php echo $emp->name ?></label>
                           
                             
                           </select>
                        </div>
                       </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">email <span class="required">*  :</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                            <label style="padding-top:8px;"><?php echo $emp->email   ?></label>   
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">address<span class="required">*  :</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <label style="padding-top:8px;"><?php echo $emp->address   ?></label>   
                                      </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">mobile<span class="required">*  :</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                             <label style="padding-top:8px;"><?php echo $emp->mobile   ?></label>
                                      </div>
                      </div>
                      
                      </div>
                      <div class="form-group">
                        <!--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>-->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <!-- <input type="text" id="last-name" name="last-name" required class="form-control col-md-7 col-xs-12">-->
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                         <a href="<?php echo ADMIN_PATH?>unit" id="btncancel" class="btn btn-info">Cancel</a>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>




            </div>
        </div>
        <!-- /page content -->

    <script src="<?php echo ADMIN_STYLEPATH ?>js/jquery-1.11.1.min.js" type="text/javascript"></script>
 <!--<script src="<?php echo ADMIN_STYLEPATH ?>js/SweetAlert.min.js" type="text/javascript"></script>-->
<script type="text/javascript">

$(document).ready(function(e) {
   	//------insert -------------//

	       	 $("#btnupdate").click(function(e) {
			//alert(1);
			var e=validation();
			if(e==0){
  			var url="<?php echo ADMIN_PATH?>unit/update";
  			var redirect = "<?php echo ADMIN_PATH?>unit";
  			var form = document.forms.namedItem("frmunit");                        
			var oData = new FormData(document.forms.namedItem("frmunit"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { //alert(oReq.responseText);
					
			//	 if(oReq.responseText==1){
					// alert("Exist");
					//swal("Alreadt Exist!", "Exist!", "error")
				//	  //alert("Exist");
				// }
				//	 else
				//	 {
					swal("Sucessfully!", "Sucessfully Added!", "success")
 					 document.location = redirect;
					// }
				//	
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
                                    'unitname':$('#unitname').val(),
									'nodetype':$('#selType').val(),
									//'unithead':$('#selHead').val()
                                 }

        if(values.unitname == ''){
            $('#unitname').addClass('errors');
            $('#unitname').attr("placeholder", "Please enter Unit Name.")
			$('#unitname').css({'border':'1px solid red'});
		    $('#unitname').addClass('errorInput');
            error=1;
        } 
		
		 if(values.nodetype == 'e'){
            $('#selType').addClass('errors');
            $('#selType').attr("placeholder", "Please enter Unit Type.")
			$('#selType').css({'border':'1px solid red'});
		    $('#selType').addClass('errorInput');
            error=1;
        } 
		 /*if(values.unithead == 0){
            $('#selHead').addClass('errors');
            $('#selHead').attr("placeholder", "Please enter Unit Head.")
			$('#selHead').css({'border':'1px solid red'});
		    $('#selHead').addClass('errorInput');
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


    
    





