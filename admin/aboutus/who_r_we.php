
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
                    <form id="frmspecialities"  class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>admin/aboutus/who_are_we" name="frm">
					  
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         
                          <textarea placeholder="Enter Content" id="editor1" style="width:67%" required   name="content"  > <?php echo $get['content'] ?> </textarea>
                           <span><?php echo form_error('content') ?></span>
                        </div>
                      </div>
                      
                      <input type="hidden" name="id" value="<?php echo $get['id'] ?>" />
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        <button name="btnsubmit" value="submit" type="submit" class="btn btn-info" >Submit</button>
                        <a href="<?php //echo ADMIN_PATH?>facilities" id="btncancel" class="btn btn-info">Cancel</a>
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


    
    





