
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
                    <form id="frmaboutus" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="#" name="frmaboutus">
					  
                      
                      <div class="form-group">
<!--                      <input type="hidden" id="txthidden" name="txthidden"  value="<?php  echo $aboutusen->about_id;?>">
-->                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                           <textarea placeholder="Enter Description in English" id="editor1" style="width:67%" required   name="contenten"  ><?php if($aboutusen) echo $aboutusen->content;?></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video url<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="txtvideo" name="txtvideo" placeholder="Enter Video url"  class="form-control col-md-7 col-xs-12" value="<?php if($aboutusen) echo $aboutusen->video;?>">
                          
                        </div>
                      </div>
                      
                      <div class="form-group">

                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Video Footer Description<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                           <textarea id="editor34" name="editor34" class="form-control col-md-7 col-xs-12"><?php if($aboutusen) echo $aboutusen->video_footer;?></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="imgfile"  name="imgfile" class="form-control col-md-7 col-xs-12">
                          <img src="<?php echo SITE_PATH;?><?php if($aboutusen) { echo $aboutusen->about_img; } else { echo "uploads/dummy.jpg";}?>" id="imgfiles" width="100" height="100" style="border:none;">
                        
                     
                            
                      </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Banner Image <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="imgfile1"  name="imgfile1" class="form-control col-md-7 col-xs-12">
                          <img src="<?php echo SITE_PATH;?><?php if($aboutusen) { echo $aboutusen->about_banner; } else { echo "uploads/dummy.jpg";}?>" id="imgfiles1" width="100" height="100" style="border:none;">
                        
                     
                            
                      </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button type="button" class="btn btn-info" id="btnsubmit">Submit</button>
                        <a href="<?php echo ADMIN_PATH?>aboutus" id="btncancel" class="btn btn-info">Cancel</a>
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
		 CKEDITOR.replace( 'editor34', {
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

function readURL2(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgfiles1').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgfile1").change(function(){
    readURL2(this);
});
			
   	//------insert -------------//

	       	 $("#btnsubmit").click(function(e) {
			//alert(1);
			var e=validation();
		if(e==0){
			for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
                }
  			var url="<?php echo ADMIN_PATH?>aboutus/addaboutus";
  			var redirect = "<?php echo ADMIN_PATH?>aboutus";
  			var form = document.forms.namedItem("frmaboutus");                        
			var oData = new FormData(document.forms.namedItem("frmaboutus"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { //console.log(oReq.responseText);
					
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
									 'contenten':$('#contenten').val(),
                                   'video':$('#txtvideo').val()
									 //'imgfile':$('#imgfile').val()
									
                                 }

        if(values.contenten == ''){
            $('#contenten').addClass('errors');
            $('#contenten').attr("placeholder", "Please enter Unit Name.")
			$('#contenten').css({'border':'1px solid red'});
		    $('#contenten').addClass('errorInput');
            error=1;
        } 
		 if(values.video == ''){
            $('#txtvideo').addClass('errors');
            $('#txtvideo').attr("placeholder", "Please enter Unit Type.")
			$('#txtvideo').css({'border':'1px solid red'});
		    $('#txtvideo').addClass('errorInput');
            error=1;
        } 
		
		
		/* if(values.imgfile == ''){
            $('#imgfile').addClass('errors');
            $('#imgfile').attr("placeholder", "Please enter url.")
			$('#imgfile').css({'border':'1px solid red'});
		    $('#imgfile').addClass('errorInput');
            error=1;
        } 
		 if(values.unithead == 0){
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
	
	
	
	$(document).on('click', '#btndelete', function(){
                var id=$(this).attr('rel');  
				
 
							                    $.ajax({

                                            type:"post",

                          url: "<?php echo ADMIN_PATH ?>unit/delete",
					//	 redirect : "<?php echo ADMIN_PATH?>category",

                                            data:"id="+id,

                                            success:function(data){ //alert(data);
												
														location.reload() ;
                                              

                                 // 	document.location = redirect;
	
											}

				    
				});
  });
	
	
/*	$('#selHead').on('change', function() {
var id=		 this.value ;
  //alert(id);
 var unam=$("#selHead option[value="+id+"]").text();
 //alert(unam);
 
  
  					   $.ajax({
                                  type:"post",
                         		  url: "<?php echo ADMIN_PATH ?>unit/checkunithead",
								  //	 redirect : "<?php echo ADMIN_PATH?>category",
                                   data:"id="+id,

                                    success:function(data){ //alert(data);
												
									//location.reload() ;
                                              if(data==1)
											  {
												  swal("Already Exist", unam+" is Alerady a Unit Head Please select Another Option", "error")
												  //alert('Alerady a Unit Head Please select Another Option');
											  $( "#selHead" ).val("0");
												  }

                                 // 	document.location = redirect;
	
											}

				    
});
})*/
	
	
	$('#selType').on('change', function() {
var id=		 this.value ;
 
  
					   $.ajax({
                                  type:"post",
                         		  url: "<?php echo ADMIN_PATH ?>unit/checkEmployeeid",
								  //	 redirect : "<?php echo ADMIN_PATH?>category",
                                   data:"id="+id,

                                    success:function(data){ //alert(data);
												$('#selHead').html(data);
	
											}

				    
			});
	})	
	
	
	
	
});
</script>


    
    





