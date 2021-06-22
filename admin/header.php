<style>

.left_col{
	background:#2b3a40 !important;
	}
.site_title{
    font-size: 13px  !important;
    margin-left: 14px;
}
.site_title span{
	color:#05adad;
}
.nav_title {
    background:#1d2a2f !important;
    height:67px;
}
/*.user-profile img {
    width: 60px !important;
    height: 60px !important;
    border-radius: 50%;
}*/
.nav.side-menu>li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.15);
}
.nav.side-menu>li.current-page, .nav.side-menu>li.active {
    border-right: 5px solid #1ABB9C;
	border:none !important;
    }
.nav.side-menu>li.active>a {
	border-left: 4px solid #16b8be;
    text-shadow: rgba(0,0,0,0.0) 0 -1px 0;
    background:#222d32 !important;
    box-shadow: rgba(0,0,0,0.0) 0 1px 0,inset rgba(255,255,255,0.0) 0 1px 0 !important;
     }
.side-menu li .active{
	background:#222d32;
   }
/*header profile*/
/*.top_nav .nav>li>a:focus, .top_nav .nav>li>a:hover, .top_nav .nav .open>a, .top_nav .nav .open>a:focus, .top_nav .nav .open>a:hover {
    background: transparent !important;
    margin-top: 23px !important;
}
.info-number .badge {
    left: -3px !important;
    top: -2px !important;
}*/
.table-responsive {
    min-height: .01%;
}
.cclass{
	width:50px;
	height:50px;
	border-radius:50%;
	margin-bottom:10px;
}
table.dataTable thead .sorting_asc:after {
    content: "\e155";
}
table.dataTable thead .sorting:after {
    opacity: 0.2;
    content: "\e150";
}


</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <?php header( 'content-type: text/html; charset=utf-8' ); ?>
    <title><?php echo $title; ?>  </title>
 <!-- Bootstrap -->

    <link href="<?php echo ADMIN_STYLEPATH?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
   <!-- Datatables -->
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ADMIN_STYLEPATH?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

 <!-- date time -->

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/datepicker/css/bootstrap-datetimepicker.css">

    <!-- Font Awesome -->
    <link href="<?php echo ADMIN_STYLEPATH?>css/main.css" rel="stylesheet">
  <link href="<?php echo ADMIN_STYLEPATH?>css/sweetalert.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo ADMIN_STYLEPATH?>build/css/custom.min.css" rel="stylesheet">
      <script src="<?php echo ADMIN_STYLEPATH?>vendors/jquery/dist/jquery.min.js"></script>
<script src="<?php echo ADMIN_STYLEPATH?>js/SweetAlert.min.js"></script>
<script src="<?php echo ADMIN_STYLEPATH?>js/ckeditor/ckeditor.js"></script>
     <!-- Sweetalert 2 -->
     <link href="https://cdn.jsdelivr.net/sweetalert2/6.3.3/sweetalert2.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/sweetalert2/6.3.3/sweetalert2.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/sweetalert2/6.3.3/sweetalert2.min.js"></script>

<script src="https://cdn.jsdelivr.net/sweetalert2/6.3.3/sweetalert2.js"></script>

 <script src="<?php echo base_url(); ?>js/moment.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/admin/datepicker/js/bootstrap-datetimepicker.js"></script>


