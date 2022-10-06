<?php 
    include ".\connec.php";

    $herbicide->execute();
    $products = $herbicide->fetchALL(PDO::FETCH_ASSOC);
    
    // echo '<pre>';

    // var_dump ($products);
    // echo '<pre>';
   
  //   foreach ($products as $product){
    
  //     $weed = $product['weeds'];
  //     $arrweed = explode("*", $weed);
    
  //     $arrlng = count($arrweed);
   
  //   for ($i=0; $i<$arrlng; $i++){

  //     if ($arrweed[$i]==="Perennial Broadleaves"){
  //     $display = $product['name'];
  //    }
  //    }};
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
    <style>
      table {
        width:80vw;
      }
      tr:hover{
        background:rgba(0,250,0, .3);;
      }
      tr{
        border: 2px white solid;
        background:rgba(0,250,0, .1);
                margin:1px 0px;
                padding:10px;
                border-radius:205px;
                        } 
      td{
                width: 400px;
                padding:10px;
                text-align:center;
                justify-content:space-around;
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
    <div class="page-heading about-heading header-text" style="height: 200px;background-image: url(assets/images/perennial-broad-lea.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12" >
            <div class="text-content">
            <div class="down-content" style="border-radius: 0px;">
                  <h1 style="border:1px solid rgb(17, 121, 17);border-right:1px solid rgb(17, 121, 17); 
                  background-color: rgba(250,250,250,.8); color: rgb(17, 121, 17);border-radius:0px; font-weight: bold; border-radius: 10px;
                  display: block; height:50px; margin:20px auto;width:35vw; text-align: center;" class="filled-button">Perennial Broadleaves</h1>
                </div>
          </div>
          </div>
        </div>
      </div>
    </div><br><br><br>

<div class="container">                             
                
    <?php foreach ($products as $product):?><?php    
    $weed = $product['weeds'];
    $arrweed = explode("*", $weed);
  
    $arrlng = count($arrweed);
 
  for ($i=0; $i<$arrlng; $i++):?>
 <table>
 
 <?php

    if ($arrweed[$i]==="Perennial Broadleaves"):?>
    <tr><td>
   <p style="font-family:cursive;"><?php echo $product['name'].'<br>';?></p>
    </td>
    <td>
      <img src="<?php echo $product['url'];?>" width="100" height = '100'>
    </td>
    </tr>
  
    <?php endif?>
    <?php endfor?>
    <?php endforeach?>
    
    </table>
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
