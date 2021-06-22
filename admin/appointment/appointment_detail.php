
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
                    <form id="frmspecialities" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="post" action="#" name="frm">
					
                   
                      <div class="row">
                       <div class="form-group">
                      <div class="col-md-6">
                      
                        <label>First name</label>
                         <input type="text" id="titleeen" name="titleeen"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['0'] ?>">
                        
                       </div>
                       <div class="col-md-6">
                        <label>Second name</label>
                        <input type="text" id="titleeen" name="titleeen"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['1'] ?>">
                       </div>
                       </div>
                      </div>
                      
                      
                      <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Phone number</label>
                        <input type="text" id="titleeen" name="titleeen"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['2'] ?>">
                       </div>
                       <div class="col-md-6">
                         <label>Email</label>
                          <input type="text" id="titleeen" name="titleeen"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['3'] ?>">
                       </div>
                       </div>
                      </div>
                      
                       <div class="row">
                       <div class="form-group">
                      <div class=" col-md-6">
                        <label>Gender</label><br />
                        <input <?php if($appointment['4']=='Male') echo 'checked=checked'; ?> type="radio" id="Male" name="Gender" value="Male" />Male
                        <input <?php if($appointment['4']=='Female') echo 'checked=checked'; ?>  type="radio" id="Female" name="Gender" value="Female"/>Female
                       </div>
                       <div class="col-md-6">
                         <label>Date of Birth</label>
                           <input type="text"    class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['5'] ?>">
                       </div>
                       </div>
                      </div>
                      
                      <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Height in inches</label>
                        <input type="text"    class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['6'] ?>">
                       </div>
                       <div class="col-md-6">
                         <label>Weight in Pounds</label>
                          <input type="text"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['7'] ?>">
                       </div>
                       </div>
                      </div>
                      
                      <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Primary care Doctor</label>
                        <input type="text"    class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['8']  ?>">
                       </div>
                       <div class="col-md-6">
                         <label>Pharmacy name</label>
                          <input type="text"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['9']  ?>">
                       </div>
                       </div>
                      </div>
                      
                       <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Insurance carrier</label>
               <input type="text"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['10']  ?>">
                       </div>
                       <div class="col-md-6">
                         <label>Member Id</label>
                          <input type="text" id="titleeen" name="titleeen"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['11'] ?>">
                       </div>
                       </div>
                      </div>
                      
                        <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Group Id</label>
                        <input type="text" id="titleeen" name="titleeen"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['12'] ?>">
                       </div>
                       <div class="col-md-6">
                         <label>Name of insured</label>
                          <input type="text" id="titleeen" name="titleeen"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['13'] ?>">
                       </div>
                       </div>
                      </div>
                      
                      
                      
                      <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Insured date of birth</label>
                        <input type="text"    class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['14'] ?>">
                       </div>
                       <div class="col-md-6">
                         <label>Relationship</label>
                          <input type="text"    class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['15'] ?>">
                       </div>
                       </div>
                      </div>
                      
                       <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Insurance customer service phone</label>
                        <input type="text"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['16'] ?>">
                       </div>
                       <div class="col-md-6">
                         <label>Have you had Colonoscopy in the past?</label><br />
                         <input <?php if($appointment['17']=='yes') echo 'checked=checked';?> type="radio" id="rdbYes" name="colonoscopy_inpast" value="yes" />Yes
                           <input <?php if($appointment['17']=='no') echo 'checked=checked';?> type="radio" id="rdbno" name="colonoscopy_inpast" value="no"/>No
                       </div>
                       </div>
                      </div>
                      
                        <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>If yes, where and when was it performed?</label>
                        <input type="text"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['18'] ?>">
                       </div>
                       <div class="col-md-6">
                         <label>What were the results of the prior exam?</label></br>
                         
                         <?php if($appointment['19']!='' && count($appointment['19']>0)) { 
						 
						 $chkexam=explode(',',$appointment['19']);
						 }
						 else
						 {
							$chkexam=array($appointment['19']);
							 }
						
						  
						 ?>
                         
                                    <input <?php if(in_array('Polyps',$chkexam)) echo 'checked=checked'; ?>  type="checkbox" name="chkprior_exam[]" id="chkpol" value="Polyps" />Polyps 									
                                    <input <?php if(in_array('Cancer',$chkexam)) echo 'checked=checked'; ?> type="checkbox" name="chkprior_exam[]" id="chkcan" value="Cancer" />Cancer 									
                                    <input <?php if(in_array('Ulcerative Colitis',$chkexam)) echo 'checked=checked'; ?> type="checkbox" name="chkprior_exam[]" id="chkulc" value="Ulcerative Colitis "/>Ulcerative Colitis
                                    <input <?php if(in_array("Crohn's Disease",$chkexam)) echo 'checked=checked'; ?>  type="checkbox" name="chkprior_exam[]" id="chkcro" value="Crohn's Disease" />Crohn's Disease
                                    <input type="text"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['20'] ?>">
                       </div>
                       </div>
                      </div>
                      
                      
                      
                      
                      
                      <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                        <?php if($appointment['21']!='' && count($appointment['21']>0)) { 
						 
						 $chkcolon=explode(',',$appointment['21']);
						 }
						 else
						 {
							$chkcolon=array($appointment['21']);
							 }
						
						  
						 ?>
                       <label>Do you have a family history of Colon Cancer or Colon Polyps?</label><br />
                       
                 <input <?php if(in_array('Colon Canceer',$chkcolon)) echo 'checked=checked'; ?>  type="checkbox" name="colon[]" id="colon" value="Colon Canceer" />Colon Canceer
                  			                 
                                             
       <input <?php if(in_array('Colon Polyps',$chkcolon)) echo 'checked=checked'; ?> type="checkbox" name="colon[]" id="colon" value="Colon Polyps" />Colon Polyps
                 <input <?php if(in_array('None',$chkcolon)) echo 'checked=checked'; ?> type="checkbox" name="colon[]" id="colon" value="None"/>None
                       </div>
                       <div class="col-md-6">
                        <label>If you have a family history of Colon Cancer or Colon Polyps, which relatives were diagnosed?</label></br>
              <input type="text" id="titleeen" name="titleeen"   class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['22'] ?>">
                       </div>
                       </div>
                      </div>
                      
                      
                         
                      <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Are you allergic to any medications?</label></br>
                  <input <?php if($appointment['23']=='yes') echo 'checked=checked'; ?> type="radio" id="rdbYes" name="allergic" value="yes"/>Yes
                  <input <?php if($appointment['23']=='no')echo 'checked=checked'; ?> type="radio" id="rdbNo" name="allergic" value="no" />No
                       </div>
                       <div class="col-md-6">
                         <label>If you have any drug allergies, please list them below (Include any latex or tape allergies)</label></br>
             <textarea  id="drug_allergies" name="drug_allergies" class="form-control col-md-7 col-xs-12" readonly="readonly"><?php echo $appointment['24'] ?></textarea>
                       </div>
                       </div>
                      </div>
                      
                      
                      
                      
                       <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                      <label>Do you take any medication(s) that thin your blood like the ones listed below?</label></br>
                      
                      <?php if($appointment['25']!='' && count($appointment['25']>0)) { 
						 
						 $chk=explode(',',$appointment['25']);
						 }
						 else
						 {
							$chk=array($appointment['25']);
							 }
						
						  
						 ?>
                      
                   <input <?php if(in_array('None',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkpol"  value="None"/>None 								                    <input <?php if(in_array('Aspirin',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkcan" value="Aspirin" />Aspirin 								                  <input <?php if(in_array('Plavix',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkulc" value="Plavix" />Plavix (Clopidogrel) 
                   <input <?php if(in_array('Effient',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkcro" value="Effient"/>Effient
                   <input <?php if(in_array('Brilinta',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkcro" value="Brilinta" />Brilinta
                   <input <?php if(in_array('Coumadin',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkcro" value="Coumadin" />Coumadin (Warfarin) 
                   
                   <input <?php if(in_array('Xarelto',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkcro" value="Xarelto" />Xarelto
                    
                  <input <?php if(in_array('Pradaxa',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkcro" value="Pradaxa" />Pradaxa 
                  <input <?php if(in_array('Eliquis',$chk)) echo 'checked=checked'; ?> type="checkbox" name="chkmedication[]" id="chkcro" value="Eliquis" />Eliquis 
                  
                   <input type="text" name="medication" id="medication" class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['26'] ?>"/>
                       </div>
                       <div class="col-md-6">
                         <label>Name of the physician who prescribed the medication</label> </br>
              <input type="text"  class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo $appointment['27'] ?>"/>
                       </div>
                       </div>
                      </div>
                      
                      
                      
                       
                       <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                      <label>Please list all medications below including any over-the-counter medications, natural medications, vitamins and supplements</label></br>
                  <textarea id="medication_list" name="medication_list" class="form-control col-md-7 col-xs-12"readonly="readonly" ><?php echo  $appointment['28'] ?></textarea>
                       </div>
                       <div class="col-md-6">
                        <label>Are you currently experiencing or recently experienced any symptoms such as weight loss, abdominal (belly) pain, blood in the stool, black stool, heartburn requiring regular use of medicines, constipation, diarrhea or any change in your bowel habits?</label></br> </br>
             <input <?php if($appointment['29']=='yes'){ echo 'checked=checked';} ?> type="radio" id="rdbYes" name="any_symptoms" value="yes" />Yes
             <input <?php if($appointment['29']=='no'){ echo 'checked=checked';} ?> type="radio" id="rdbNo" name="any_symptoms" value="no" />No
                       </div>
                       </div>
                      </div>
                      
                      
                      
                       <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                       <label>Have you ever been told that you are anemic? (have a low blood count)</label></br>
                <input <?php if($appointment['30']=='yes'){ echo 'checked=checked';} ?>  type="radio"  value="yes" />Yes
                <input <?php if($appointment['30']=='no'){ echo 'checked=checked';} ?> type="radio" id="rdbNo"  value="no" />No
                       </div>
                       <div class="col-md-6">
                        <label>If yes, what was the last hemoglobin level (red cell count)</label> </br>
<input type="text"  class="form-control col-md-7 col-xs-12" readonly="readonly" value="<?php echo  $appointment['31'] ?>"/>
                       </div>
                       </div>
                      </div>
                      
                      
                        <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                         <label>Do you have a pacemaker or implanted defibrillator device?</label></br>
                <input <?php if($appointment['32']=='yes'){ echo 'checked=checked';} ?> type="radio" id="rdbYes"  value="yes" />Yes
                <input <?php if($appointment['32']=='no'){ echo 'checked=checked';} ?> type="radio" id="rdbNo"  value="no" />No
                       </div>
                       <div class="col-md-6">
                        <label>Have you ever been diagnosed with an Inflammatory Bowel Disease such as Crohn's Disease or Ulcerative Colitis?</label> </br>
              <input <?php if($appointment['33']=='yes'){ echo 'checked=checked';} ?> type="radio" id="rdbinYes" name="inflammatory_bowel" value="yes" />Yes
              <input <?php if($appointment['33']=='no'){ echo 'checked=checked';} ?> type="radio" id="rdbinNo" name="inflammatory_bowel" value="no" />No
                       </div>
                       </div>
                      </div>
                      
                      
                      
                        <div class="row">
                       <div class="form-group">
                      <div class=" form-style col-md-6">
                          <label>Have you had any of the following medical conditions?</label></br>
                           
                      <?php if($appointment['34']!='' && count($appointment['34']>0)) { 
						 
						 $chkmd=explode(',',$appointment['34']);
						 }
						 else
						 {
							$chkmd=array($appointment['34']);
							 }
						
						  
						 ?>
                      
                          
                          
      <input <?php if(in_array('Stent Placement',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Stent Placement" />Stent Placement
   <input <?php if(in_array('Heart Attack',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Heart Attack" />Heart Attack (MI), Congestive heart Failure (CHF) or Arrhythmia (Irregular Heartbeat) 
 <input <?php if(in_array('Seizures or Fainting Spells',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Seizures or Fainting Spells" />Seizures or Fainting Spells 
     <input <?php if(in_array('Stroke',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Stroke" />Stroke 
                                    <input <?php if(in_array('COPD',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="COPD" />Sleep Apnea or other chronic respiratory illness such as Asthma, COPD or Emphysema 
                                    <input <?php if(in_array('Diabetes',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Diabetes" />Diabetes 
                                    <input <?php if(in_array('Thyroid',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Thyroid" />Thyroid Disorders 
                                    <input <?php if(in_array('Obesity',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Obesity" />Obesity 
                                    <input <?php if(in_array('Kidney Disease',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Kidney Disease" />Kidney Disease with or with out Dialysis 
                                    <input <?php if(in_array('Organ Transplant',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Organ Transplant" />Organ Transplant
                                    <input  <?php if(in_array('Cancers',$chkmd)) echo 'checked=checked'; ?> type="checkbox" name="chkcro[]" id="chkcro" value="Cancers" />Cancers or leukemia
                       </div>
                       
                       </div>
                      </div>
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">   
                        
                        <!--<a href="<?php //echo ADMIN_PATH?>facilities" id="btncancel" class="btn btn-info">Cancel</a>-->
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
  			var url="<?php echo base_url()?>admin/fasttrack_colon/addfasttrack";
  			//var redirect = "<?php //echo ADMIN_PATH?>specialities";
  			var form = document.forms.namedItem("frm");                        
			var oData = new FormData(document.forms.namedItem("frm"));           
            var oReq = new XMLHttpRequest();
                oReq.open("POST", url,  true);   
                oReq.onload = function(oEvent) { //alert(oReq.responseText);
					
				 if(oReq.responseText==1){
					// alert("Exist");
					swal("Already Exist!", "Exist!", "error")
					  //alert("Exist");
				 }
					 else
					 {
					 swal("Sucessfully!", "Sucessfully Added!", "success")
 					 //document.location = redirect;
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
									 'imgfile':$('#imgfile').val(),

                                 }

        if(values.titleeen == ''){
            $('#titleeen').addClass('errors');
            $('#titleeen').attr("placeholder", "Please enter Title in English")
			$('#titleeen').css({'border':'1px solid red'});
		    $('#titleeen').addClass('errorInput');
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


    
    





