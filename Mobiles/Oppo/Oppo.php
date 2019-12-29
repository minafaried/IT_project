<?php
$admin=$_GET["admin"];
$email=$_GET["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Oppo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Oppo.css" />
    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
    <script>
        /*$(document).ready(function() {
            var x="<?php echo $admin?>";
            if(x =="false")
            {
                $(".edit").hide();
            }
        });*/

        function gotodecrement(model)
        {
            var l="http://localhost:8080/project/IT_project/Mobiles/edit/edit.php?admin=<?php echo $admin;?> & model="+model+" & email=<?php echo $email;?>";
            console.log(l)
            window.location.replace(l);
        }
        function gotobuy( model)
        {
            var l="http://localhost:8080/project/IT_project/Mobiles/Buy/Buy.php?admin=<?php echo $admin;?> & model="+model+" & email=<?php echo $email;?>";
            console.log(l)
            window.location.replace(l);
        }
        $(document).ready(function() {
            var x="<?php echo $admin?>";
            if(x =="false")
            {
                $(".edit").hide();
            }

        });
    </script>
</head>

<body>
    <h1 class="h1">Online Phones</h1>
    <div class="topnav">
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <a class="active" href="#home">Home</a>
        <a href="#forms">Forms</a>
    </div>

    <table>
        <tr>
            <td>
                <div>
                    <img class="images" src="reno2f.png">
                    <pre class="description1">
                        Oppo Reno 2F
                        8GB Ram , 128GB
                        Light Green
                        5,990 EGY</pre>
                    <button class="buy" onclick="gotobuy('Reno_2F')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Reno_2F')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A5 2020.png">
                    <pre class="description1">
                        Oppo A5 2020
                        3GB Ram , 64GB
                        White
                        2,990 EGY</pre>
                    <button class="buy"onclick="gotobuy('A5_2020_White')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('A5_2020_White')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A7.png">
                    <pre class="description1" style="margin-left: -250px;">
                            Oppo A7
                            4GB Ram , 64GB
                            Gold
                            3,050 EGY</pre>
                    <button class="buy" onclick="gotobuy('A7')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('A7')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="f11.png">
                    <pre class="description1" style="margin-left: -300px;">
                                Oppo F11
                                6GB Ram , 128GB
                                Green
                                4,600 EGY</pre>
                    <button class="buy" onclick="gotobuy('F11')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('F11')">decrementby1</button>
                    <br>
                </div>
            </td>
        </tr>


        <tr>
            <td>
                <div>
                    <img class="images" src="f11 pro.png">
                    <pre class="description2">
                            Oppo F11 Pro
                            6GB Ram , 128GB
                            Black
                            4,900 EGY</pre>
                    <button class="buy" onclick="gotobuy('F11_Pro')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('F11_Pro')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A5S.png">
                    <pre class="description2" style="margin-left: -350px;">
                                    Oppo A5S
                                    3GB Ram , 32GB
                                    Red
                                    2,700 EGY</pre>
                    <button class="buy" onclick="gotobuy('A5S_Red')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('A5S_Red')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="reno2.png">
                    <pre class="description2" style="margin-left: -280px;">
                                Oppo Reno 2
                                8GB Ram , 256GB
                                Blue
                                8,500 EGY</pre>
                    <button class="buy" onclick="gotobuy('Reno_2')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Reno_2')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A9 2020.png">
                    <pre class="description2" style="margin-left: -340px;">
                                    Oppo A9 2020
                                    8GB Ram , 128GB
                                    Green
                                    4,900 EGY</pre>
                    <button class="buy" onclick="gotobuy('A9_2020')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('A9_2020')">decrementby1</button>
                    <br>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div>
                    <img class="images" src="A5 2020 2.png">
                    <pre class="description3">
                                Oppo A5 2020
                                4GB Ram , 128GB
                                Black
                                3,700 EGY</pre>
                    <button class="buy" onclick="gotobuy('A5_2020_Black')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('A5_2020_Black')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A5S 2.png">
                    <pre class="description3" style="margin-left: -400px;">
                                        Oppo A5S
                                        3GB Ram , 32GB
                                        Blue
                                        2,700 EGY</pre>
                    <button class="buy" onclick="gotobuy('A5S_Blue')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('A5S_Blue')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="reno 10x zoom.png">
                    <pre class="description3" style="margin-left: -325px;">
                                    Oppo Reno 10X Zoom
                                    8GB Ram , 256GB
                                    Black
                                    13,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('Reno_10X_Zoom')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Reno_10X_Zoom')">decrementby1</button>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="1K.png">
                    <pre class="description3" style="margin-left: -370px;">
                                        Oppo 1K
                                        2GB Ram , 32GB
                                        Red
                                        2,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('1K')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('1K')">decrementby1</button>
                    <br>
                </div>
            </td>
        </tr>
    </table>



</body>

</html>