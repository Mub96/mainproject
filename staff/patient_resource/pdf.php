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
                        <td style="font-weight:bold;">Phone Number</td>
                        
                         <td style="font-weight:bold;">Email</td></tr>
                         
                                <tr >
                                       <td><?php echo $appointment['2'] ?></td>
                                       
                                       <td><?php echo $appointment['3'] ?></td> </tr>
                                       
                                        <tr>
                        
                        
                        
                        <tr >                
                        <td style="font-weight:bold;">Gender</td>
                        
                         <td style="font-weight:bold;">Referred by</td></tr>
                        
                                    <tr>
                                       <td><?php echo $appointment['4'] ?></td>
                                       
                                       <td><?php echo $appointment['5'] ?></td> </tr>
                                       
                                        
                                        
                         <tr >                
                        <td style="font-weight:bold;">Chief Complaint*</td>
                        
                         <td style="font-weight:bold;">Symptoms present for*</td></tr>               
                                        
                                         <tr >
                                       <td><?php echo $appointment['6'] ?></td>
                                       
                                       <td><?php echo $appointment['7'] ?></td> </tr>
                                       
                                      
                           
                                       
                                       
                                       
                          
                                       
                        
                          
  
                      </table>
                   </main>












</body>
</html>