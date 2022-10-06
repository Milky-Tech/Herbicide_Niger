<?php 
    include ".\connec.php";

    $herbicide->execute();
    $products = $herbicide->fetchALL(PDO::FETCH_ASSOC);
    
    // echo '<pre>';

    // var_dump ($products);
    // echo '<pre>';
   
    foreach ($products as $product){
    
      $weed = $product['weeds'];
      $arrweed = explode("*", $weed);
    
      $arrlng = count($arrweed);
   
    for ($i=0; $i<$arrlng; $i++){

      if ($arrweed[$i]==="Perennial Broadleaves"){
        echo $product['url'];
     }
     }};
  //  echo $display;
    
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Herbicide Naija</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
        .service-item {
            border:1px solid rgb(17, 121, 17);
        }
    </style>

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader" style="background-color:rgb(17, 121, 17)">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="" style="background-color: #fff;">
      <nav class="navbar navbar-expand-lg">
        <div class="container" style="padding-top: 10px;">
          <a class="navbar-brand" href="index.html"><h2 style="color:black">Herbicide <em style="color:rgb(17, 121, 17)">Naija</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-li">
                  <a href="index.html"  class="li-itm">Home</a>
              </li>
              <li class="nav-li">
                <a class="li-itm" style="display: none;" href="">Consultation</a>
            </li>
            <li class="nav-li">
                <a class="li-itm" style="display: none;" href="">Available Products</a>
            </li>
            <li class="nav-li">
                <a class="li-itm" style="display: none;" href="">Research Update</a>
            </li>
            <li class="nav-li">
                <a class="li-itm" style="display: none;" href="">Blog</a>
            </li>
            <li class="nav-li">
                <a class="li-itm" style="display: none;" href="">About Us</a>
            </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/herbicide.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12" >
            <div class="text-content">
              <h4 style="color:#fff; font-family: 'Courier New', Courier, monospace;">World leading</h4>
              <h2 style="color:#fff; font-family: 'Courier New', Courier, monospace;">Agricultural Information Platform</h2>
            </div>
          </div>
        </div>
      </div>
    </div><br><br><br>

    <div class="container">
      <div class="row">
       <div class="col-md-4" >
            <div class="service-item" style="height: 200px;background-image: url(assets/images/annual-grass.jpg);">
                <div class="down-content" style="border-radius: 0px;">
                  <a href="Annual_Grass.php" style="border:1px solid rgb(17, 121, 17);border-right:1px solid rgb(17, 121, 17); 
                  background-color: #fff; color: rgb(17, 121, 17);border-radius:0px; font-weight: bold; border-radius: 20px;
                  display: block; margin: 80px auto;width:230px; text-align: center;" class="filled-button">Annual grass</a>
                </div>
                  
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-item" style="height: 200px;background-image: url(assets/images/perennial-broad-lea.jpg);">
                <div class="down-content" >
                  <a href="Perennial_Grass.php" style="border:1px solid rgb(17, 121, 17);border-right:1px solid rgb(17, 121, 17); 
                  background-color: #fff; color: rgb(17, 121, 17);border-radius:0px; font-weight: bold; border-radius: 20px;
                  display: block; margin: 80px auto;width:230px; text-align: center;" class="filled-button">Perennial grass</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-item" style="height: 200px;background-image: url(assets/images/annual-broad-leaf.jpg);">
                <div class="down-content" >
                  <a href="Annual_Broadleaves.php" style="border:1px solid rgb(17, 121, 17);border-right:1px solid rgb(17, 121, 17); 
                  background-color: #fff; color: rgb(17, 121, 17);border-radius:0px; font-weight: bold; border-radius: 20px;
                  display: block; margin: 80px auto;width:230px; text-align: center;" class="filled-button">Annual Broad leaves</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-item" style="height: 200px;background-image: url(assets/images/perennial-broad-lea.jpg);">
                <div class="down-content" >
                  <a href="Perennial_Broadleaves.php" style="border:1px solid rgb(17, 121, 17);border-right:1px solid rgb(17, 121, 17); 
                  background-color: #fff; color: rgb(17, 121, 17);border-radius:0px; font-weight: bold; border-radius: 20px;
                  display: block; margin: 80px auto;width:230px; text-align: center;" class="filled-button">
                  Perennial Broad leaves</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-item" style="height: 200px;background-image: url(assets/images/sedges.jpg);">
                <div class="down-content" >
                  <a href="Sedges.php" style="border:1px solid rgb(17, 121, 17);border-right:1px solid rgb(17, 121, 17); 
                  background-color: #fff; color: rgb(17, 121, 17);border-radius:0px; font-weight: bold; border-radius: 20px;
                  display: block; margin: 80px auto;width:230px; text-align: center;" class="filled-button">Sedges</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-item" style="height: 200px;background-image: url(assets/images/spectrum.jpg);">
                <div class="down-content" >
                  <a href="Broad_Spectrum.php" style="border:1px solid rgb(17, 121, 17);border-right:1px solid rgb(17, 121, 17); 
                  background-color: #fff; color: rgb(17, 121, 17);border-radius:0px; font-weight: bold; border-radius: 20px;
                  display: block; margin: 80px auto;width:230px; text-align: center;" class="filled-button">Broad Spectrum</a>
                </div>
            </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; <script>
                 try { var year = new Date();
                  document.write(year.getFullYear()) } catch (e) {alert(e)}
              </script> Herbicide Naija
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
