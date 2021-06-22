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
                  
              <a href="<?php echo base_url()?>admin/about/meet_the_staffs" id="btnbutton" class="btn btn-info" style=" color:#FFF;font:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; float:right;"> Add New</a>
               
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">
 <?php if ($this->session->flashdata('msg')) { ?>
                                    <?php echo $this->session->flashdata('msg') ?>
                                <?php } ?>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action" id="datatable">
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">Slno. </th>
                            <th class="column-title">Name</th>
                            <th class="column-title">Designation</th>
                            <th class="column-title">Experience</th>
                             <th class="column-title">Email</th>
                               <th class="column-title">image</th>
                          
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            
                          </tr>
                        </thead>

                        <tbody>
                        <?php if($list){ $i=1;foreach($list as $val){ ?>
						  <tr class="even pointer">
                            <td class=" "><?php echo $i;?></td>
                            <td class=""><?php echo $val['name']?></td>
                                <td class=""><?php echo $val['designation']?></td>
                                 <td class=""><?php echo $val['experience']?></td>
                                  <td class=""><?php echo $val['email']?></td>
                                     <td class=""><img src="<?php echo base_url();?><?php echo $val['image'] ?>" id="imgfiles"  style="border:none;width: 58px;"></td>
                         
                             <td class=" ">
                          
                       
                         <a href="<?php echo base_url();?>admin/about/meet_the_staffs_edit/<?php echo encrypt($val['id']);?>"><i class="fa fa-pencil"></i></a>&nbsp; | &nbsp;
                             
                            
                         <a href="<?php echo base_url();?>admin/about/meet_the_staff_delete/<?php echo encrypt($val['id']);?>" id="btndelete"  ><i class="fa fa-trash"></i></a>
                        
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

    

    





