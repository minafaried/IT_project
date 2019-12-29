<?php
$admin = $_GET["admin"];
$email=$_GET["email"];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Samsung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/project/IT_project/Mobiles/Samsung/samsungcss.css"/>
    <script type="text/javascript" src="http://localhost:8080/project/IT_project/Mobiles/Samsung/jquery-3.4.1.min.js"></script>
    <script>
        $(document).ready(function() {
            var x="<?php echo $admin?>";
            console.log(x);
            if(x ==="false")
            {
                $(".edit").hide();
            }
            else if (x === "true")
                $(".buy").hide();

        });
        function gotoincrement(model)
        {
            var l="http://localhost:8080/project/IT_project/Mobiles/edit/incrementby1.php?admin=<?php echo $admin;?>&model="+model+"&email=<?php echo $email;?>";
            console.log(l)
            window.location.replace(l);
        }
          function gotodecrement(model)
        {
            var l="http://localhost:8080/project/IT_project/Mobiles/edit/decrementby1.php?admin=<?php echo $admin;?>&model="+model+"&email=<?php echo $email;?>";
            console.log(l)
            window.location.replace(l);
        }
        function gotobuy( model)
        {
            var l="http://localhost:8080/project/IT_project/Mobiles/Buy/Buy.php?admin=<?php echo $admin;?>&model="+model+"&email=<?php echo $email;?>";
            console.log(l)
            window.location.replace(l);
        }
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
                    <img class="images" src="A70.png">
                    <pre class="description1">
                        Samsung Galaxy 
                            A70
                        6GB Ram , 128GB
                        Black
                        5,600 EGY</pre>
                    <button class="buy" onclick="gotobuy('A70')">Buy</button><br>
                    <button class="edit" onclick="gotodecrement('A70')">decrementby1</button>
                    <button class="edit" onclick="gotoincrement('A70')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="note 10.png">
                    <pre class="description1">
                        Samsung Galaxy
                           Note 10
                        12GB Ram , 256GB
                        Black
                        17,400 EGY</pre>
                    <button class="buy" onclick="gotobuy('Note_10')">Buy</button><br>
                    <button class="edit" name="edit" onclick="gotodecrement('Note_10')">decrementby1</button>
                    <button class="edit" name="edit " onclick="gotoincrement('Note_10')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A10S.png">
                    <pre class="description1" style="margin-left: -250px;">
                            Samsung Galaxy
                               A10S
                            2GB Ram , 32GB
                            Black
                            2,050 EGY</pre>
                    <button class="buy" onclick="gotobuy('A10S')">Buy</button><br>
                    <button class="edit" name="edit" onclick="gotodecrement('A10S')">decrementby1</button>
                    <button class="edit" name="edit " onclick="gotoincrement('A10S')">incrementby1</button>

                   <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A30S.png">
                    <pre class="description1" style="margin-left: -300px;">
                                Samsung Galaxy
                                    A30S
                                4GB Ram , 64GB
                                Black
                                3,500 EGY</pre>
                    <button class="buy" onclick="gotobuy('A30S')">Buy</button><br>
                    <button class="edit" name="edit"  onclick="gotodecrement('A30S')">decrementby1</button>
                    <button class="edit" name="edit " onclick="gotoincrement('A30S')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>
        </tr>


        <tr>
            <td>
                <div>
                    <img class="images" src="A20S.png">
                    <pre class="description2">
                            Samsung Galaxy
                                A20S
                            3GB Ram , 32GB
                            Blue
                            2,700 EGY</pre>
                    <button class="buy" onclick="gotobuy('A20S')">Buy</button><br>
                    <button class="edit" name="edit"  onclick="gotodecrement('A20S')">decrementby1</button>
                    <button class="edit" name="edit " onclick="gotoincrement('A20S')">incrementby1</button>


                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A10S 2.png">
                    <pre class="description2" style="margin-left: -350px;">
                                    Samsung Galaxy
                                        A10S
                                    2GB Ram , 32GB
                                    Blue
                                    2,050 EGY</pre>
                    <button class="buy" onclick="gotobuy('A10S_Blue')">Buy</button><br>
                    <button class="edit" name="edit"  onclick="gotodecrement('A10S_Blue')">decrementby1</button>
                    <button class="edit" name="edit " onclick="gotoincrement('A10S_Blue')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="M30S.png">
                    <pre class="description2" style="margin-left: -280px;">
                                Samsung Galaxy
                                    M30S
                                4GB Ram , 64GB
                                White
                                3,700 EGY</pre>
                    <button class="buy" onclick="gotobuy('M30S')">Buy</button><br>
                    <button class="edit" name="edit" onclick="gotodecrement('M30S')">decrementby1</button>
                    <button class="edit" name="edit " onclick="gotoincrement('M30S')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="tab A10.png">
                    <pre class="description2" style="margin-left: -340px;">
                                    Samsung Galaxy
                                       Tab A10
                                    2GB Ram , 32GB
                                    Black, 10.1 inch
                                    4,400 EGY</pre>
                    <button class="buy"  onclick="gotobuy('Tab_A10')">Buy</button><br>
                    <button class="edit" name="edit" onclick="gotodecrement('Tab_A10')">decrementby1</button>
                    <button class="edit" name="edit " onclick="gotoincrement('Tab_A10')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div>
                    <img class="images" src="A51.png">
                    <pre class="description3">
                                Samsung Galaxy
                                    A51
                                6GB Ram , 128GB
                                Pink
                                5,350 EGY</pre>
                    <button class="buy" onclick="gotobuy('A51')"> Buy</button><br>
                    <button  class="edit" name="edit" onclick="gotodecrement('A51')">decrementby1</button>
                    <button  class="edit" name="edit " onclick="gotoincrement('A51')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A80.png">
                    <pre class="description3" style="margin-left: -400px;">
                                        Samsung Galaxy
                                            A80
                                        8GB Ram , 128GB
                                        Gold
                                        7,650 EGY</pre>
                    <button class="buy" onclick="gotobuy('A80')">Buy</button><br>
                    <<button class="edit" name="edit" onclick="gotodecrement('A80')">decrementby1</button>
                    <button  class="edit" name="edit " onclick="gotoincrement('A80')">incrementby1</button>

                        <br>
                        <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A51 2.png">
                    <pre class="description3" style="margin-left: -325px;">
                                    Samsung Galaxy
                                        A51
                                    6GB Ram , 128GB
                                    Black
                                    5,350 EGY</pre>
                    <button class="buy"  onclick="gotobuy('A51_black')">Buy</button><br>
                    <button  class="edit" name="edit"onclick="gotodecrement('A51_black')">decrementby1</button>
                    <button  class="edit" name="edit " onclick="gotoincrement('A51_black')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>

            <td>
                <div>
                    <img class="images" src="A51 3.png">
                    <pre class="description3" style="margin-left: -370px;">
                                        Samsung Galaxy
                                            A51
                                        6GB Ram , 128GB
                                        White
                                        5,350 EGY</pre>
                    <button class="buy"  onclick="gotobuy('A51_white')">Buy</button><br>
                    <button  class = "edit" onclick="gotodecrement('A51_white')">decrementby1</button>
                    <button  class = "edit" onclick="gotoincrement('A51_white')">incrementby1</button>

                    <br>
                    <br>
                </div>
            </td>
        </tr>
    </table>



</body>

</html>