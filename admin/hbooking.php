<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Hotel Management</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Room</title>
        <link rel="stylesheet" href="stylee.css">
        <link rel="stylesheet" href="bootstrap-4.3.1-dist\css\bootstrap.min">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
    </head>
    <style>
        .h1 {
        text-align: center;
        margin-top: 20px;
        }
        body::before {
        position: absolute;
        content: "";
        height: 100%;
        width: 100%;
        z-index: -1;
        opacity: 0.89;
        background: url('../img/w1.jpg') center center/cover no-repeat;
        object-fit: cover;
        }
        .tbl_center {
        /* display:"flex";
        justify-content: center;
        align-items:center; */
        /* width:100%!important;
        height:100%;  */
        margin-top: 100px;
        width: 50px !important;
        /* padding:40px; */
        }
        table {
        width: 10%;
        }
    </style>
    <body>
        <div class="table-responsive">
            <form method="post" action="dispcustomer.php">
                <table border="2" class="table">
                    <tr class="bg-info">
                        <th> Hall Id</th>
                        <th>User Name</th>
                        <th>Hall Type</th>
                        <th>Booking Date</th>
                        <th>Members</th>
                        <!-- <th>delete operation</th>        -->
                    </tr>
                    <?php
                        include('../bootstrap.php');
                        include_once ("connect.php");
                        include('header4.php');
                        
                        function display()
                        {
                            $conn=connection();
                            $str="select * from hall_details";
                            $result=$conn->query($str);
                            $conn->close();
                            return $result;
                        }
                        
                        
                          $result=display();
                          if($result->num_rows>0)
                          {
                              while($row = $result->fetch_assoc())
                              {
                        ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <?php   
                            $conn=connection();
                            $str="select * from `hall-bookings` where `id`='$row[hallbookingid]'";
                            $result1=mysqli_query($conn,$str);
                            $conn->close();
                            if($result1)
                            {
                                $row1 = mysqli_fetch_assoc($result1);
                                // $row1 = $result1->fetch_assoc();
                                $bookingdate=$row1['date'];
                                $conn=connection();
                                $str="select * from `hall` where `id`='$row1[h_id]'";
                                $result2=mysqli_query($conn,$str);
                                $conn->close();
                                if($result1)
                                {
                                    $row2 = mysqli_fetch_assoc($result2);
                                    $halltype=$row2['hallyype'];
                                }
                            }
                                ?>
                        <td><?=$halltype?></td>
                        <td><?=$bookingdate?></td>
                        <td><?php echo $row['members']; ?></td>
                    </tr>
                    <?php 
                        }
                            } 
                        ?>
                </table>
            </form>
        </div>
    </body>
</html>