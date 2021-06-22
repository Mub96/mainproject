<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            </div>
            <div class="clearfix"></div>
            

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $title ?></h2>
                  
              <a href="<?php echo ADMIN_PATH?>support_dept/addsupdepartment" id="btnbutton" class="btn btn-info" style=" color:#FFF;font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; float:right;"> Add New</a>
               
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action" id="datatable">
                        <thead>
                          <tr class="headings">
                            <!--<th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>-->
                            <th class="column-title">Slno. </th>
                            <th class="column-title"> Department Name</th>
                            
                          
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                             <!-- <th class="column-title no-link last"><span class="nobr">Delete</span>
                            </th>
                           <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>-->
                          </tr>
                        </thead>

                        <tbody>
                        <?php if($supdepartments){ $i=1;foreach($supdepartments as $key){  ?>
						  <tr class="even pointer">
                            <td class=" "><?php echo $i;?></td>
                            <td class=""><?php echo $key->support_dept_name;?></td>
                            
                         
                             <td class=" ">
                          
                         <!-- <a href="<?php echo ADMIN_PATH?>department/view/<?php echo $key->dep_id;?>"><i class="fa fa-eye"></i></a>&nbsp; | &nbsp;-->
                           
                             
                         <a href="<?php echo ADMIN_PATH?>support_dept/edit/<?php echo encode($key->support_dept_id);?>"><i class="fa fa-pencil"></i></a>&nbsp; | &nbsp;
                             
                            
                         <a href="javascript:void(0)" id="btndelete"  rel="<?php echo encode($key->support_dept_id);?>"><i class="fa fa-trash"></i></a>
                        
                            </td>
                          </tr>
						 <?php $i=$i+1; }}?>
                      
                        
                        </tbody>
                      </table>
                    </div>
                      <div class="clearfix"></div>
                  </div>
                </div>
              </div>

  <div class="clearfix"></div>
            </div>
        </div>
        <!-- /page content -->

    
<script type="text/javascript">

$(document).ready(function(e) {
   	
	
	
	
	$(document).on('click', '#btndelete', function(){
                var id=$(this).attr('rel');  
				
 		 swal({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  type: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then(function () {
							                    $.ajax({

                                            type:"post",

                          url: "<?php echo ADMIN_PATH ?>support_dept/delete",
					//	 redirect : "<?php echo ADMIN_PATH?>category",

                                            data:"id="+id,

                                            success:function(data){ //alert(data);
											
														swal(
															'Deleted!',
															'Your file has been deleted.',
															'success'
														  )
														location.reload() ;
														

                                 // 	document.location = redirect;
	
											}

				    
});

  
})                    

		
			  
        });
	
	
	
	
	
	
	
	
	
	
});
</script>


    
    





