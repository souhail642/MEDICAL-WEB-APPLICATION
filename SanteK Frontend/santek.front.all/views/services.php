

<!doctype html>
<html>


<!-- Mirrored from www.smartpixel.tech/smartmed/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:38:20 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
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

    <title>SanteK </title>

    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-180x180.png">
    <meta name="msapplication-TileImage" content="mstile.png">
    <meta name="msapplication-TileColor" content="#02a9ff">
    <meta name="theme-color" content="#02a9ff">

    <!-- FONTS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">

    <!-- JUSTICE ICONS -->
    <link rel="stylesheet" href="assets/fonts/smartmed-icons/css/smartmed-icons.min.css">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css">

    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.min.css">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="assets/plugins/ytplayer/css/jquery.mb.ytplayer.min.html">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="assets/plugins/animations/animate.min.css">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/pages-style.css">

    <!-- THEME OPTIONS -->
    <link rel="stylesheet" href="assets/plugins/theme-options/theme-options.css">

    <!-- ALTERNATIVE STYLES -->
    <link rel="stylesheet" href="#" data-style="styles">


</head>

<body class="sticky-header header-classic footer-parallax">

    <div id="main-container">

        <!-- HEADER -->
        <header id="header">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">

                        <!-- LOGO -->
                        <div id="logo">
                            <a href="index-2.html">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                        </div><!-- LOGO -->

                    </div><!-- col -->
                    <div class="col-md-9">

                        <!-- MENU -->
                        <nav>

                            <a class="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>

                            <ul class="menu clearfix" id="menu">
                                <li class="dropdown">
                                    <a href="index-2.html">Acceuil</a>
                                    <ul>
                                        <li><a class="waves" href="index-2.html">Acceuil 1</a></li>
                                        <li><a class="waves" href="index-3.html">Acceuil 2</a></li>
                                        <li><a class="waves" href="index-4.html">Acceuil 3</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="about.html">A propos</a>
                                    <ul>
                                        <li><a class="waves" href="about.html">A propos 1</a></li>
                                        <li><a class="waves" href="about-2.html">A propos 2</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown active">
                                    <a href="services.php">Evenements</a>
                                    <ul>
                                    <li><a class="waves" href="services.php">Participer</a></li>
                                        <li><a class="waves" href="services-3.php">Nos evenements</a></li>
                                        <li><a class="waves" href="services-2.php">Action de don</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="team.html">Produits</a>
                                    <ul>
                                        <li><a class="waves" href="team.html">Chris Martin</a></li>
                                        <li><a class="waves" href="team.html">Marisa Carter</a></li>
                                        <li><a class="waves" href="team.html">John William</a></li>
                                        <li><a class="waves" href="team.html">Martha Davis</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="news.html">Articles</a>
                                    <ul>
                                        <li><a class="waves" href="news.html">News right sidebar</a></li>
                                        <li><a class="waves" href="news-2.html">News left sidebar</a></li>
                                        <li><a class="waves" href="news-3.html">News no sidebar</a></li>
                                        <li><a class="waves" href="news-single.html">News single</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Contactez nous</a>
                                    <ul>
                                        <li><a class="waves" href="contact.html">Contact 1</a></li>
                                        <li><a class="waves" href="contact-2.html">Contact 2</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </nav>

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </header><!-- HEADER -->


        <!-- PAGE CONTENT -->
        <div id="page-content">

            <div id="page-header" class="parallax" data-stellar-background-ratio="0.3"
                 style="background-image: url(images/backgrounds/page-header-2.jpg);">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <h1>Participer à un évenements</h1>

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- page-header -->

            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="headline text-center">

                            <h6>soyons actifs !</h6>
                            <h2>Inscriver Vous Maintenant Pour que Vous Pouvez Participer à un Evenement !</h2>

                        </div><!-- headline -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->
<!--------------------------------------------------PARTICIPER----------------------------------------------------------------->
<form name="e" method="POST" action="ajouterParticipant.php">

<center>
                            <div class="ms-panel-body">
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="nom_par">Nom</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nom_par" name="nom_par" placeholder="Entrez votre prénom"  required>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="prenom_par">Prénom</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="prenom_par" name="prenom_par" placeholder="Entrez votre Nom" required>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="login_par">Adresse Electronique</label>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="login_par" name="login_par" placeholder="Entrez votre e-mail" required>

                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="pwd_par">Créer Un Mot De Passe</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="pwd_par" name="pwd_par" placeholder="Entrer le mot de passe" required>

                                            </div>
                                        </div>
                                    </div>                          
                                        <div class="col-md-6 mb-3">
                                            <label for="grp_sang">Groupe Sanguin</label>
                                            <div class="input-group">
                                                <select class="form-control" id="grp_sang" name="grp_sang" required>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                </select>

                                            </div>
                                        </div>
         <div>
         <input type="submit" value="Inscrire" name="Inscrire" class="btn btn-primary" action="services-3.php" id="Inscrire"/>
          
          <input type="button" value="Reprendre" class="btn btn-primary" onclick="reset()"/>
        </div>

