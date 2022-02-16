<?php  
     include_once "../../../controller/usersC.php";
     include_once "../../../model/users.php";

  $usersC=new usersC();
  $listUSers=$usersC->afficherusers();

 // define database related variables
 $database = 'santek-3';
 $host = 'localhost';
 $user = 'root';
 $pass = '';

 // try to connect to database
 $db = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

 if(!$db){

    echo "Error in database connection";
 }
$start = 0;  $per_page = 3;
$page_counter = 0;
$next = $page_counter + 1;
$previous = $page_counter - 1;

if(isset($_GET['start'])){
 $start = $_GET['start'];
 $page_counter =  $_GET['start'];
 $start = $start *  $per_page;
 $next = $page_counter + 1;
 $previous = $page_counter - 1;
}

$q = "SELECT * FROM users LIMIT $start, $per_page";
$query = $db->prepare($q);
$query->execute();

if($query->rowCount() > 0){
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
}
// count total number of rows in users table
$count_query = "SELECT * FROM users";
$query = $db->prepare($count_query);
$query->execute();
$count = $query->rowCount();
// calculate the pagination number by dividing total number of rows with per page.
$paginations = ceil($count / $per_page);

  ?>





<!DOCTYPE html>
<html lang="en">
   
<!-- Mirrored from androthemes.com/themes/html/medjestic/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:46:17 GMT -->
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      <title>Medjestic</title>
      <!-- Iconic Fonts -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="../../vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="../../vendors/iconic-fonts/flat-icons/flaticon.css">
      <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins.css">
      <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
      <!-- Bootstrap core CSS -->
      <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
      <!-- jQuery UI -->
      <link href="../../assets/css/jquery-ui.min.css" rel="stylesheet">
      <!-- Page Specific Css (Datatables.css) -->
      <link href="../../assets/css/datatables.min.css" rel="stylesheet">
      <!-- Medjestic styles -->
      <link href="../../assets/css/style.css" rel="stylesheet">

      <!-- Favicon -->
      <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
   </head>
   <body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
      <!-- Setting Panel -->
      <div class="ms-toggler ms-settings-toggle ms-d-block-lg">
         <i class="flaticon-gear"></i>
      </div>
      <div class="ms-settings-panel ms-d-block-lg">
         <div class="row">
            <div class="col-xl-4 col-md-4">
               <h4 class="section-title">Customize</h4>
               <div>
                  <label class="ms-switch">
                  <input type="checkbox" id="dark-mode">
                  <span class="ms-switch-slider round"></span>
                  </label>
                  <span> Dark Mode </span>
               </div>

            </div>
            <div class="col-xl-4 col-md-4">
               <h4 class="section-title">Keyboard Shortcuts</h4>
               <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
               <p class="ms-directions mb-0"><code>Alt + (1 -> 6)</code> Open Quick Bar Tab</p>
               <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>
            </div>
         </div>
      </div>
      <!-- Preloader -->
      <div id="preloader-wrap">
         <div class="spinner spinner-8">
            <div class="ms-circle1 ms-child"></div>
            <div class="ms-circle2 ms-child"></div>
            <div class="ms-circle3 ms-child"></div>
            <div class="ms-circle4 ms-child"></div>
            <div class="ms-circle5 ms-child"></div>
            <div class="ms-circle6 ms-child"></div>
            <div class="ms-circle7 ms-child"></div>
            <div class="ms-circle8 ms-child"></div>
            <div class="ms-circle9 ms-child"></div>
            <div class="ms-circle10 ms-child"></div>
            <div class="ms-circle11 ms-child"></div>
            <div class="ms-circle12 ms-child"></div>
         </div>
      </div>
      <!-- Overlays -->
      <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
      <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
      <!-- Sidebar Navigation Left -->
      <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
         <!-- Logo -->
         <div class="logo-sn ms-d-block-lg">
            <a class="pl-0 ml-0 text-center" href="../../index-2.html"> <img src="../../assets/img/medjestic-logo-216x62.png" alt="logo"> </a>
            <a href="#" class="text-center ms-logo-img-link"> <img src="../../assets/img/dashboard/doctor-3.jpg" alt="logo"></a>
            <h5 class="text-center text-white mt-2">Dr.Samuel</h5>
            <h6 class="text-center text-white mb-3">Admin</h6>
         </div>
         <!-- Navigation -->
         <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
            <!-- Dashboard -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
               <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
               </a>
               <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
                  <li> <a href="../../index-2.html">Medjestic</a> </li>
               </ul>
            </li>
            <!-- /Dashboard -->
            <!-- Doctor -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#doctor" aria-expanded="false" aria-controls="doctor">
               <span><i class="fas fa-stethoscope"></i>Doctor</span>
               </a>
               <ul id="doctor" class="collapse" aria-labelledby="doctor" data-parent="#side-nav-accordion">
                  <li> <a href="../doctor/add-doctor.html">Add Doctor</a> </li>
                  <li> <a href="../doctor/doctor-list.html">Doctor List</a> </li>
               </ul>
            </li>
            <!-- Doctor -->
            <!-- Patient -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#patient" aria-expanded="false" aria-controls="patient">
               <span><i class="fas fa-user"></i>Patient</span>
               </a>
               <ul id="patient" class="collapse" aria-labelledby="patient" data-parent="#side-nav-accordion">
                  <li> <a href="../patient/add-patient.html">Add Patient</a> </li>
                  <li> <a href="../patient/patient-list.html">Patient List</a> </li>
               </ul>
            </li>
            <!-- /Patient -->
            <!-- Department -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#department" aria-expanded="false" aria-controls="department">
               <span><i class="fas fa-sitemap"></i>Department</span>
               </a>
               <ul id="department" class="collapse" aria-labelledby="department" data-parent="#side-nav-accordion">
                  <li> <a href="../department/add-department.html">Add Department</a> </li>
                  <li> <a href="../department/department-list.html">Department List</a> </li>
               </ul>
            </li>
            <!-- /Department -->
            <!-- Schedule -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#schedule" aria-expanded="false" aria-controls="schedule">
               <span><i class="fas fa-list-alt"></i>Doctor Schedule</span>
               </a>
               <ul id="schedule" class="collapse" aria-labelledby="schedule" data-parent="#side-nav-accordion">
                  <li> <a href="../doctor-schedule/add-schedule.html">Add Schedule</a> </li>
                  <li> <a href="../doctor-schedule/schedule-list.html">Schedule List</a> </li>
               </ul>
            </li>
            <!-- /Schedule -->
            <!-- Appointment -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#appointment" aria-expanded="false" aria-controls="appointment">
               <span><i class="far fa-check-square"></i>Appointment</span>
               </a>
               <ul id="appointment" class="collapse" aria-labelledby="appointment" data-parent="#side-nav-accordion">
                  <li> <a href="../appointment/add-appointment.html">Add Appointment</a> </li>
                  <li> <a href="../appointment/appointment-list.html">Appointment List</a> </li>
               </ul>
            </li>
            <!-- /Appointment -->
            <!-- Payment -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#payment" aria-expanded="false" aria-controls="payment">
               <span><i class="fas fa-credit-card"></i>Payment</span>
               </a>
               <ul id="payment" class="collapse" aria-labelledby="payment" data-parent="#side-nav-accordion">
                  <li> <a href="../payment/add-payment.html">Add Payment</a> </li>
                  <li> <a href="../payment/payment-list.html">Payment List</a> </li>
                  <li> <a href="../payment/payment-invoice.html">Payment Invoice</a> </li>
               </ul>
            </li>
            <!-- /Payment -->
            <!-- Report -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#report" aria-expanded="false" aria-controls="report">
               <span><i class="fas fa-file-alt"></i>Report</span>
               </a>
               <ul id="report" class="collapse" aria-labelledby="report" data-parent="#side-nav-accordion">
                  <li> <a href="../report/patient-report.html">Patient Wise Report</a> </li>
                  <li> <a href="../report/doctor-report.html">Doctor Wise Report</a> </li>
                  <li> <a href="../report/total-report.html">Total Report</a> </li>
               </ul>
            </li>
            <!-- /Report -->
            <!-- Human Resource -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#human-resource" aria-expanded="false" aria-controls="human-resource">
               <span><i class="far fa-user-circle"></i>Human Resource</span>
               </a>
               <ul id="human-resource" class="collapse" aria-labelledby="human-resource" data-parent="#side-nav-accordion">
                  <li> <a href="../human-resource/add-employee.html">Add Employee</a> </li>
                  <li> <a href="../human-resource/employee-list.html">Employee List</a> </li>
                  <li> <a href="../human-resource/add-nurse.html">Add Nurse</a> </li>
                  <li> <a href="../human-resource/nurse-list.html">Nurse List</a> </li>
                  <li> <a href="../human-resource/add-pharmacist.html">Add Pharmacist</a> </li>
                  <li> <a href="../human-resource/pharmacist-list.html">Pharmacist List</a> </li>
                  <li> <a href="../human-resource/add-representative.html">Add Representative</a> </li>
                  <li> <a href="../human-resource/representative-list.html">Representative List</a> </li>
               </ul>
            </li>
            <!-- /Human Resource -->
            <!-- Bed -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bed" aria-expanded="false" aria-controls="bed">
               <span><i class="fas fa-bed"></i>Bed Manager</span>
               </a>
               <ul id="bed" class="collapse" aria-labelledby="bed" data-parent="#side-nav-accordion">
                  <li> <a href="../bed-manager/add-bed.html">Add Bed</a> </li>
                  <li> <a href="../bed-manager/bed-list.html">Bed List</a> </li>
               </ul>
            </li>
            <!-- /Bed-->
            <!-- Notice -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#notice" aria-expanded="false" aria-controls="notice">
               <span><i class="far fa-file-alt"></i>Notice</span>
               </a>
               <ul id="notice" class="collapse" aria-labelledby="notice" data-parent="#side-nav-accordion">
                  <li> <a href="../notice/add-notice.html">Add Notice</a> </li>
                  <li> <a href="../notice/notice-list.html">Notice List</a> </li>
               </ul>
            </li>
            <!-- /Notice -->
            <li class="menu-item">
               <a href="../widgets.html">
               <span><i class="material-icons fs-16">widgets</i>Widgets</span>
               </a>
            </li>
            <!-- Basic UI Elements -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#basic-elements" aria-expanded="false" aria-controls="basic-elements">
               <span><i class="material-icons fs-16">filter_list</i>Basic UI Elements</span>
               </a>
               <ul id="basic-elements" class="collapse" aria-labelledby="basic-elements" data-parent="#side-nav-accordion">
                  <li> <a href="../ui-basic/accordions.html">Accordions</a> </li>
                  <li> <a href="../ui-basic/alerts.html">Alerts</a> </li>
                  <li> <a href="../ui-basic/buttons.html">Buttons</a> </li>
                  <li> <a href="../ui-basic/breadcrumbs.html">Breadcrumbs</a> </li>
                  <li> <a href="../ui-basic/badges.html">Badges</a> </li>
                  <li> <a href="../ui-basic/cards.html">Cards</a> </li>
                  <li> <a href="../ui-basic/progress-bars.html">Progress Bars</a> </li>
                  <li> <a href="../ui-basic/preloaders.html">Pre-loaders</a> </li>
                  <li> <a href="../ui-basic/pagination.html">Pagination</a> </li>
                  <li> <a href="../ui-basic/tabs.html">Tabs</a> </li>
                  <li> <a href="../ui-basic/typography.html">Typography</a> </li>
               </ul>
            </li>
            <!-- /Basic UI Elements -->
            <!-- Advanced UI Elements -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#advanced-elements" aria-expanded="false" aria-controls="advanced-elements">
               <span><i class="material-icons fs-16">code</i>Advanced UI Elements</span>
               </a>
               <ul id="advanced-elements" class="collapse" aria-labelledby="advanced-elements" data-parent="#side-nav-accordion">
                  <li> <a href="../ui-advanced/draggables.html">Draggables</a> </li>
                  <li> <a href="../ui-advanced/sliders.html">Sliders</a> </li>
                  <li> <a href="../ui-advanced/modals.html">Modals</a> </li>
                  <li> <a href="../ui-advanced/rating.html">Rating</a> </li>
                  <li> <a href="../ui-advanced/tour.html">Tour</a> </li>
                  <li> <a href="../ui-advanced/cropper.html">Cropper</a> </li>
                  <li> <a href="../ui-advanced/range-slider.html">Range Slider</a> </li>
               </ul>
            </li>
            <!-- /Advanced UI Elements -->
            <li class="menu-item">
               <a href="../animation.html">
               <span><i class="material-icons fs-16">format_paint</i>Animations</span>
               </a>
            </li>
            <!-- Form Elements -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#form-elements" aria-expanded="false" aria-controls="form-elements">
               <span><i class="material-icons fs-16">input</i>Form Elements</span>
               </a>
               <ul id="form-elements" class="collapse" aria-labelledby="form-elements" data-parent="#side-nav-accordion">
                  <li> <a href="../form/form-elements.html">Form Elements</a> </li>
                  <li> <a href="../form/form-layout.html">Form Layouts</a> </li>
                  <li> <a href="../form/form-validation.html">Form Validation</a> </li>
                  <li> <a href="../form/form-wizard.html">Form Wizard</a> </li>
               </ul>
            </li>
            <!-- /Form Elements -->
            <!-- Charts -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#charts" aria-expanded="false" aria-controls="charts">
               <span><i class="material-icons fs-16">equalizer</i>Charts</span>
               </a>
               <ul id="charts" class="collapse" aria-labelledby="charts" data-parent="#side-nav-accordion">
                  <li> <a href="../charts/chartjs.html">Chart JS</a> </li>
                  <li> <a href="../charts/morris-charts.html">Morris Chart</a> </li>
               </ul>
            </li>
            <!-- /Charts -->
            <!-- Tables -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#tables" aria-expanded="false" aria-controls="tables">
               <span><i class="material-icons fs-16">tune</i>Tables</span>
               </a>
               <ul id="tables" class="collapse" aria-labelledby="tables" data-parent="#side-nav-accordion">
                  <li> <a href="basic-tables.html">Basic Tables</a> </li>
                  <li> <a href="data-tables.html">Data tables</a> </li>
               </ul>
            </li>
            <!-- /Tables -->
            <!-- Popups -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#popups" aria-expanded="false" aria-controls="popups">
               <span><i class="material-icons fs-16">message</i>Popups</span>
               </a>
               <ul id="popups" class="collapse" aria-labelledby="popups" data-parent="#side-nav-accordion">
                  <li> <a href="../popups/sweet-alerts.html">Sweet Alerts</a> </li>
                  <li> <a href="../popups/toast.html">Toast</a> </li>
               </ul>
            </li>
            <!-- /Popups -->
            <!-- Icons -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#icons" aria-expanded="false" aria-controls="icons">
               <span><i class="material-icons fs-16">border_color</i>Icons</span>
               </a>
               <ul id="icons" class="collapse" aria-labelledby="icons" data-parent="#side-nav-accordion">
                  <li> <a href="../icons/fontawesome.html">Fontawesome</a> </li>
                  <li> <a href="../icons/flaticons.html">Flaticons</a> </li>
                  <li> <a href="../icons/materialize.html">Materialize</a> </li>
               </ul>
            </li>
            <!-- /Icons -->
            <!-- Maps -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#maps" aria-expanded="false" aria-controls="maps">
               <span><i class="material-icons fs-16">map</i>Maps</span>
               </a>
               <ul id="maps" class="collapse" aria-labelledby="maps" data-parent="#side-nav-accordion">
                  <li> <a href="../maps/google-maps.html">Google Maps</a> </li>
                  <li> <a href="../maps/vector-maps.html">Vector Maps</a> </li>
               </ul>
            </li>
            <!-- /Maps -->
            <!-- Pages -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages">
               <span><i class="material-icons fs-16">insert_drive_file</i>Pages</span>
               </a>
               <ul id="pages" class="collapse" aria-labelledby="pages" data-parent="#side-nav-accordion">
                  <li class="menu-item">
                     <a href="#" class="has-chevron" data-toggle="collapse" data-target="#authentication" aria-expanded="false" aria-controls="authentication">Authentication</a>
                     <ul id="authentication" class="collapse" aria-labelledby="authentication" data-parent="#pages">
                        <li> <a href="../prebuilt-pages/default-login.html">Default Login</a> </li>
                        <li> <a href="../prebuilt-pages/modal-login.html">Modal Login</a> </li>
                        <li> <a href="../prebuilt-pages/default-register.html">Default Registration</a> </li>
                        <li> <a href="../prebuilt-pages/modal-register.html">Modal Registration</a> </li>
                        <li> <a href="../prebuilt-pages/lock-screen.html">Lock Screen</a> </li>
                     </ul>
                  </li>
                  <li> <a href="../prebuilt-pages/coming-soon.html">Coming Soon</a> </li>
                  <li> <a href="../prebuilt-pages/error.html">Error Page</a> </li>
                  <li class="menu-item"> <a href="../prebuilt-pages/faq.html"> FAQ </a> </li>
                  <li class="menu-item"> <a href="../prebuilt-pages/portfolio.html"> Portfolio </a> </li>
                  <li class="menu-item"> <a href="../prebuilt-pages/user-profile.html"> User Profile </a> </li>
                  <li class="menu-item"> <a href="../prebuilt-pages/invoice.html"> Invoice </a> </li>
               </ul>
            </li>
            <!-- /Pages -->
            <!-- Bonus Pages -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#bonus" aria-expanded="false" >
               <span><i class="material-icons fs-16">dashboard</i>Bonus Pages </span>
               </a>
               <ul id="bonus" class="collapse"  data-parent="#side-nav-accordion">
                  <li> <a href="../dashboard/web-analytics.html"> Web Analytics </a> </li>
                  <li> <a href="../dashboard/social-media.html">Social Media Management</a> </li>
                  <li> <a href="../dashboard/project-management.html">Department Management</a> </li>
                  <li> <a href="../dashboard/client-management.html">Patient Management</a> </li>
               </ul>
            </li>
            <!-- /Bonus Pages -->
            <!-- Apps -->
            <li class="menu-item">
               <a href="#" class="has-chevron" data-toggle="collapse" data-target="#apps" aria-expanded="false" aria-controls="apps">
               <span><i class="material-icons fs-16">phone_iphone</i>Apps</span>
               </a>
               <ul id="apps" class="collapse" aria-labelledby="apps" data-parent="#side-nav-accordion">
                  <li> <a href="../apps/chat.html">Chat</a> </li>
                  <li> <a href="../apps/email.html">Email</a> </li>
                  <li> <a href="../apps/to-do-list.html">To-do List</a> </li>
               </ul>
            </li>
            <!-- /Apps -->
         </ul>
      </aside>
      <!-- Sidebar Right -->
 
      <main class="body-content">
      
         <!-- Body Content Wrapper -->
         <div class="ms-content-wrapper">
            <div class="row">
               <div class="col-md-12">
            
               <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
      <br>
      <br>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
               <table class="table table-striped table-advance table-hover">
              <label>Recherche:<input id="myInput"  type="text"name="rechercher" class="form-control input-sm" placeholder="" aria-controls="DataTables_Table_1"></label>
                             
                <h4><i class="fa fa-angle-right"></i> User Table</h4>
                <hr>
                <thead>
                                        <tr>
                                        <th>username</th>
                                        <th>password </th>
                                 
                                    
                                        <th>action</th>

                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                                 
                                                 <?php      foreach ($listUSers as $row) {?>
                                     <tr class="tr-shadow">
                                        
                                    
                                                            
                                         <td>
                                         <?php echo $row['username']; ?>
                                         </td>
                                         <td ><?PHP echo $row['password']; ?></td>
                                       
                                       
                                       
                                       
                                         <td>
                                         <form
                                  method="POST" action="supprimerUser.php">
                        <input type="submit" name="supprimer" value="supprimer">
                        <input type="hidden" value=<?PHP echo $row['id']; ?> name="id">
                    
                       
                               </form>
                                                             </td>
                                                             <tr class="spacer"></tr>
                                                            
                                                         </tr>
                                                     
                                              
                                                         <?php
                                   }
                                   ?>
                                               
                                               
                                             </tbody>
                                         </table>
                                         <center>
            <ul class="pagination">
               <style>
                  .pagination {
    display: -ms-flexbox;
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: .25rem;
    margin-left: 500px;
}                  </style>
            <?php
                if($page_counter == 0){
                    echo "<li><a href=?start='0' class='active'>0</a></li>";
                    for($j=1; $j < $paginations; $j++) { 
                      echo "<li><a href=?start=$j>".$j."</a></li>";
                   }
                }else{
                    echo "<li><a href=?start=$previous>Previous</a></li>"; 
                    for($j=0; $j < $paginations; $j++) {
                     if($j == $page_counter) {
                        echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
                     }else{
                        echo "<li><a href=?start=$j>".$j."</a></li>";
                     } 
                  }if($j != $page_counter+1)
                    echo "<li><a href=?start=$next>Next</a></li>"; 
                } 
            ?>
            </ul>
            </center> 
            
            <!-- /content-panel -->
               </div>
            </div>
         </div>
      </main>
  
      
   

    


    
      <!-- SCRIPTS -->
      <!-- Global Required Scripts Start -->
      <script src="../../assets/js/jquery-3.3.1.min.js"></script>
      <script src="../../assets/js/popper.min.js"></script>
      <script src="../../assets/js/bootstrap.min.js"></script>
      <script src="../../assets/js/perfect-scrollbar.js"> </script>
      <script src="../../assets/js/jquery-ui.min.js"> </script>
      <!-- Global Required Scripts End -->
      <!-- Page Specific Scripts Start -->
      <script src="../../assets/js/datatables.min.js"> </script>
      <script src="../../assets/js/data-tables.js"> </script>
      <!-- Page Specific Scripts End -->
      <!-- Medjestic core JavaScript -->
      <script src="../../assets/js/framework.js"></script>
      <!-- Settings -->
      <script src="../../assets/js/settings.js"></script>
   </body>

<!-- Mirrored from androthemes.com/themes/html/medjestic/pages/tables/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:46:17 GMT -->
</html>