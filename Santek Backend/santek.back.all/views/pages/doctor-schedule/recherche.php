<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from androthemes.com/themes/html/medjestic/pages/doctor-schedule/add-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:45:29 GMT -->
<head>
  <style>
#button5{
	background-color: #555555;
	height: 50px;
	width: 150px;
} </style>
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
        <!-- Page Specific CSS (Slick Slider.css) -->
        <link href="../../assets/css/slick.css" rel="stylesheet">
        <!-- Medjestic styles -->
        <link href="../../assets/css/style.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
        <style>
            body{
                margin:0;
                color:#444;
                background-color:#98c2c2;
                font:300 18px/18px Roboto, sans-serif;
                transition:background .4s ease-in-out 0s;
            }
            *,:after,:before{box-sizing:border-box}
            {background-color: #039BE5;}
            .pull-left{float:left}
            .pull-right{float:right}
            .clearfix:after,.clearfix:before{content:'';display:table}
            .clearfix:after{clear:both;display:block}
            
            .calendar{width:300px;font-size:100%;margin:50px auto 0;perspective:1000px;cursor:default;position:relative}
            .calendar .header{height:100px;position:relative;color:#fff}
            .calendar .header .text{position:absolute;top:0;left:0;right:0;bottom:0;background-color:#308ff0;padding:15px;transform:rotateX(90deg);transform-origin:bottom;backface-visibility:hidden;transition:.4s ease-in-out 0s;box-shadow:0 6px 20px 0 rgba(0,0,0,.19), 0 8px 17px 0 rgba(0,0,0,.2);opacity:0}
            .calendar .header .text>span{text-align:center;padding:26px;display:block}
            .calendar .header.active .text{transform:rotateX(0deg);opacity:1}
            .months{width:100%;height:280px;position:relative}
            .months .hr{height:1px;margin:15px 0;background:#ccc}
            .month{padding:15px;width:inherit;height:inherit;background:#fff;position:absolute;backface-visibility:hidden;transition:all .4s ease-in-out 0s;box-shadow:0 6px 20px 0 rgba(0,0,0,.19),0 8px 17px 0 rgba(0,0,0,.2)}
            .months[data-flow="left"] .month{transform:rotateY(-180deg)}
            .months[data-flow="right"] .month{transform:rotateY(180deg)}
            .table{width:100%;font-size:10px;font-weight:400;display:table}
            .table .row{display:table-row}
            .table .row.head{color:#308ff0;text-transform:uppercase}
            .table .row .cell{width:14.28%;padding:5px;text-align:center;display:table-cell}
            .table .row .cell.disable{color:#ccc}
            .table .row .cell span{display:block;width:28px;height:28px;line-height:28px;transition:color,background .4s ease-in-out 0s}
            .table .row .cell.active span{color:#fff;background-color:#308ff0}
            .months .month[data-active="true"]{transform:rotateY(0)}
            .header [data-action]{color:inherit;position:absolute;top:50%;margin-top:-20px;width:40px;height:40px;z-index:1;opacity:0;transition:all .4s ease-in-out 0s}
            .header [data-action]>i{width:20px;height:20px;display:block;position:absolute;left:50%;top:50%;margin-top:-10px;margin-left:-10px}
            .header [data-action]>i:before,.header [data-action]>i:after{top:50%;margin-top:-1px;content:'';position:absolute;height:2px;width:20px;border-top:2px solid;border-radius:2px}
            .header [data-action*="prev"]{left:15px}
            .header [data-action*="next"]{right:15px}
            .header [data-action*="prev"]>i:before,.header [data-action*="prev"]>i:after{left:0}
            .header [data-action*="prev"]>i:before{top:3px;transform:rotate(-45deg)}
            .header [data-action*="prev"]>i:after{top:auto;bottom:3px;transform:rotate(45deg)}
            .header [data-action*="next"]>i:before,.header [data-action*="next"]>i:after{right:0}
            .header [data-action*="next"]>i:before{top:auto;bottom:3px;transform:rotate(-45deg)}
            .header [data-action*="next"]>i:after{top:3px;transform:rotate(45deg)}
            .header.active [data-action]{opacity:1}
            /*.calendar.body[data-action="false"]{background-color:#2bff00}*/
            
            [data-theme="jan"]{background-color:#90CAF9}
            [data-theme="jan"] .row.head{color:#1E88E5}
            [data-theme="jan"] .header .text,
            [data-theme="jan"] .table .row .cell.active span{background-color:#1E88E5}
            
            [data-theme="feb"]{background-color:#81D4FA}
            [data-theme="feb"] .row.head{color:#039BE5}
            [data-theme="feb"] .header .text,
            [data-theme="feb"] .table .row .cell.active span{background-color:#039BE5}
            
            [data-theme="mar"]{background-color:#80CBC4}
            [data-theme="mar"] .row.head{color:#00897B}
            [data-theme="mar"] .header .text,
            [data-theme="mar"] .table .row .cell.active span{background-color:#00897B}
            
            [data-theme="apr"]{background-color:#C5E1A5}
            [data-theme="apr"] .row.head{color:#7CB342}
            [data-theme="apr"] .header .text,
            [data-theme="apr"] .table .row .cell.active span{background-color:#7CB342}
            
            [data-theme="may"]{background-color:#FFE082}
            [data-theme="may"] .row.head{color:#FFB300}
            [data-theme="may"] .header .text,
            [data-theme="may"] .table .row .cell.active span{background-color:#FFB300}
            
            [data-theme="jun"]{background-color:#FFAB91}
            [data-theme="jun"] .row.head{color:#F4511E}
            [data-theme="jun"] .header .text,
            [data-theme="jun"] .table .row .cell.active span{background-color:#F4511E}
            
            [data-theme="jul"]{background-color:#CE93D8}
            [data-theme="jul"] .row.head{color:#8E24AA}
            [data-theme="jul"] .header .text,
            [data-theme="jul"] .table .row .cell.active span{background-color:#8E24AA}
            
            [data-theme="aug"]{background-color:#B39DDB}
            [data-theme="aug"] .row.head{color:#5E35B1}
            [data-theme="aug"] .header .text,
            [data-theme="aug"] .table .row .cell.active span{background-color:#5E35B1}
            
            [data-theme="sep"]{background-color:#EF9A9A}
            [data-theme="sep"] .row.head{color:#E53935}
            [data-theme="sep"] .header .text,
            [data-theme="sep"] .table .row .cell.active span{background-color:#E53935}
            
            [data-theme="oct"]{background-color:#CE93D8}
            [data-theme="oct"] .row.head{color:#8E24AA}
            [data-theme="oct"] .header .text,
            [data-theme="oct"] .table .row .cell.active span{background-color:#8E24AA}
            
            [data-theme="nov"]{background-color:#BCAAA4}
            [data-theme="nov"] .row.head{color:#6D4C41}
            [data-theme="nov"] .header .text,
            [data-theme="nov"] .table .row .cell.active span{background-color:#6D4C41}
            
            [data-theme="dec"]{background-color:#B0BEC5}
            [data-theme="dec"] .row.head{color:#546E7A}
            [data-theme="dec"] .header .text,
            [data-theme="dec"] .table .row .cell.active span{background-color:#546E7A}
            </style>
    
    </head>

<body>

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12 col-md-12 col-sm-12">
           <div id='cssmenu'>
<ul>
   <li><a href='add-schedule.html'>Ajouter un évenement</a></li>
   <li><a href='afficherEvent.php'>Afficher tous les évenements</a></li>
   <li><a href='modifierEvent.php'>Modifier un évenement</a></li>
   <li><a href='afficherEventri.php'>Trier les évenements</a></li>
   <li class='active' ><a>Chercher un évenement</a></li>
   <li><a href="statutEvent.php">Vos Evenements</a></li>

   
</ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

  <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../../css/style.css" rel="stylesheet">
  <link href="../../css/style-responsive.css" rel="stylesheet">
  <link href="../../css/stylePromos.css" rel="stylesheet">
  <!---Animated Icons---->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>

 </head>
  <div class="container box">
   <br />
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>id event</th>
       <th>nom event</th>
       <th>lieu event</th>
       <th>date début</th>
       <th>date fin</th>

      </tr>
     </thead>
    </table>
   </div>
  </div>
  <br />
  <br />
  <style type="text/css"> </style>


</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  $('#customer_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "ajax" : {
    url:"fetch.php",
    type:"POST"
   },
   dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'pdf', 'copy'
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
  });
  
 });
 
</script>
 

</form>
</div>
</div>
</section>
</section>
</section>

    
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script src="../controle.js"></script>
</body>

</html>

  
  