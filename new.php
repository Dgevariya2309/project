<?php
include 'dbcon.php';
include 'header.php';
?>

<html>

<head lang="en">
<title>Hotel Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>




    <?php


$filtered = false;
$value = "All Items";
$myHeaderClass1 = "";
$myHeaderClass2 = "";
$myHeaderClass3 = "";


if (isset($_POST['chef'])) {
    $GLOBALS['filtered'] = false;
    $result = display();
    $myHeaderClass1 = "active";
}

if (isset($_POST['chef'])) {
    $GLOBALS['filtered'] = true;
    $GLOBALS['value'] = "South Indian";
    $result = display();
    $myHeaderClass2 = "active";
    $myHeaderClass1 = "";
}

if (isset($_POST['chef'])) {
    $GLOBALS['filtered'] = true;
    $GLOBALS['value'] = "Italian";
    $result = display();
    $myHeaderClass3 = "active";
    $myHeaderClass1 = "";

}

?>

<div class="container speciality-class box-shadow-all">
    <h1 class="h-primary center">Chef's</h1>
    <div class="row">
  <div class="column">
    <img src="https://i.pinimg.com/736x/a7/fc/f5/a7fcf5f67501543a57a42d7b29534623.jpg" alt="Snow" style="width:67%">
  </div>
  <div class="column">
    <img src="https://i.pinimg.com/originals/d3/c4/2c/d3c42c4d91c6d24b89bf8ab2175e9f75.png" alt="Snow" style="width:75%">
  </div>
  <div class="column">
    <img src="https://i.pinimg.com/736x/8c/79/ad/8c79ad83c69ceda5379e9e3dee683e43.jpg" alt="Forest" style="width:90%">
  </div>

        
            <input type="submit" class="<?= $myHeaderClass1 ?> b1 food-btn box-shadow-all" name="all" value="Moye Elisa" />
            <input type="submit" class="<?= $myHeaderClass2 ?> b2 food-btn box-shadow-all " name="southindian"
                value="Sun Toutou" />
            <input type="submit" class="<?= $myHeaderClass3 ?> b3 food-btn box-shadow-all " name="italian" value="Poye Bourgeois" />
       
 
</div>
<style>
    .column {
  float: left;
  width: 33.33%;
  padding: 5px;
  
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

.row {
  display: flex;
  padding-left: 80px;
  
}

.column {
  flex: 33.33%;
  padding: 5px;
  
}

</style>
</div>

</body>


</html>

<?php
include 'footer.php';
?>
