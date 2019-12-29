<?php
$admin=$_GET["admin"];
$email=$_GET["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Home.css" />
    <script src="main.js"></script>
</head>

<body>
    <h1 class="h1">Online Phones</h1>

    <div class="topnav">
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a class="active" href="#home">Home</a>
        <a href="#forms">Forms</a>
    </div>

        <div class="images">

            <div class="unit">
                <img class="image" class="Apple" src="Apple.png">
                <!-- <button type="submit" class="button1" name="Apple" id="Apple">Apple</button>-->
                <a class = "button1"  href="http://localhost:8080/project/IT_project/Mobiles/Apple/Apple.php?admin=<?php echo$admin;?>&email=<?php echo $email;?>" style="text-decoration: none; color: white"><span class="span1">Apple</span></a>
            </div>


            <div class="unit">
                <img class="image" src="Samsung.png">
                 <a class = "button2" href="http://localhost:8080/project/IT_project/Mobiles/Samsung/Samsung.php?admin=<?php echo $admin;?>&email=<?php echo $email;?>" style="text-decoration: none; color: white"><span class="span2">Samsung</span></a>
            </div>

            <br> <br> <br>


            <div class="unit">
                <img class="image" src="Oppo.png">
                <a class = "button1" href="http://localhost:8080/project/IT_project/Mobiles/Oppo/Oppo.php?admin=<?php echo $admin;?>&email=<?php echo $email;?>" style="text-decoration: none; color: white"><span class="span2">Oppo</span></a>
            </div>

            <div class="unit">
                <img class="image" src="Huawei.PNG">
                <a class = "button2" href="http://localhost:8080/project/IT_project/Mobiles/Huawei/Huawei.php?admin=<?php echo $admin;?>&email=<?php echo $email;?>" style="text-decoration: none; color: white"><span class="span2">Huawei</span></a>
            </div>


        </div>



</body>

</html>