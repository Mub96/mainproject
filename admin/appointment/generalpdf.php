<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Appointment</title>



  <style type="text/css">
 
 
  .clearfix:after {
                    content: "";
                    display: table;
                    clear: both;
                }
 
  header {
                    padding: 10px 0;
                    /*margin-bottom: 20px;*/
                   
                }
 
 </style>
</head>

<body>

<header class="clearfix">
                <table >
                    <tr>
                        <td style="text-align: left; ">
                         <!-- <img style="height:20px; " src="<?php //echo base_url(); ?>assets/images/logo.png">--> 
                        </td>
                        <!--<td style="background: #ffffff !important;float: right;">
                           hfghfghfghfgh
                        </td>-->
                    </tr>
                </table>
            </header>
             <main>
           
        
              <table border="0" style="width:100%; " >
                       
                        <tr  >
                         <br /> <br /><br />
                        <td style="font-weight:bold;">First name</td>
                        
                         <td style="font-weight:bold;">Last name</td></tr>
                        
                                                  
                                       <tr >
                                      <td><?php echo $appointment['0'] ?></td>
                                       
                                       <td><?php echo $appointment['1'] ?></td> </tr>
                        
                      <tr >
                        <td style="font-weight:bold;">Date of birth</td>
                         
                         <td style="font-weight:bold;">Address</td> </tr>
                         
                                      <tr >
                                       <td><?php echo $appointment['2'] ?></td>
                                       
                                       <td><?php echo $appointment['3'] ?><br />
                                       <?php echo $appointment['4'] ?><br />
                                       <?php echo $appointment['5'] ?><br />
                                       <?php echo $appointment['6'] ?>
                                       
                                       
                                       
                                       </td> </tr>
                                       
                                      
                        <tr >                
                        <td style="font-weight:bold;">Phone Number</td>
                        
                         <td style="font-weight:bold;">Email</td></tr>
                         
                                <tr >
                                       <td><?php echo $appointment['7'] ?></td>
                                       
                                       <td><?php echo $appointment['8'] ?></td> </tr>
                                       
                                        <tr>
                        
                        
                        
                        <tr >                
                        <td style="font-weight:bold;">Best Way of Reaching You</td>
                        
                         <td style="font-weight:bold;">Type of appointment</td></tr>
                        
                                    <tr>
                                       <td><?php echo $appointment['10'] ?></td>
                                       
                                       <td><?php echo $appointment['11'] ?></td> </tr>
                                       
                                        
                                        
                         <tr >                
                        <td style="font-weight:bold;">Reason for Appointment</td>
                        
                         <td style="font-weight:bold;">How did you hear about us?</td></tr>               
                                        
                                         <tr >
                                       <td><?php echo $appointment['12'] ?></td>
                                       
                                       <td><?php echo $appointment['13'] ?></td> </tr>
                                       
                                      
                            <tr >                
                        <td style="font-weight:bold;">If any of the above are checked, please list name or website:</td>
                        
                         <td style="font-weight:bold">Preferred day</td></tr>                    
                                  
                                   <tr style="margin_top:20px;">
                                       <td><?php echo $appointment['14'] ?></td>
                                       
                                       <td><?php echo $appointment['15'] ?></td> </tr>
                                       
                                       
                                       
                                       
                           <tr >                
                        <td style="font-weight:bold;">Preferred time</td>
                        
                        </tr>          
                        
                        
                                    <tr style="margin_top:20px;">
                                       <td><?php echo $appointment['16'] ?></td>
                                       
                                       </tr>
                                       
                        
                          
  
                      </table>
                   </main>












</body>
</html>