</form>

    </center>
<!--------------------------------------------------END PARTICIPER------------------------------------------------------------->

<!--------------------------------------------------SAVEZ-VOUS------------------------------------------------------------->
<section class="full-section dark-section parallax" id="section-5" data-stellar-background-ratio="0.3">

                <div class="full-section-overlay-color"></div>

                <div class="full-section-container">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="headline text-center">

                                    <h6>Nos Statisques</h6>
                                    <h2>Connaissez-Vous </h2>

                                </div><!-- headline -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="tabs vertical-tabs">

                                    <ul class="nav nav-tabs">
                                        <li><a class="active waves" href="#tab-6-1" data-toggle="tab">Les Groupes sanguins</a></li>
                                        <li><a class="waves" href="#tab-6-2" data-toggle="tab">A+ ET A-</a></li>
                                        <li><a class="waves" href="#tab-6-3" data-toggle="tab">B+ ET B- </a></li>
                                        <li><a class="waves" href="#tab-6-4" data-toggle="tab">AB+ ET AB-</a></li>
                                        <li><a class="waves" href="#tab-6-5" data-toggle="tab">O+ ET O-</a></li>

                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tab-6-1">

                                            <h2>Les Groupes sanguins</h2>

                                            <br>

                                            <p>Chez les êtres humains, le groupe sanguin est déterminé en fonction des substances présentes à la surface des globules rouges, appelées antigènes. Les groupes sanguins sont regroupés en systèmes. Dans le système ABO, il existe quatre groupes sanguins possibles : A, B, O et AB.</p>

                                        </div><!-- tab-pane -->
                                        <div class="tab-pane fade" id="tab-6-2">

                                            <h2>A+</h2>

                                            <br>

                                            <p>Le groupe sanguin A tout rhésus confondu contient des anticorps anti-B donc les A+ peuvent recevoir des globules rouges de groupe sanguin O et A quel que soit le rhésus. En effet, les receveurs de rhésus positif peuvent recevoir tous les rhésus ce qui n'est pas le cas pour ceux de rhésus négatif.</p>
                                            <h2>A-</h2>

                                            <br>
                                            <p>la surface des globules rouges du groupe sanguin A est concentrée en antigènes de type A. Dès lors, ce groupe sanguin ou plus précisément ses hématies ne peuvent être transmises qu'aux groupes AB et A.  
Les personnes A- peuvent donc donner aux deux rhésus des groupes A et AB.  
le sérum ou plasma du sang de type A contient des anticorps anti-B. Donc comme pour les A+, ils peuvent recevoir des globules rouges de type A et O à la différence qu'ils doivent être de rhésus négatif.</p>
                                        </div><!-- tab-pane -->
                                        <div class="tab-pane fade" id="tab-6-3">

                                            <h2>B+</h2>

                                            <br>

                                            <p>les globules rouges sont dotés d'antigènes (protéines) de type B donc les personnes B+ peuvent les donner aux personnes de groupes sanguins B et AB car leur plasma ne contient pas les anticorps anti-B pour les détruire.  
 Comme tout donneur de rhésus positif, les hématies peuvent être transfusées à des personnes de rhésus positif ; dans ce cas, cela concerne les B+ et les AB+.  
le plasma est concentré en anticorps anti-A donc il "accepte" les globules rouges de type O et B tous rhésus confondus.</p>
                                                <h2>B-</h2>
                                                <br>
                                            <p>toutes les hématies de groupe sanguin B arborent des protéines ou des antigènes de type B à leur surface. Ce qui fait que ces cellules peuvent être uniquement injectées à des hôtes de groupe sanguin B et AB.  
Les hommes et les femmes dont le sang appartient aux groupes AB et B, tous rhésus confondus, peuvent être des receveurs.  
le plasma contient uniquement des anti-A. Donc les individus dits de groupe sanguin B- peuvent être tranfsusés avec des globules rouges O- et B-.</p>

                                        </div><!-- tab-pane -->
                                        <div class="tab-pane fade" id="tab-6-4">

                                            <h2>AB+</h2>

                                            <br>

                                            <p>Leurs erythrocytes présentent les deux types de protéines A et B. Ils peuvent donc être uniquement transfusés aux individus de groupe sanguin AB.  
