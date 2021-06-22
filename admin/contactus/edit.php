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
						/*	display:none;*/
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
                    <form id="frmnewsup" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="#" name="frmnewsup">
					  <div class="form-group">
                      <input type="hidden" id="txthidden" name="txthidden"  value="<?php echo encode($getnewsiden[0]->news_id);?>">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Title<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="titleeen" name="titleeen" placeholder="Enter Title in English"  class="form-control col-md-7 col-xs-12" value="<?php echo $getnewsiden[0]->news_title ?>">
                          
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                           <textarea placeholder="Enter Content" id="editor1" style="width:67%" required   name="contenten"  ><?php echo $getnewsiden[0]->news_content ?></textarea>
                        </div>
                      </div>
                      
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                        </label>
							
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="imgfile"  name="imgfile" class="form-control col-md-7 col-xs-12">
                          <img src="<?php echo SITE_PATH;?><?php echo $getnewsiden->news_img ?>" id="imgfiles" width="100" height="100" style="border:none;">
                        
                     
                            
                      </div>
                      </div>-->
                      <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Image <span class="required">*</span>
                        </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="box1 span4">
                 <!--<div class="box-header" data-original-title="">
						<h2><i class="halflings-icon picture"></i><span class="break"></span>Featured Image</h2>
					</div>-->
                    <!-- image-->
                    <div class="control-group" style="padding:0 5px"><?php if($getnewsiden) foreach($getnewsiden as $val) {?>
                      <div class="store-uploader">
                      		<div class="store-up-image-wrap">
                      			<!--<img src="" />-->
                                <input type="hidden" value="<?php echo $val->news_img_name ?>" name="oimg[]" id="oimg" />
                                 <img src="<?php echo SITE_PATH;?><?php echo $val->news_img_name ?>" id="store-file-up" width="100" height="100" style="border:none;">
                                <input name="userfile[]" id="store-file-up" class="store-file-up"  type="file"   />
                        	</div>
                        <div class="store-up-control">
                        	<a class="ctrl-add"><i class="fa fa-plus"></i></a>
                          <a class="ctrl-remove"><i class="fa fa-minus"></i></a>
                        </div>
                      </div>
                          <?php } ?>
							</div>
                  <!-- image-->  
                  </div> </div>
                       
                       
                     
                       
                       </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Start Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							 <input type="date" id="startdate" name="startdate" placeholder="Enter Start Date"  class="form-control col-md-7 col-xs-12" value="<?php echo $getnewsiden[0]->start_date ?>">
                            
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">End Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
							 <input type="date" id="enddate" name="enddate" placeholder="Enter End Date"  class="form-control col-md-7 col-xs-12" value="<?php echo $getnewsiden[0]->end_date ?>">
                            
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button type="button" class="btn btn-info" id="btnsubmit">Submit</button>
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
  			var url="<?php echo ADMIN_PATH?>news/update";
  			var redirect = "<?php echo ADMIN_PATH?>news";
  			var form = document.forms.namedItem("frmnewsup");                        
			var oData = new FormData(document.forms.namedItem("frmnewsup"));           
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
                                   // 'titleemal':$('#titleemal').val(),
									 'imgfile':$('#imgfile').val(),
									 'startdate':$('#startdate').val(),
									 'enddate':$('#enddate').val()

                                 }

        if(values.titleeen == ''){
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


    
    
   <script>
	$(document).ready(function(e) {
	
	//dynamic wrap	


	
	


	
	
	////////////////////////////end
	
	
	//////image///////////////////////////////////////////

	
			$(document).on('change', '.store-file-up', function(){	
			
	  readURL(this);
	  $elm=$(this).parent().parent();
	  
	 	 	$span = $(this).parent().parent().find('.filename');
        	var filename = $(this).val();
       		filename = filename.replace("C:\\fakepath\\", "");
       		
	   
	  
	  
	  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) { 
			var data = reader.result;
			
		
			
		
			
	 if (data.match(/^data:image\//)) {
		$elm.find('img').show();
            $elm.find('img').attr('src', e.target.result);
			$span.text(filename);
			$elm.find('#oimg').remove();
        } else{
				$elm.find('img').hide();
				alert('select any type of image (jpg,png,jpeg)');
				}
		}
        reader.readAsDataURL(input.files[0]);
    }
}
	  
    });					
			
//image-featured		ctrl-add	


$(document).on('click', '.ctrl-add', function(){	
		$elm=$(this).parent().parent();  
             
			  	$html = '';
			  	$html += '<div class="store-uploader">';
              	$html += '<div class="store-up-image-wrap">';
              	$html += '<img src="" />';
			  	$html +='<div class="uploader" id="uniform-store-file-up">';
  				$html +='<input type="file" name="userfile[]" class="store-file-up" id="store-file-up">';
/*  				$html +='<span class="filename" style="-moz-user-select: none;">No file selected</span>';
 				$html +=' <span class="action" style="-moz-user-select: none;">Choose File</span></div>';
				
*/			  	$html += '</div>';
				$html += '</div>';
			  	$html += '<div class="store-up-control">';
			  	$html += '<a class="ctrl-add"><i class="fa fa-plus"></i></a>';
			  	$html += '<a class="ctrl-remove"></a>';
			  	$html += '</div>';
             	$html += '</div>';
				
				
              $elm.after($html);
		$('.ctrl-remove').html('<i class="fa fa-minus"></i>');
	});
	
	//$elm=$(this).parent().parent(); 
		var len=$('.store-uploader').length;
		if(len >0 )
		{
			$('.ctrl-remove').show();
		}
            //  $elm.remove();
	
	
$(document).on('click', '.ctrl-remove', function(){	

		$elm=$(this).parent().parent(); 
		var len=$('.store-uploader').length;
		if(len == 2 )
		{
			$('.ctrl-remove').remove();
		}
              $elm.remove();
	});

	var len=$('.store-uploader').length;

		if(len >1 )
		{
			$('.ctrl-remove').show();
		}
		else{
			$('.ctrl-remove').hide();
			
			}


	});
	
	///////////////end////////////
	</script>
    





