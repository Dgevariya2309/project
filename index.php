<?php
include 'header.php';
include 'home.php';
include 'homerooms.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotel Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

</head>

<body>
    <section id="booking-hall">
        <a href="food.php"><img class="img-fluid hall-img" src="img/banquet.jpg" alt="hall" /></a>
        <div class="hall-div">
            <h1 class="h1">Best Banquet Hall For Your Party</h1>
            <button id="book-btn"><a href="bookinghall.php"> Book Now</a></button>

        </div>

    </section>



    <script>
    function forgotPopup() {
        document.getElementById('login-popup').style.display = "none";
        document.getElementById('forgot-popup').style.display = "flex";
    }
    </script>


</body>

</html>
<?php
include 'footer.php';
?>

<!-- TODO -->
