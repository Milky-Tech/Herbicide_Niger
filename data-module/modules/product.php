<?php 

include "../conn.php";

function report ($url, $data, $type = false) {
    if (!$type) header("location:../$url?msg-err=$data");
    else header("location:../$url?msg-success=$data");
    die();
}

#deleting product
if (isset($_GET["delete"])) {
    
    $id = $_GET["delete"];
    $sql = "DELETE from `products` where id = '$id'";
    
    $data = $conn -> query("SELECT * from products where id = '$id'") -> fetch_assoc();
    $url = "../../" . $data["url"];

    $qry = $conn -> query($sql);

    if (file_exists($url)) unlink($url);

    if ($qry) report("products-all.php","Product ID[$id] successfully deleted&id=$id", true);

    else report("product-single.php","Unable to delete product&id=$id");

}

#updating product
if (isset($_GET["del"])) { 

    $id = $_POST["id"]; 
    #getting the product image URL
    $data = $conn -> query("SELECT * from products where id = '$id'") -> fetch_assoc();
    $url = "../../" . $data["url"];

    #deleting product image
    if ($_FILES["image"]["size"] > 0) {

        if (file_exists($url)) unlink($url);

        #uploading new pics      
        $file_name = date("ymdhis");
        $file_path = "../../products";

        if (!is_dir($file_path)) mkdir($file_path);

        $file_name = "$file_path/$file_name.jpg";
        if (!file_exists($file_name))
         if (!move_uploaded_file($_FILES["image"]["tmp_name"], $file_name)) report("product-single.php","Unable to upload picture&id=$id");
        
         $url = $file_name;
    }

    global $url;
    $url = substr($url, 6);
    #doing other updates
    $trade_name = addslashes($_POST["trade_name"]); $ingredients = addslashes($_POST["ingredients"]);
    $company_name = addslashes($_POST["company_name"]); $formulation = addslashes($_POST["formulation"]);
    $application_method = addslashes($_POST["application_method"]); $application_time = addslashes($_POST["application_time"]);
    $weed_controlled = addslashes($_POST["weed_controlled"]);

    $sql = "UPDATE `products` SET `name`='$trade_name',`url`='$url',`ingredients`='$ingredients',
    `company_name`='$company_name',`formulation`='$formulation',`application_method`='$application_method',
    `application_time`='$application_time',`weeds`='$weed_controlled' WHERE `id` = '$id'";

    $qry = $conn -> query($sql);
    
    if ($qry) report("product-single.php","Product, successfully updated&id=$id", true);

    else report("product-single.php","Unable to update product&id=$id");

}

#adding up product
if (isset($_POST["add-product"])) {

    $trade_name = addslashes($_POST["trade_name"]); $ingredients = addslashes($_POST["ingredients"]);
    $company_name = addslashes($_POST["company_name"]); $formulation = addslashes($_POST["formulation"]);
    $application_method = addslashes($_POST["application_method"]); $application_time = addslashes($_POST["application_time"]);
    $weed_controlled = addslashes($_POST["weed_controlled"]); $crop_selective = addslashes($_POST["crop_selected"]);
    
    if ($_FILES["image"]["size"] > (5 * 1024 * 1024)) report("page.php","Files size exceeds 5MB");

    $file_name = date("ymdhis");
    $file_path = "../../products";

    if (!is_dir($file_path)) mkdir($file_path);

    $file_name = "$file_path/$file_name.jpg";

    if (!file_exists($file_name))
     if (!move_uploaded_file($_FILES["image"]["tmp_name"], $file_name)) report("page.php","Unable to upload picture");

    $file_name = substr($file_name, 6);

    $sql = "INSERT into `products` (`name`, `url`, `ingredients`, `company_name`, `formulation`, `application_method`, `application_time`, `weeds`, `crop_selective`)
            values ('$trade_name', '$file_name', '$ingredients', '$company_name', '$formulation', '$application_method',
                    '$application_time', '$weed_controlled', '$crop_selective')";

    $qry = $conn -> query($sql);

    if ($qry) report("page.php","Product successfully added", true);

    else report("page.php","Unable to add product");

}