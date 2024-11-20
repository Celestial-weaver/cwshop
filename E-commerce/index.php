<?php
// data connect 
$DBservername = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBdatabasename = "cwshop";

$conn = new mysqli($DBservername, $DBusername, $DBpassword, $DBdatabasename);

?>

<html>
    <head>
        <title>
            CW.shop
        </title>
        <link rel="stylesheet" href="style.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <section class="top-banner">Summer Scale For All Swim Suits And Free Express Delivery - OFF 50%!  &nbsp&nbsp&nbsp&nbsp <b><u>ShopNow</u></b> </section>
        <br>
        <nav>
            <h1>Exclusive</h1>
            <ul>
                <li>Home</li>
                <li>Contact</li>
                <li>About</li>
                <li>Sign Up</li>    
            </ul>
            <div>
                <div class="search-box">
                    <input type="text" placeholder="What are you looking for?">
                    <ion-icon name="search-outline"></ion-icon>
                </div>
                <ion-icon name="heart-outline"></ion-icon>
                <ion-icon name="cart-outline"></ion-icon>
            </div>
        </nav>
        <hr>
        <header>
            <div class="side-list">
                <ul>
                    <li>Woman's Fashion</li>
                    <li>Men's fashion</li>
                    <li>Electronics</li>
                    <li>Home & Lifestyle</li>
                    <li>Sports & Outdoor</li>
                    <li>Baby's & Toys</li>
                    <li>Groceries & Pets</li>
                    <li>Health & Beauty</li>
                </ul>
            </div>
            <div class="header-banner">
                <div class="banner">
                    <h3>Iphone 16 Plus</h3>  
                    <h2><u>Shop Now</u> <ion-icon name="arrow-forward-outline"></ion-icon> </h2>
                </div>
            </div>
        </header>

        <section class="Todays">
            <div>
                <div class="heading">
                    <div class="red-box-in-collection"></div>
                    <h3>Today's</h3>
                </div>
                <br>
                <div class="timer-box">
                    <h1>Flash Sales</h1>
                    <div class="date"> 
                        <div>
                            <h4>Days</h4>
                            <h1>03<span>:</span></h1>
                        </div>
                        <div>
                            <h4>Days</h4>
                            <h1>03<span>:</span></h1>
                        </div>
                        <div>
                            <h4>Days</h4>
                            <h1>03<span>:</span></h1>
                        </div>
                        <div>
                            <h4>Days</h4>
                            <h1>03</h1>
                        </div>
                    </div>
                </div>


                <?php
                // fetching products table 
                $query_to_fetch_products = "select * from products";
                $fetching_products = $conn->query($query_to_fetch_products);
                $productsID = array();
                $productsName = array();
                $productsPrice = array();
                $productsDiscount = array();
                $productsRating = array();
                while($rows = $fetching_products->fetch_assoc()){
                    array_push($productsID,$rows['id']);
                    $productsPrice[$rows['id']] = $rows['price'];
                    $productsDiscount[$rows['id']] = $rows['discount'];
                    $productsRating[$rows['id']] = $rows['rating'];

                    // array_push($productsPrice[$rows['id']],$rows['price']);
                    // array_push($productsDiscount[$rows['id']],$rows['discount']);
                    // array_push($productsRating[$rows['id']],$rows['rating']);
                    
                }
                for($i=0 ; $i<5 ; $i++){
                ?>
                <div class="item-slider">
                    <div class="outer-image-box">
                        <div class="inner-image-box">
                            <div>
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </body>
</html>