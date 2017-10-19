<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Kopi Ganes</title>
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/normalize.css";?>">
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/main.css";?>" media="screen" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/bootstrap.css"?>">
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/style-portfolio.css"?>">
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/picto-foundry-food.css"?>">
        <link rel="stylesheet" href="<?php echo base_url()."assets/css/jquery-ui.css"?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url()."assets/css/font-awesome.min.css"?>" rel="stylesheet">
        <link rel="icon" href="<?php echo base_url()."assets/favicon-1.ico"?>" type="image/x-icon">
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
        </style>
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Kopi Ganes</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#story">ABOUT</a></li>
                            <li><a class="color_animation" href="#pricing">PRICING</a></li>
                            <li><a class="color_animation" href="#contact">CONTACT</a></li>
                            
                            
                            <?php if($this->session->userdata('user')==null) { ?>
                                <button type="button" class="btn btn-success" style="font-size: 18px; margin: 8px 2px;"><a href="<?php echo base_url('index.php/Menu/userloginview'); ?>">LOGIN</a></button> 
                            <?php } else { ?>
                                <button type="button" class="btn btn-danger" style="font-size: 18px; margin: 8px 2px;"><a href="<?php echo base_url('index.php/Menu/userlogout'); ?>"><?php echo $this->session->userdata('user'); ?> | LOGOUT </a></button> 
                            <?php } ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Kopi Ganes</h2>
                    <h2 class="white second-title">" tempat nikmat dan santai "</h2>
                    <hr>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>About us</h1>
                    <div class="fa fa-cutlery fa-2x"></div>
                    <p class="desc-text">Kopi Ganes menyediakan berbagai macam jenis kopi, andalannya adalah kopi khas nusantara mulai dari Sumatera hingga Papua. Selain kopi, kami juga menyediakan makanan dan snack, serta tempat yang menarik untuk pendamping waktu santai anda. </p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="<?php echo base_url()."assets/images/icon1.jpg"?>" width="250" height="220">
                       <img src="<?php echo base_url()."assets/images/icon2.jpg"?>" width="250" height="220">
                       <div class="img-section-space"></div>
                       <img src="<?php echo base_url()."assets/images/icon3.jpg"?>"  width="250" height="220">
                       <img src="<?php echo base_url()."assets/images/icon4.jpg"?>"  width="250" height="220">
                   </div>
                </div>
            </div>
        </section>


       <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1><span>Menu</span> price</h1>
             </div>
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter="makanan">Makanan</li>
                                <li class="filter" data-filter="minuman">Minuman</li>
                                <li class="filter" data-filter="snack">Snack</li>
                            </ul><!-- @end #filter-list -->    
                            <ul id="portfolio">
                                <li class="item minuman"><img src="http://localhost/FP/images/drink1.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Saparella</h3>
                                </li>
                                <li class="item minuman"><img src="http://localhost/FP/images/drink21.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Milkshake</h3>
                                </li>
                                <li class="item minuman"><img src="http://localhost/FP/images/drink3.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Green Tea</h3>
                                </li>
                                <li class="item makanan"><img src="http://localhost/FP/images/food1.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Nasi Goreng</h3>
                                </li>
                                <li class="item makanan"><img src="http://localhost/FP/images/food2.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Mie Goreng</h3>
                                </li>
                                <li class="item makanan"><img src="http://localhost/FP/images/food3.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Ayam Goreng</h3>
                                </li>
                                <li class="item snack"><img src="http://localhost/FP/images/snack1.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Kentang Goreng</h3>
                                </li>
                                <li class="item snack"><img src="http://localhost/FP/images/snack2.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Roti Bakar</h3>
                                </li>
                                <li class="item snack"><img src="http://localhost/FP/images/snack3.jpg" height='150' width='220' alt="Food" >
                                    <h3 class="white">Nugget</h3>
                                </li>
                            </ul><!-- @end #portfolio -->
                        </div><!-- @end #w -->
                        <div id="w">
                            <table>
                              <tr>
                                <th>Nama Menu</th>
                                <th>Harga</th>
                                <th>Jenis</th>
                              </tr>
                              <?php foreach($data as $d){ ?>
                              <tr>
                                <td><?php echo $d['nama']; ?></td>
                                <td>Rp<?php echo $d['harga']; ?></td>
                                <td><?php echo $d['jenis']; ?></td>
                              </tr>   
                            <?php }?>
                              
                            </table>
                        </div><!-- @end #w -->
                    </div>
                </div>
            </div>  
        </section>

        <!-- ============ Social Section  ============= -->
      
        <section class="social_connect"  id="contact">
            <div class="text-content container"> 
                <div class="col-md-6">
                    <span class="social_heading">FOLLOW</span>
                    <ul class="social_icons">
                        <li><a class="icon-twitter color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-github color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-linkedin color_animation" href="#" target="_blank"></a></li>
                        <li><a class="icon-mail color_animation" href="#"></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="social_heading">OR DIAL</span>
                    <span class="social_info"><a class="color_animation" href="tel:081231255000">(081)2312-55000</a></span>
                </div>
            </div>
        </section>

        <!-- ============ Contact Section  ============= -->

        <section>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed/v1/place?q=Kopiganes%20Jalan%20Keputih%20Tegal%20Timur%20II%20No.114%20-%20116%2C%20Keputih%2C%20Sukolilo%2C%20Keputih%2C%20Sukolilo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060111%2C%20Indonesia&key=AIzaSyBFgYuG-NsCDkMYgDD8AEHSZIVyvzug38s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
            <div class="container">
                <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Restaurant 2014, Theme by <a href="https://themewagon.com/">ThemeWagon</a></p></div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
                </div>
                <div class="col-md-4"><p class="sub-footer-text text-center">Built With Care By <a href="#" target="_blank">Us</a></p></div>
            </div>
        </footer>


        <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery-1.10.2.min.js"?>"> </script>
        <script type="text/javascript" src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"> </script>
        <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery-1.10.2.js"?>"> </script>     
        <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery.mixitup.min.js"?>"> </script>
        <script type="text/javascript" src="<?php echo base_url()."assets/js/main.js"?>"></script>

    </body>
</html>