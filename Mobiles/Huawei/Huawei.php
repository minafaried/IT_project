<?php
$admin=$_GET["admin"];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Huawei</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="Huawei.css" />
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
                    <img class="images" src="mate 20.png">
                    <pre class="description1">

                        Huawei Mate 20 
                        6GB Ram , 128GB
                        Blue
                        7,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('Mate_20')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Mate_20')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="P30.png">
                    <pre class="description1">

                        Huawei P30
                        8GB Ram , 128GB
                        Crystal Blue
                        8,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('P_30')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('P_30')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="media pad t10.png">
                    <pre class="description1" style="margin-left: -250px;">
                            Huawei Media Pad
                                T10
                            2GB Ram , 16GB
                            Gold
                            3,000 EGY</pre>
                    <button class="buy" onclick="gotobuy('Media_Pad_T10')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Media_Pad_T10')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="media pad m5.png">
                    <pre class="description1" style="margin-left: -300px;">
                                Huawei Media Pad
                                    M5 Lite
                                3GB Ram , 32GB
                                Gold
                                5,700 EGY</pre>
                    <button class="buy" onclick="gotobuy('Media_Pad_M5')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Media_Pad_M5')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>
        </tr>


        <tr>
            <td>
                <div>
                    <img class="images" src="Y5 209.png">
                    <pre class="description2">
                            Huawei Y5 2019
                            2GB Ram , 32GB
                            Blue
                            1,720 EGY</pre>
                    <button class="buy" onclick="gotobuy('Y5_2009')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Y5_2009')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="P30 Lite.png">
                    <pre class="description2" style="margin-left: -350px;">
                                    Huawei P30 Lite
                                    4GB Ram , 128GB
                                    White
                                    3,900 EGY</pre>
                    <button class="buy" onclick="gotobuy('P_30_Lite_White')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('P_30_Lite_White')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="Tablet T3.png">
                    <pre class="description2" style="margin-left: -280px;">
                                Huawei Tablet T3
                                1GB Ram , 16GB
                                Gray
                                1,650 EGY</pre>
                    <button class="buy" onclick="gotobuy('Tablet_T3')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Tablet_T3')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="P30 Lite 2.png">
                    <pre class="description2" style="margin-left: -340px;">
                                    Huawei P30 Lite
                                    6GB Ram , 128GB
                                    Black
                                    5,100 EGY</pre>
                    <button class="buy" onclick="gotobuy('P_30_Lite_Black')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('P_30_Lite_Black')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div>
                    <img class="images" src="Nova 5t.png">
                    <pre class="description3">

                                Huawei Nova 5T
                                8GB Ram , 128GB
                                Blue
                                6,500 EGY</pre>
                    <button class="buy" onclick="gotobuy('Nova_5T')">Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Nova_5T')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="Y9S.png">
                    <pre class="description3" style="margin-left: -400px;">

                                        Huawei Y9S
                                        6GB Ram , 128GB
                                        Black
                                        4,500 EGY</pre>
                    <button class="buy" onclick="gotobuy('Y9S')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Y9S')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="y9 2019.png">
                    <pre class="description3" style="margin-left: -325px;">
                                    Huawei Prime
                                       Y9 2019
                                    4GB Ram , 128GB
                                    Blue
                                    3,900 EGY</pre>
                    <button class="buy" onclick="gotobuy('Y9_2019')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Y9_2019')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="Y7 2019.png">
                    <pre class="description3" style="margin-left: -370px;">
                                        Huawei Prime
                                          Y7 2019
                                        3GB Ram , 32GB
                                        Red
                                        2,350 EGY</pre>
                    <button class="buy" onclick="gotobuy('Y7_2019')" >Buy</button><br>
                    <button class="edit" class="edit" name="edit " onclick="gotodecrement('Y7_2019')">decrementby1</button>
                    <br>
                    <br>
                </div>
            </td>
        </tr>
    </table>



</body>

</html>