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
                  
              <a href="<?php echo base_url()?>admin/insurances/add" id="btnbutton" class="btn btn-info" style=" color:#FFF;font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; float:right;"> Add New</a>
               
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action" id="datatable">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Slno. </th>
                            <th class="column-title"> Procedures Title</th>
                            
                          
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        <?php //if($list){ $i=1;foreach($list as $val){  ?>
						  <tr class="even pointer">
                            <td class=" "><?php //echo $i;?></td>
                            <td class=""><?php //echo $val['title']?></td>
                            
                         
                             <td class=" ">
                          
                       
                         <a href="<?php //echo base_url();?>admin/fasttrack_colon/edit/<?php //echo encrypt($val['fasttrack_id']);?>"><i class="fa fa-pencil"></i></a>&nbsp; | &nbsp;
                             
                            
                         <a href="<?php //echo base_url();?>admin/fasttrack_colon/remove/<?php //echo encrypt($val['fasttrack_id']);?>" id="btndelete"  ><i class="fa fa-trash"></i></a>
                        
                            </td>
                          </tr>
						 <?php //$i=$i+1; }}?>
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

    

    