<style>
.table-responsive {
	border:none !important;
}
@media (max-width: 480px){
.dataTables_filter {
    width: 50%;
    float: left  !important;
    text-align: right;
}
div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: 100% !important;
}
.table>thead>tr>th {
    font-size: 12px !important;
}
.table>tbody>tr>td
{
	font-size: 12px !important;
}
.dataTables_filter {
    width: 100%;
    float: left !important;
    text-align: right;
}
.dataTables_length {
    float: left;
    margin-left: 10px;
}
}
</style>

  </head>

  <body class="nav-md" onload="sortList()">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo ADMIN_PATH?>index/home" class="site_title">HOSPITAL - <span>PRO.01</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
           <!-- <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>-->
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu" id="id01">
<?php if( $this->session->userdata('user_type')==1){ ?>
                      <!--<li><a href="<?php //echo ADMIN_PATH?>department"><i class="fa fa-file"></i> Departments <span class="fa fa-chevron-down"></span></a>
                      </li> -->
                     
                      <li><a href="<?php echo ADMIN_PATH?>support_services"><i class="fa fa-adjust"></i> Support Services </a>
                      </li>
                      
                      
                      <li>
               <a href="#"><i class="fa fa-adjust"></i>About<span class="fa fa-chevron-down"></span></a>
                      
                       <ul class="nav child_menu">
                       <li>
                      <a href="<?php echo base_url();?>admin/about">Meet the Doctor </a>
                      </li>
                       <li>
                      <a href="<?php echo base_url();?>admin/about/meet_the_staffs_view">Meet the Staffs </a>
                      </li>
                        <li>
                      <a href="<?php echo base_url();?>admin/about/office">See our office </a>
                      </li>
                      
                      </ul>
                      
                      
                      </li>
                         <li><a href="<?php echo ADMIN_PATH?>specialities"><i class="fa fa-adjust"></i> Procedures </a>
                      </li>
                       <li><a href="<?php echo base_url();?>admin/fasttrack_colon"><i class="fa fa-adjust"></i> Fasttrack Colonoscopy </a>
                      </li>
                      
                      
                      
                      
                      
                      
                      
                      <li><a href="#"><i class="fa fa-adjust"></i> Patient Resources <span class="fa fa-chevron-down"></span> </a>
                       
                       <ul class="nav child_menu">
                        <li>
                      <a href="<?php echo base_url();?>admin/patient_resources/patientlist">Patient Registration</a>
                      </li>
                       <li>
                      <a href="<?php echo base_url();?>admin/patient_resources/appointlist">Appointments</a>
                      </li>
                       <li>
                      <a href="<?php echo base_url();?>admin/patient_resources">New Patient </a>
                      </li>
                       <li>
                      <a href="<?php echo base_url();?>admin/patient_resources/appointment">View Appointments </a>
                      </li>
                      
                      
                      </ul>
                       
                       
                       
                       
                      </li>
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      <li><a href="<?php echo base_url();?>admin/aboutus/who_are_we"><i class="fa fa-adjust"></i> who are we </a>
                      </li>
                      
                      
                      
                      <li>
               <a href="#"><i class="fa fa-adjust"></i>Contact<span class="fa fa-chevron-down"></span></a>
                      
                       <ul class="nav child_menu">
                       <li>
                      <a href="<?php echo ADMIN_PATH?>contactus"> Contact Us </a>
                      </li>
                       <li>
                      <a href="<?php echo base_url();?>admin/contactus/avail_time">Available time </a>
                      </li>
                      
                      
                      </ul>
                      
                      
                      </li>
                      
                      <li><a href="<?php echo base_url();?>admin/appointment"><i class="fa fa-adjust"></i> Appointments Requested </a>
                      </li>
                      
                      <li><a href="<?php echo base_url();?>admin/appointment/general_appointment"><i class="fa fa-adjust"></i> Appointments </a>
                      </li>
                      
                      
                      
                      
                      
                      
                       <li><a href="#"><i class="fa fa-adjust"></i> Insurance <span class="fa fa-chevron-down"></span> </a>
                       
                       <ul class="nav child_menu">
                       <li>
                      <a href="<?php echo base_url();?>admin/insurances"> Content </a>
                      </li>
                       <li>
                      <a href="<?php echo base_url();?>admin/insurances">Image </a>
                      </li>
                      
                      
                      </ul>
                       
                       
                       
                       
                      </li>
                      
                   
                      
                     
                       
                      <?php } ?>
                     <?php if($this->session->userdata('user_type')==3){ ?>
                     
                     <li><a href="#"><i class="fa fa-random"></i>Patient Details<span class="fa fa-chevron-down"></span></a>
                                 <ul class="nav child_menu">
                            <li><a href="<?php echo DOCTOR_PATH?>patient_resources/appointList">Today Appointments</a>
                            </li>
                            <li><a href="<?php echo DOCTOR_PATH?>patient_resources/patientlist">My Patients</a>
                            </li>
                             <li><a href="<?php echo DOCTOR_PATH?>patient_resources/allReports">Reports</a>
                            </li>
                           <!-- <li><a href="<?php echo DOCTOR_PATH?>request">Request History</a>
                            </li>-->
                         </ul>
                          
                      </li>
                      <?php } ?>
                     <?php if($this->session->userdata('user_type')==4){ ?>
                     
                     <li><a href="#"><i class="fa fa-random"></i>Patient Details<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                            <li><a href="<?php echo STAFF_PATH?>patient_resources/reportList">Report Queries</a>
                            </li>
                           <!-- <li><a href="<?php //echo STAFF_PATH?>patient_resources/patientlist">Today Appointments</a>-->
                            </li>
                             <li><a href="<?php echo STAFF_PATH?>patient_resources/allReports">All Reports</a>
                            </li>
                          
                         </ul>
                          
                      </li>
                      <?php } ?>
                    <!--   <li><a href="<?php echo ADMIN_PATH?>employee"><i class="fa fa-user"></i> View Bookings<span class="fa fa-chevron-down"></span></a>
                      </li> 
                      
                     <li><a href="<?php echo ADMIN_PATH?>usergroup"><i class="fa fa-user"></i> Organization Chart
 <span class="fa fa-chevron-down"></span></a>
                      </li>      
                       
                      <li><a href="<?php echo ADMIN_PATH?>employee"><i class="fa fa-user"></i> Create Employee<span class="fa fa-chevron-down"></span></a>
                      </li>     
                              
               <li><a href="#"><i class="fa fa-random"></i>My Request<span class="fa fa-chevron-down"></span></a>
                                 <ul class="nav child_menu">
                            <li><a href="<?php echo ADMIN_PATH?>request/latestrequest">Latest Requests</a>
                            </li>
                            <li><a href="<?php echo ADMIN_PATH?>request/requestadd">Create Request</a>
                            </li>
                             <li><a href="<?php echo ADMIN_PATH?>cashier">Approved Request</a>
                            </li>
                            <li><a href="<?php echo ADMIN_PATH?>request">Request History</a>
                            </li>
                         </ul>
                          
                      </li>
                       
                       <li><a href="<?php echo ADMIN_PATH?>report"><i class="fa fa-file-text"></i>Report<span class="fa fa-chevron-down"></span></a>
                      </li>  
                      <li><a href="<?php echo ADMIN_PATH?>condition"><i class="fa fa-file-text"></i>Workflow Condition<span class="fa fa-chevron-down"></span></a>
                      <li><a href="<?php echo ADMIN_PATH?>field"><i class="fa fa-file-text"></i>Workflow Field<span class="fa fa-chevron-down"></span></a>
                      </li>  
                   
                         <li><a href="<?php echo ADMIN_PATH?>endpoint"><i class="fa fa-file-text"></i>Workflow Endpoint<span class="fa fa-chevron-down"></span></a>
                      </li> 
                     <li><a href="<?php echo ADMIN_PATH?>bank"><i class="fa fa-file-text"></i>Bank<span class="fa fa-chevron-down"></span></a>
                      </li>
                  <li><a href="javascript:void(0);"><i class="fa fa-calendar"></i>Calender<span class="fa fa-chevron-down"></span></a>
                      </li> 
                         
                      <li><a href="<?php echo ADMIN_PATH?>menu"><i class="fa fa-bars"></i>Menu<span class="fa fa-chevron-down"></span></a>
                      </li> -->
                      </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!--<div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" href="<?php   //echo ADMIN_PATH ?>logout" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>-->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo SITE_PATH?><?php echo $this->session->userdata('image')?>" alt=""><?php echo $this->session->userdata('username')?> 
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo SITE_PATH?>profile"> Profile</a></li>
                      <li><?php if($this->session->userdata('admin')=='true'){?><a href="<?php echo SITE_PATH?>admin/resetpassword"> Reset Password</a></li><?php }else {?>
						  
						  <a href="<?php echo SITE_PATH?>resetpassword"> Reset Password</a></li>
						  
						  
				<?php		  }?>
                  <!--  <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>-->
                    <li><a href="<?php echo SITE_PATH?>logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <!--<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>-->
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo ADMIN_STYLEPATH?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo ADMIN_STYLEPATH?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo ADMIN_STYLEPATH?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?php echo ADMIN_STYLEPATH?>images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
<style>
.dash_bord{ padding:6px; background:#F63;}
</style>
<script type="text/javascript">
  function sortList() {/*
	  var list, i, switching, b, shouldSwitch;
  list = document.getElementById("id01");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done: 
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    b = list.getElementsByTagName("LI");
    //Loop through all list-items:
    for (i = 0; i < (b.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*check if the next item should
      switch place with the current item: 
      if (b[i].innerHTML.toLowerCase() > b[i + 1].innerHTML.toLowerCase()) {
        /*if next item is alphabetically
        lower than current item, mark as a switch
        and break the loop: 
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark the switch as done: 
      b[i].parentNode.insertBefore(b[i + 1], b[i]);
      switching = true;
    }
  }
	  
  */}
</script>