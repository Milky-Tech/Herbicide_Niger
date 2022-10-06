<?php 
   include "conn.php";
   include "authenticator.php";

   if (!isset($_GET["id"])) header("location:products-all.php");

   $id = $_GET["id"];

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
                <a class="li-itm"  href="products-all.php">All products</a>  
              </li>&emsp;&emsp;
              <li class="nav-li active" style="border-bottom:2px solid rgb(17, 121, 17)">
                <a class="li-itm" href="page.php">Add product</a>  
              </li>
              &emsp;&emsp;
              <li class="nav-li">
                <button <?php echo 'onclick="update()"' ?>  style="border:0px;width:100px;height:35px;
                color:#fff;font-weight:bold;border-radius:3px;background:#00cc0099">Update </button>
              </li>
              &emsp;&emsp;
              <li class="nav-li">
                <button <?php echo 'onclick="delete_('. $_GET["id"] .')"' ?>  style="border:0px;width:100px;height:35px;
                color:#fff;font-weight:bold;border-radius:3px;background:#cc000099">Delete </button>
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
    
      $sql = "SELECT * from products where id = '$id'";
      $qry = $conn -> query($sql);

      while ($bucket = $qry -> fetch_assoc()) {

         $product_name = $bucket["name"];
         $product_id = $bucket["id"];
         $product_url = $bucket["url"];
         $product_ingredients = $bucket["ingredients"];
         $company_name = $bucket["company_name"];
         $formulation = $bucket["formulation"];
         $application_method = $bucket["application_method"];
         $application_time = $bucket["application_time"];
         $weeds = $bucket["weeds"];

      }
     //echo $product_url;
      function print_val ($val, $bool = false) {
        if ($bool) echo "$val";
        else echo "value='$val'";
      }
      
      function selected ($value, $array) {  
        if (array_search($value, $array) > -1) {
         echo "checked='true'";
        }
      }
   
    ?>
    <?php 
    
    if (isset($_GET["msg-err"])) {?>

     <div class="alert alert-danger">
       <?php echo $_GET["msg-err"]; ?>
     </div>

    <?php };
   
  ?>
  <?php 
  
  if (isset($_GET["msg-success"])) {?>

   <div class="alert alert-success">
     <?php echo $_GET["msg-success"]; ?>
   </div>

  <?php };
 
