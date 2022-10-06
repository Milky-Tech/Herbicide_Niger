<?php 
   include "conn.php";
   include "authenticator.php"
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
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader" style="background-color:rgb(17, 121, 17);">
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
              <li class="nav-li active">
                <a class="li-itm" style="border-bottom:2px solid rgb(17, 121, 17)" href="products-all.php">All products</a>  
              </li>
              <li class="nav-li active">
                <a class="li-itm" href="page.php">Add product</a>  
              </li>
              <li class="nav-li">
                <a class="li-itm" href="">Log-out</a>  
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(../assets/images/herbicide.jpg);">
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

    <?php 

      $sql = "SELECT * from `products`"; $qry = $conn -> query($sql);

      if ($qry -> num_rows < 1) {
        ?> 
          <h1 style="color:lightgrey">No Product Available</h1>
        <?php
      } else { #listing all products
        $x = 0; echo "<table style='display:block;margin:10px auto;' class='table-striped table-hover'>
        <th>
          <tr>
            <td>S/N</td>
            <td style='width:200px;padding:8px;'>Product Name</td>
            <td style='width:250px;padding:8px;'>Company Name</td>
            <td style='width:300px;padding:8px;'>Product Preview</td>
          </tr>
        </th>";

        while ($bucket = $qry -> fetch_assoc()) {$x ++;

            $name = $bucket["name"]; $url = $bucket["url"];
            $company_name = $bucket["company_name"]; $id = $bucket["id"]

            ?>
            
                <tr style="cursor:pointer">
                   <td style='width:50px;padding:8px;'><?php echo $x?></td>
                   <td style='width:200px;padding:8px;'><?php echo $name?></td>
                   <td style='width:200px;padding:8px;'><?php echo $company_name?></td>
                   <td style='width:200px;padding:8px;'><a <?php echo "href='product-single.php?id=$id'" ?>>Preview Product</a></td>
                </tr>
               
            <?php

        }

       echo "</table>";
      }
    
    ?>
    
    <div>

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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/isotope.js"></script>
    <script src="../assets/js/accordions.js"></script>


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
