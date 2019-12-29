<?php
$admin=$_GET["admin"];
$email=$_GET["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apple</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Apple.css" />
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
                    <img class="images" src="11 Pro.png">
                    <pre class="description1">
                        IPhone 11 Pro
                        256 Gigabyte
                        Gray
                        26,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('11_Pro_256')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('11_Pro_256')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="xs.png">
                    <pre class="description1">
                        IPhone XS Max
                        64 Gigabyte
                        Gray
                        18,500 EGY</pre>
                    <button class="buy" onclick="gotobuy('XS')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('XS')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="xr.png">
                    <pre class="description1" style="margin-left: -250px;">
                            IPhone XR Max
                            128 Gigabyte
                            Black
                            12,800 EGY</pre>
                    <button class="buy" onclick="gotobuy('XR')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('XR')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="6s.png">
                    <pre class="description1" style="margin-left: -300px;">
                                IPhone 6S
                                32 Gigabyte
                                Gray
                                5,900 EGY</pre>
                    <button class="buy" onclick="gotobuy('6S')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('6S')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>
        </tr>


        <tr>
            <td>
                <div>
                    <img class="images" src="8+.png">
                    <pre class="description2">
                            IPhone 8 Plus
                            64 Gigabyte
                            Gray
                            11,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('8_Plus_Gray')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('8_Plus_Gray')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="8+2.png">
                    <pre class="description2" style="margin-left: -350px;">
                                    IPhone 8 Plus
                                    64 Gigabyte
                                    Gold
                                    11,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('8_Plus_Gold')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('8_Plus_Gold')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="7.png">
                    <pre class="description2" style="margin-left: -280px;">
                                IPhone 7
                                32 Gigabyte
                                Black
                                7,700 EGY</pre>
                    <button class="buy" onclick="gotobuy('7')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('7')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="6.png">
                    <pre class="description2" style="margin-left: -340px;">
                                    IPhone 6
                                    32 Gigabyte
                                    Gold
                                    4,700 EGY</pre>
                    <button class="buy" onclick="gotobuy('6')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('6')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div>
                    <img class="images" src="6s+.png">
                    <pre class="description3">
                                IPhone 6S Plus
                                32 Gigabyte
                                Gray
                                6,800 EGY</pre>
                    <button class="buy" onclick="gotobuy('6S_Plus_Gray')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('6S_Plus_Gray')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="6s+2.png">
                    <pre class="description3" style="margin-left: -400px;">
                                        IPhone 6S Plus
                                        32 Gigabyte
                                        Gold
                                        6,800 EGY</pre>
                    <button class="buy" onclick="gotobuy('6S_Plus_Gold')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('6S_Plus_Gold')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="8+3.png">
                    <pre class="description3" style="margin-left: -325px;">
                                    IPhone 8 Plus
                                    64 Gigabyte
                                    Silver
                                    11,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('8_Plus_Silver')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('8_Plus_Silver')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="11pro.png">
                    <pre class="description3" style="margin-left: -370px;">
                                        IPhone 11 Pro
                                        64 Gigabyte
                                        Gray
                                        21,500 EGY</pre>
                    <button class="buy" onclick="gotobuy('11_Pro_64')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('11_Pro_64')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>
        </tr>
    </table>



</body>

</html>