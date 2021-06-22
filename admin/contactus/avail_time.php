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
		
		
		
.clockpicker-popover .popover-header {

align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background-color: #e8ecf1 !important;
    color: #337ab7 !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    font-size: 3rem;
    font-weight: 400;
    letter-spacing: normal;
    text-align: center;
    padding: .5rem;
    border-top-left-radius: 4px;
    border-top-right-radius: 4px;
	
}		
		
		
		
		
								
</style>


<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/djibe/clockpicker@1d03466e3b5eebc9e7e1dc4afa47ff0d265e2f16/dist/bootstrap4-clockpicker.min.css">
<script src="https://cdn.jsdelivr.net/gh/djibe/clockpicker@6d385d49ed6cc7f58a0b23db3477f236e4c1cd3e/dist/bootstrap4-clockpicker.min.js"> </script>-->


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
                    
                    
                    <form id="frmnews"  class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/contactus/avail_time" name="frmnews">
			
			
           
            
         
            
			<div class="table-responsive" >
                      <table class="table table-striped jambo_table bulk_action" >
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Day </th>
                            <th class="column-title">Time from</th>
                             <th class="column-title">Time to</th>
                          
                         
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        <?php foreach($day as $key=>$val) {
							 ?>
						  <tr class="even pointer">
                         
                          
                        <input type="hidden" name="day[]" value="<?php echo $key ?>" />
                            <td class=" "><?php echo $key; ?></td>
                            <td class="">
                              <div class="input-group">
                             <input type="text" name="stime_<?php echo $key; ?>" class="form-control datetimepicker" id="stime_" value="<?php echo $val['start_time'] ?>" > <div class="input-group-addon"><i class="fa fa-clock-o"></i>
                                                                            
                               </div></div>                                         
                            </td>
                             <td class="">
                             <div class="input-group">
                              <input type="text" name="etime_<?php echo $key; ?>" class="form-control datetimepicker" id="etime_" value="<?php echo $val['end_time'] ?>" ><div class="input-group-addon"><i class="fa fa-clock-o"></i>
                                                                            
                               </div></div>
                             
                             </td>
                         
                             
                          </tr><?php } ?>
						
                        </tbody>
                      </table>
                    </div>
            
			
            
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button type="submit" name="submit" value="submit" class="btn btn-info" id="btnsubmit">Submit</button>
                      <!--  <a href="<?php //echo ADMIN_PATH?>news" id="btncancel" class="btn btn-info">Cancel</a>-->
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
/*$('.clockpicker').clockpicker({
'default': 'now',
vibrate: true,
placement: "top",
align: "left",
autoclose: false,
twelvehour: true
});
*/


$('.datetimepicker').datetimepicker({
			format: 'LT'
		});




</script>