Seuls les gens dont le groupe sanguin est AB+ peuvent recevoir, sans problème, ces globules rouges.  
Les personnes de groupe sanguin O- sont dits donneurs universels, pour celles de groupe AB+, elles sont qualifiées de receveurs universels. N'importe quel groupe sanguin, quel que soit son rhésus, peut leur être transfusé.</p>
                                            <h2>AB-</h2>

                                            <br>
                                            <p>Ces érythrocytes ne peuvent donc être donnés aux gens du même groupe sanguin AB.  
Les AB- sont d'excellents donneurs pour les gens uniquement du même groupe et quel que soit le rhésus.
Les AB+ sont des receveurs universels ce qui n'est pas le cas des AB-. Ils acceptent tous les groupes sanguins de rhésus négatif.</p>


                                        </div><!-- tab-pane -->
                                        <div class="tab-pane fade" id="tab-6-5">

                                            <h2>O+</h2>

                                            <br>

                                            <p>le groupe sanguin O ne possède aucune protéine à la surface de ses globules rouges, elles peuvent donc être transfusées à tous les groupes sanguins sans problème.  
Les personnes rhésus négatif ne peuvent pas recevoir de sang rhésus positif. Seuls les individus A+, B+, AB+ et O+ peuvent recevoir ces globules rouges.  
le plasma qui compose le sang comprend des anticorps anti-A et anti- B chez les personnes de groupe O, tous rhésus confondus. En présence de globules rouges des groupes sanguins A, B et AB, les anticorps les détruisent comme s'ils s'attaquaient à un virus. On parle d'hémolyse. Les personnes O+ ne peuvent être transfusées qu'avec des globules rouges O+ et O- .</p>
                                            <h2>O-</h2>
                                            <br>
                                            <p>Leurs globules rouges peuvent donc être transfusés à n'importe quel groupe sanguin quel que soit le rhésus d'où leur nom de donneur universel.  
Celui-ci permet aux personnes de groupe O- de donner leurs hématies à tout le monde. En revanche, ils ne peuvent recevoir que du sang rhésus négatif.  
Il contient deux types d'anticorps: anti-A et anti-B. Cela complexifie un peu plus la possibilité des groupes donneurs aux O-. Ils ne peuvent être transfusés qu'avec des érythrocytes (globules rouges) de type O et de rhésus négatif.</p>

                                        </div><!-- tab-pane -->

                                    </div><!-- tab-content -->

                                </div><!-- tabs -->

                            </div><!-- col -->
                        </div><!-- row -->
                    </div><!-- container -->

                </div><!-- full-section-container -->
            </section><!-- full-section -->