?>
    <form method="POST" action="modules/product.php?del" enctype="multipart/form-data" id="form">
       <div class="row"> 
          
          <div class="col-md-12">
          <br>Product ID&emsp;&nbsp;&nbsp;<br>
          <input readonly type="" <?php print_val($id); ?> name="id" required id="" class="input"><br>
          </div> <div class="col-md-12"><br><br>Trade Name&emsp;<br>
            <input type="" <?php print_val($product_name); ?> placeholder="Trade Name" name="trade_name" required id="" class="input"><br><br>
            <br><img style="width:60px;height:80px;" <?php echo "src='../$product_url'"; ?>><br><br>
            <div class="alert alert-warning">        
              Select product image (jpg, png, jpeg, gif) (600 x 800), max size 5MB<br>
              <input style="width:300px;margin-top:8px" name="image" type="file" onchange="" id="img1"><br>
            </div>
          </div>  
          <div class="col-md-12">
          <br>Ingredients&emsp;&nbsp;&nbsp;<br>
            <textarea  type="" placeholder="Active Ingredients" name="ingredients" required id="" class="input" style="height:100px;"><?php print_val($product_ingredients, true); ?></textarea><br>
          </div> <br>
          <div class="col-md-12">
          <br>Company Name&emsp;<br>
            <input type="" <?php print_val($company_name); ?> placeholder="Company Name" name="company_name" required id="" class="input"><br>
          </div> <br>
          <div class="col-md-12">
          <br>Formulation&emsp;<br>
          <textarea type="" placeholder="Formulations" name="formulation" required id="" class="input" style="height:100px;"><?php print_val($formulation, true); ?></textarea><br>
          </div> <br>
          <div class="col-md-12"><hr>
            Application Method<br><br>
            <input <?php selected("Follar", ["Follar", "Soil Applied"]); ?> type="radio" onchange="add_method('Follar')" name="app_method">&emsp;Follar&emsp;<br>
            <input <?php selected("Soil Applied", ["Follar", "Soil Applied"]); ?> type="radio" onchange="add_method('Soil Applied')" name="app_method">&emsp;Soil Applied&emsp;<br>
            <input type="radio" onchange="add_method('')" name="app_method">&emsp;
            <input <?php print_val($application_method); ?> type="" placeholder="Specify others" name="application_method" required id="method" class="input">
          </div> 
          <script>
             const method = document.getElementById("method");
             function add_method (val) {
               method.value  = val;
             }
          </script>
          <div class="col-md-12"><hr>
           Application Time<br><br>
            <input <?php selected("Pre-Emergence", explode("*", $application_time)); ?> onchange="add_time(1)" id="time1" value="Pre-Emergence" type="checkbox" name="">&emsp;Pre - Emmergence<br>
            <input <?php selected("Pre Plant Incoporated-Planting", explode("*", $application_time)); ?> onchange="add_time(2)" id="time2" value="Pre Plant Incoporated-Planting" type="checkbox" name="">&emsp;Pre Plant Incoporated - Planting&emsp;<br>
            <input <?php selected("Emergence", explode("*", $application_time)); ?> onchange="add_time(3)" id="time3" value="Emmergence" type="checkbox" name="">&emsp;Emmergence&emsp;<br>
            <input <?php selected("Early Post-Emmergence", explode("*", $application_time)); ?> onchange="add_time(4)" id="time4" value="Early Post-Emmergence" type="checkbox" name="">&emsp;Early Post - Emmergence&emsp;<br>
            <input <?php selected("Before-Transplanting", explode("*", $application_time)); ?> onchange="add_time(5)" id="time5" value="Before-Transplanting" type="checkbox" name="">&emsp;Before - Transplanting&emsp;<br>
            <input <?php selected("Post-Emmergence", explode("*", $application_time)); ?> onchange="add_time(6)" id="time6" value="Post-Emmergence" type="checkbox" name="">&emsp;Post - Emmergence&emsp;<br>
            <input onchange="clear_time()" id="time-other" type="checkbox" name="">&emsp;
            <input type="" <?php print_val($application_time); ?> placeholder="Specify others" name="application_time" required id="time" class="input">
          </div> <br><hr><br>
          <script>
             const time = document.getElementById("time");
             function add_time (index) { let selected = "";
               for (let x = 1; x < 7; x ++) {
                 const elem = document.getElementById(`time${x}`);
                 if (elem.checked) {
                   selected += `*${elem.value}`
                 }
               }
               time.value = selected;
               document.getElementById("time-other").checked = false;
             }
             function clear_time () {
               time.value = "";
               for (let x = 1; x < 7; x ++) {
                 const elem = document.getElementById(`time${x}`);
                 elem.checked = false;
               }
             }
          </script>
          <div class="col-md-12"><hr>
           Weeds Controlled<br><br>
            <input <?php selected("Annual Broadleaves", explode("*", $weeds)); ?> onchange="add_weed(1)" id="weed1"  type="checkbox" value="Annual Broadleaves" name="">&emsp;Annual Broadleaves<br>
            <input <?php selected("Perennial Broadleaves", explode("*", $weeds)); ?> onchange="add_weed(2)" id="weed2"  type="checkbox" value="Perennial Broadleaves" name="">&emsp;Perennial Broadleaves&emsp;<br>
            <input <?php selected("Annual Grass", explode("*", $weeds)); ?> onchange="add_weed(3)" id="weed3"  type="checkbox" value="Annual Grass" name="">&emsp;Annual Grass<br>
            <input <?php selected("Perennial Grass", explode("*", $weeds)); ?> onchange="add_weed(4)" id="weed4"  type="checkbox" value="Perennial Grass" name="">&emsp;Perennial Grass&emsp;<br>
            <input <?php selected("Sedges", explode("*", $weeds)); ?> onchange="add_weed(5)" id="weed5"  type="checkbox" value="Sedges" name="">&emsp;Sedges&emsp;<br>
            <input <?php selected("Broad spectrum", explode("*", $weeds)); ?> onchange="add_weed(6)" id="weed6"  type="checkbox" value="Broad spectrum" name="">&emsp;Broad spectrum&emsp;<br>
            <input onchange="clear_weed()" id="weed7" type="checkbox" name="">&emsp;
            <input type="" <?php print_val($weeds); ?> placeholder="Specify others" name="weed_controlled" required id="weed-other" class="input">
          </div> <br><hr><br><br>
          <script>
             const weed = document.getElementById("weed-other");
             function add_weed (index) { let selected = "";
               for (let x = 1; x < 7; x ++) {
                 const elem = document.getElementById(`weed${x}`);
                 if (elem.checked) {
                   selected += `*${elem.value}`
                 }
               }
               weed.value = selected;
               document.getElementById("weed7").checked = false;
             }
             function clear_weed () {
               weed.value = "";
               for (let x = 1; x < 7; x ++) {
                 const elem = document.getElementById(`weed${x}`);
                 elem.checked = false;
               }
             }
          </script>
          <div class="col-md-12"><hr>
            <lable for=""><label>&emsp;
            <input style="background:rgb(17, 17, 121, .5);color:#fff;" type="submit" value="Update Product" placeholder="" name="update-product" required id="" class="input">&emsp;&emsp;  
          </div>
       <div>
    </form>
    <div>
    <script>
      const form = document.getElementById("form");
      form.addEventListener("submit", e => {
        e.preventDefault();
        const ask = confirm("Action can not be undone, proceed ?");
        if (ask) form.submit()
        return;
      });
      function update () {
        const ask = confirm("Action can not be undone, proceed ?");
        if (ask) form.submit();
      }
    </script> 
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

    <script>

      function delete_ (id) {
        if (confirm("Delete product ?")) window.location = `modules/product.php?delete=${id}`;
      }

    </script>

  </body>

</html>
