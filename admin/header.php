<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responcive Menu</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.min.css ">
</head>
<body>
    <header>
        <div class="container">
            <div class="flex">
                <div class="logo">
                <a href="#">
                    <img src="../img/ha11.png" alt="">
                </a>
            </div>
                <nav>
                    <ul class="flex main_menu">
                        <li>
                        <a href="room.php">Rooms</a>
                        </li>
                        <li><a href="food.php">Food</a></li>
                        <li><a href="hall.php">Hall</a></li>
                        <li><a href="dispcustomer.php">Manage Customer</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                    <div class="toggle">
                        <i class="fa fa-bars"></i>
                    </div>
                    <ul class="mob_main_menu">
                        <li>
                            <a href="room.php">Rooms</a>
                        </li>
                        <li>
                            <a href="food.php">food</a>
                        </li>
                        <li><a href="hall.php">Booking Hall</a></li>
                        <li><a href="dispcustomer.php">Manage Customer</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="#">Log Out</a></li>
                    </ul>
                   
                </nav>
            </div>
        </div>
    </header>
    <script src="./jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.mob_sub_menu ,.mob_main_menu').hide();

            $('.toggle').click(function()
            {
                $('.mob_main_menu').slideToggle();
                $('.toggle > i').toggleClass('fa-bars fa-xmark');
            });

            $('.mob_main_menu > li > a').click(function(){
                // $('.mob_sub_menu >li').slideToggle();
                $(this).next('.mob_sub_menu').slideToggle();
            })

        })
    </script>
</body>
</html>