<!-------------------------------------------------- END SAVEZ-VOUS------------------------------------------------------------->

            <!------------------------------------STATISTIQUES-------------------------------------------------->
            <?php  
 $connect = mysqli_connect("localhost", "root", "", "santek");  
 $query = "SELECT grp_sang, count(*) as number FROM participant GROUP BY grp_sang";  
 $result = mysqli_query($connect, $query);  
 ?>   
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['grp_sang', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["grp_sang"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  




            <center><div style="width:900px;">  
                <h3 align="center">La Réparticipant des Participants en Fonction de Groupes Sanguins</h3>   
                 <div id="piechart" style="width: 900px; height: 700px; color: blue;"></div>  
           </div>  </center>
            <!------------------------------------ END STATISTIQUES-------------------------------------------------->
    <!---------------------------------------------CALANDAR---------------------------------------------------------------->    
    <div id="page-header" class="parallax" data-stellar-background-ratio="0.3" style="background-image: url(images/backgrounds/page-header-2.jpg);">
           <div class="container">
               <div class="row">
                   <div class="col-md-12">
                    <b style="color:rgb(0, 238, 255);"  class="smartmed-icon-calendar"></b>
                       <h2 style="color:white">Calendrier</h2>

                   </div><!-- col -->
               </div><!-- row -->
           </div><!-- container -->

    </div><!-- page-header -->

        </div><!-- PAGE CONTENT -->
        
        <div class="calendar">
            <div class="header">
                <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                <div class="text" data-render="month-year"></div>
                <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
            </div>
            <div class="months" data-flow="left">
                <div class="month month-a">
                    <div class="render render-a"></div>
                </div>
                <div class="month month-b">
                    <div class="render render-b"></div>
                </div>
            </div>
            <script>
                var Calendar = function(t) {
                    this.divId = t.RenderID ? t.RenderID : '[data-render="calendar"]', this.DaysOfWeek = t.DaysOfWeek ? t.DaysOfWeek : ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], this.Months = t.Months ? t.Months : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
                    var e = new Date;
                    this.CurrentMonth = e.getMonth(), this.CurrentYear = e.getFullYear();
                    var r = t.Format;
                    this.f = "string" == typeof r ? r.charAt(0).toUpperCase() : "M"
                };
                Calendar.prototype.nextMonth = function() {
                    11 == this.CurrentMonth ? (this.CurrentMonth = 0, this.CurrentYear = this.CurrentYear + 1) : this.CurrentMonth = this.CurrentMonth + 1, this.divId = '[data-active="false"] .render', this.showCurrent()
                }, Calendar.prototype.prevMonth = function() {
                    0 == this.CurrentMonth ? (this.CurrentMonth = 11, this.CurrentYear = this.CurrentYear - 1) : this.CurrentMonth = this.CurrentMonth - 1, this.divId = '[data-active="false"] .render', this.showCurrent()
                }, Calendar.prototype.previousYear = function() {
                    this.CurrentYear = this.CurrentYear - 1, this.showCurrent()
                }, Calendar.prototype.nextYear = function() {
                    this.CurrentYear = this.CurrentYear + 1, this.showCurrent()
                }, Calendar.prototype.showCurrent = function() {
                    this.Calendar(this.CurrentYear, this.CurrentMonth)
                }, Calendar.prototype.checkActive = function() {
                    1 == document.querySelector(".months").getAttribute("class").includes("active") ? document.querySelector(".months").setAttribute("class", "months") : document.querySelector(".months").setAttribute("class", "months active"), "true" == document.querySelector(".month-a").getAttribute("data-active") ? (document.querySelector(".month-a").setAttribute("data-active", !1), document.querySelector(".month-b").setAttribute("data-active", !0)) : (document.querySelector(".month-a").setAttribute("data-active", !0), document.querySelector(".month-b").setAttribute("data-active", !1)), setTimeout(function() {
                        document.querySelector(".calendar .header").setAttribute("class", "header active")
                    }, 200), document.querySelector("body").setAttribute("data-theme", this.Months[document.querySelector('[data-active="true"] .render').getAttribute("data-month")].toLowerCase())
                }, Calendar.prototype.Calendar = function(t, e) {
                    "number" == typeof t && (this.CurrentYear = t), "number" == typeof t && (this.CurrentMonth = e);
                    var r = (new Date).getDate(),
                        n = (new Date).getMonth(),
                        a = (new Date).getFullYear(),
                        o = new Date(t, e, 1).getDay(),
                        i = new Date(t, e + 1, 0).getDate(),
                        u = 0 == e ? new Date(t - 1, 11, 0).getDate() : new Date(t, e, 0).getDate(),
                        s = "<span>" + this.Months[e] + " &nbsp; " + t + "</span>",
                        d = '<div class="table">';
                    d += '<div class="row head">';
                    for (var c = 0; c < 7; c++) d += '<div class="cell">' + this.DaysOfWeek[c] + "</div>";
                    d += "</div>";
                    for (var h, l = dm = "M" == this.f ? 1 : 0 == o ? -5 : 2, v = (c = 0, 0); v < 6; v++) {
                        d += '<div class="row">';
                        for (var m = 0; m < 7; m++) {
                            if ((h = c + dm - o) < 1) d += '<div class="cell disable">' + (u - o + l++) + "</div>";
                            else if (h > i) d += '<div class="cell disable">' + l++ + "</div>";
                            else {
                                d += '<div class="cell' + (r == h && this.CurrentMonth == n && this.CurrentYear == a ? " active" : "") + '"><span>' + h + "</span></div>", l = 1
                            }
                            c % 7 == 6 && h >= i && (v = 10), c++
                        }
                        d += "</div>"
                    }
                    d += "</div>", document.querySelector('[data-render="month-year"]').innerHTML = s, document.querySelector(this.divId).innerHTML = d, document.querySelector(this.divId).setAttribute("data-date", this.Months[e] + " - " + t), document.querySelector(this.divId).setAttribute("data-month", e)
                }, window.onload = function() {
                    var t = new Calendar({
                        RenderID: ".render-a",
                        Format: "M"
                    });
                    t.showCurrent(), t.checkActive();
                    var e = document.querySelectorAll(".header [data-action]");
                    for (i = 0; i < e.length; i++) e[i].onclick = function() {
                        if (document.querySelector(".calendar .header").setAttribute("class", "header"), "true" == document.querySelector(".months").getAttribute("data-loading")) return document.querySelector(".calendar .header").setAttribute("class", "header active"), !1;
                        var e;
                        document.querySelector(".months").setAttribute("data-loading", "true"), this.getAttribute("data-action").includes("prev") ? (t.prevMonth(), e = "left") : (t.nextMonth(), e = "right"), t.checkActive(), document.querySelector(".months").setAttribute("data-flow", e), document.querySelector('.month[data-active="true"]').addEventListener("webkitTransitionEnd", function() {
                            document.querySelector(".months").removeAttribute("data-loading")
                        }), document.querySelector('.month[data-active="true"]').addEventListener("transitionend", function() {
                            document.querySelector(".months").removeAttribute("data-loading")
                        })
                    }
                };
                </script>
        </div>
    
        <br><br> <br> <br>

        <!-- FOOTER -->
        <footer id="footer-container">

            <div id="footer">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="widget widget-text">

                                <div class="text-center">

                                    <p><img src="assets/images/logo.png" alt=""></p>
                                    <p class="text-uppercase">Best medical solutions</p>

                                </div>

                            </div><!-- widget-text -->

                            <div class="widget widget-contact">

                                <ul class="inline">
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        4453 Meadow Lane, San Jose, CA 95134
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        315-411-8716
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:info@smart-pixel.xyz">info@smart-pixel.xyz</a>
                                    </li>
                                </ul>

                            </div><!-- widget-contact -->

                            <div class="widget widget-pages">

                                <ul class="inline">
                                    <li><a href="#">Acceuil</a></li>
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Evenements</a></li>
                                    <li><a href="#">Produits</a></li>
                                    <li><a href="#">Articles</a></li>
                                    <li><a href="#">Contactez nous</a></li>
                                </ul>

                            </div><!-- widget-pages -->

                            <div class="widget widget-text">

                                <div>

                                    <p class="copyright">
                                        <small>Template by <a href="#">SmartPixel</a> &copy; All rights reserved</small>
                                    </p>

                                </div>

                            </div><!-- widget-text -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </div><!-- footer -->

        </footer><!-- FOOTER -->

    </div><!-- MAIN CONTAINER -->


    <!-- SCROLL UP -->
    <a id="scroll-up" class="waves"><i class="fa fa-angle-up"></i></a>


    <!-- THEME OPTIONS -->
    <div id="theme-options"></div>


    <!-- jQUERY -->
    <script src="assets/plugins/jquery/jquery-2.2.4.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- VIEWPORT -->
    <script src="assets/plugins/viewport/jquery.viewport.min.js"></script>

    <!-- MENU -->
    <script src="assets/plugins/menu/hoverintent.min.js"></script>
    <script src="assets/plugins/menu/superfish.min.js"></script>

    <!-- FANCYBOX -->
    <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>

    <!-- OWL CAROUSEL -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

    <!-- PARALLAX -->
    <script src="assets/plugins/parallax/jquery.stellar.min.js"></script>

    <!-- ISOTOPE -->
    <script src="assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="assets/plugins/isotope/isotope.pkgd.min.js"></script>

    <!-- CONTACT FORM VALIDATE & SUBMIT -->
    <script src="assets/plugins/validate/jquery.validate.min.js"></script>
    <script src="assets/plugins/submit/jquery.form.min.js"></script>

    <!-- GOOGLE MAPS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJB5U3ZU5nnV3ta4t1VSz92zQi_3Xmmo"></script>
    <script src="assets/plugins/googlemaps/gmap3.min.js"></script>

    <!-- CHARTS -->
    <script src="assets/plugins/charts/jquery.easypiechart.min.js"></script>

    <!-- COUNTER -->
    <script src="assets/plugins/counter/jquery.simplecounter.min.js"></script>

    <!-- INSTAFEED -->
    <script src="assets/plugins/instafeed/instafeed.min.js"></script>

    <!-- TWITTER -->
    <script src="assets/plugins/twitter/twitterfetcher.min.js"></script>

    <!-- YOUTUBE PLAYER -->
    <script src="assets/plugins/ytplayer/jquery.mb.ytplayer.min.html"></script>

    <!-- COUNTDOWN -->
    <script src="assets/plugins/countdown/jquery.countdown.min.js"></script>

    <!-- ANIMATIONS -->
    <script src="assets/plugins/animations/wow.min.js"></script>

    <!-- THEME OPTIONS -->
    <script src="assets/plugins/theme-options/jquery.cookie.min.js"></script>
    <script src="assets/plugins/theme-options/theme-options.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

</body>


<!-- Mirrored from www.smartpixel.tech/smartmed/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Nov 2020 13:38:29 GMT -->
</html>