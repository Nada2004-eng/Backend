<?php
require './includes/db_connect.php';
$result = $conn->query("SELECT id, name, price FROM products");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="./assets/css/normalize.css" />
		<link rel="stylesheet" href="./assets/css/products.css" />
		<link rel="stylesheet" href="./assets/css/header.css" />

		<!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
		<link rel="stylesheet" href="./assets/css/all.min.css" />
        <!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />
    	<link rel="icon" href="./assets/imgs/Nav-logo.png" type="image/x-icon">
        <title>Products</title>
        <style>
        :root {
            --main-color: #19c8fa;
            --transparent-color: rgb(15 116 143 / 70%);
            --section-padding: 100px;
        }

        /*  Global Rules Start*/
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: "Open Sans", sans-serif;
            text-transform: capitalize;
        }
        ul {
            list-style: none;
        }
        .container {
            padding-left: 15px;
            padding-right: 15px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Small */
        @media (min-width: 768px) {
            .container {
                width: 750px;
            }
        }

        /* Medium */
        @media (min-width: 992px) {
            .container {
                width: 970px;
            }
        }
        /* Large */
        @media (min-width: 1200px) {
            .container {
                width: 1170px;
            }
        }
        /*  Global Rules End*/

        /* component */

        .special-heading {
            position: relative;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            margin-top: 100px;
        }

        .special-heading h2 {
            font-size: 40px;
            font-weight: normal;
            text-transform: uppercase;
            margin-bottom: 70px;
            position: relative;
        }
        .special-heading h2::before {
            content: "";
            position: absolute;
            height: 2px;
            width: 120px;
            background-color: #333;
            left: 50%;
            bottom: -30px;
            transform: translateX(-50%);
        }
        .special-heading h2::after {
            content: "";
            position: absolute;
            height: 14px;
            width: 14px;
            background-color: white;
            border: 2px solid #333;
            border-radius: 50%;
            left: 50%;
            bottom: -38px;
            transform: translateX(-50%); 
        }


        /* component */

        /* portfolio start  */

        .products .shuffel {
            display: flex;
            justify-content: center;
            margin-top: -40px;
            margin-bottom: 80px;
        }

        .products .shuffel li a {
            padding: 10px;
            cursor: pointer;
            border-radius: 3px;
            color: black;
            font-weight: bold;

        }

        .products .shuffel .active a {
            background-color: var(--main-color);
            color: white;
            margin-left: 2px;
            margin-right: 2px;

        }

        .products .shuffel li a:hover {
            background-color: var(--main-color);
            color: white;
            
            
        }
        </style>
	</head>
<body>

        <!-- header start  -->
		<header>
			<div class="container">
				<a href="#">
					<img src="./assets/imgs/Nav-logo.png" alt="logo" />
				</a>
                <pc class="header-logo">Hend Abdelfattah</pc>
				<nav>
					<i class="fas fa-bars toggle"></i>
					<ul>
						<li><a target="_blank" class="active" href="./index.html">Home</a></li>
						<li><a target="_blank" href="#">Products</a>
						<li><a target="_blank" href="./pages/contact-us.html">Contact Us</a></li>
						<li><a target="_blank" href="./pages/news-letter.html">News-letter</a></li>
						<li><a target="_blank" href="./pages/advice.html">Advices</a></li>
						<li><a target="_blank" href="./index.php">Login</a></li>
						<li><a target="_blank" href="./pages/change.html">Change Password</a></li>
						<li><a target="_blank" href="./index.php">Sign Up</a></li>
						<li><a target="_blank" href="./pages/about-us.html">About Us</a></li>
					</ul>
					<div class="form">
						<i class="fa-solid fa-magnifying-glass"></i>
						<i class="fa-solid fa-magnifying-glass"></i>
					</div>
				</nav>
			</div>
		</header>
		<!-- header end  -->
		<!-- products start  -->
            <div class="products padding" id="products">
                <h2 class="main-title">products</h2>
                <ul class="shuffel">
                    <!-- <li class="active"><a href="#all">all</a></li> -->
                    <li ><a href="#cosmetics">cosmetics</a></li>
                    <li class="active"><a href="#controlled-medicine">controlled medicine</a></li>
                    <li><a href="#Regular-medicine">Regular medicine</a></li>
                </ul>

            <!-- controlled-medicine -->
                <div class="container">
                    <div id="controlled-medicine" class="box">
                        <img src="./assets/images/trittico.jpg" alt="" />
                        <div class="content">
                            <h3>Trittico 100 mg</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">50 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/xigduo.jpg" alt="" />
                        <div class="content">
                            <h3>Xigduo 5 mg/1000 mg</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">53 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/pantoloc.jpg" alt="" />
                        <div class="content">
                            <h3>Pantoloc 20 mg</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">65 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/L-c.jpg" alt="" />
                        <div class="content">
                            <h3>L-Carnitine</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">85 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/alzmenda.jpg" alt="" />
                        <div class="content">
                            <h3>alzmenda</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">95 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/apex.jpg" alt="" />
                        <div class="content">
                            <h3>Apexidonea</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">90 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/nolvadex.jpg" alt="" />
                        <div class="content">
                            <h3>Nolvadex</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">105 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/asmakast.jpg" alt="" />
                        <div class="content">
                            <h3>Asmakast</h3>
                        </div>
                        <div class="info">
                            <a href="">Add to cart</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </div>
            <!-- controlled-medicine -->

            <!-- Section -->
            <div id="cosmetics" class="special-heading">
                <h2>cosmetics</h2>
                </div>
            <!-- Section -->

            <!-- cosmetics Start -->
                <div class="container">
                    <div class="box">
                                            <img src="./assets/images/cos-1.jpg" alt="" />
                                            <div class="content">
                                                <h3>Mascara BioNike
                                                </h3>
                                            </div>
                                            <div class="info">
                                                <a href="contact-us.html">200 EGP</a>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                    </div>
                    <div class="box">
                                            <img src="./assets/images/cos-2.jpg" alt="" />
                                            <div class="content">
                                                <h3>Kohl BioNike </h3>
                                            </div>
                                            <div class="info">
                                                <a href="contact-us.html">130 EGP</a>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                    </div>
                    <div class="box">
                                            <img src="./assets/images/cos-3.jpg" alt="" />
                                            <div class="content">
                                                <h3>lipGloss BioNike</h3>
                                            </div>
                                            <div class="info">
                                                <a href="contact-us.html">160 EGP</a>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                    </div>
                    <div class="box">
                                            <img src="./assets/images/cos-4.jpg" alt="" />
                                            <div class="content">
                                                <h3>he Nordea Serum</h3>
                                            </div>
                                            <div class="info">
                                                <a href="contact-us.html">81 EGP</a>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                    </div>
                    <div class="box">
                                            <img src="./assets/images/cos-5.jpg" alt="" />
                                            <div class="content">
                                                <h3>Eico Joya Nourishing Hair Conditioner</h3>
                                            </div>
                                            <div class="info">
                                                <a href="contact-us.html">320 EGP</a>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                    </div>
                    <div class="box">
                                            <img src="./assets/images/cos-6.jpg" alt="" />
                                            <div class="content">
                                                <h3>Concealer Collagra</h3>
                                            </div>
                                            <div class="info">
                                                <a href="contact-us.html">290 EGP</a>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                    </div>
                    <div class="box">
                                            <img src="./assets/images/cos-7.jpg" alt="" />
                                            <div class="content">
                                                <h3>Dago Shampoo</h3>
                                            </div>
                                            <div class="info">
                                                <a href="contact-us.html">290 EGP</a>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                    </div>
                    <div class="box">
                                            <img src="./assets/images/cos-8.jpg" alt="" />
                                            <div class="content">
                                                <h3>Foundation Collagra
                                                </h3>
                                            </div>
                                            <div class="info">
                                                <a href="contact-us.html">290 EGP</a>
                                                <i class="fa-solid fa-cart-shopping"></i>
                                            </div>
                    </div>
                </div>
            <!-- cosmetics end -->

            <!-- Section -->
            <div id="Regular-medicine" class="special-heading">
                <h2>Regular medicine</h2>
                </div>
            <!-- Section -->

            <!-- Regular medicine box Start -->
                <div class="container">
                    <div class="box">
                        <img src="./assets/images/malox plus.jpg" alt="" />
                        <div class="content">
                            <h3>Maalox Plus</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">120 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/brufen.jpg" alt="" />
                        <div class="content">
                            <h3>Bruffen 600</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">120 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/strepsils.jpg" alt="" />
                        <div class="content">
                            <h3>Strepsils Orange</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">120 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/mixtrad.jpg" alt="" />
                        <div class="content">
                            <h3>Mixtard 30</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">120 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/panadol.jpg" alt="" />
                        <div class="content">
                            <h3>Panadol Extra</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">120 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/pas-c&f.jpg" alt="" />
                        <div class="content">
                            <h3>Panadol Cold & Flu</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">120 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/otrivin1.jpg" alt="" />
                        <div class="content">
                            <h3>Otrivin (Adults)</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">35 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="box">
                        <img src="./assets/images/otrivin2.jpg" alt="" />
                        <div class="content">
                            <h3>Otrivin (children)</h3>
                        </div>
                        <div class="info">
                            <a href="contact-us.html">25 EGP</a>
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </div>
                </div>
  <!-- Regular medicine box end -->

  
             <?php while ($row = $result->fetch_assoc()) {
            echo '<div class="box">';
            echo '<img src="./assets/images/products_background.png" alt="' 
                    . htmlspecialchars($row['name']) . '">';
            echo '<div class="content"><h3>' 
                    . htmlspecialchars($row['name']) . '</h3></div>';
            echo '<div class="info"><a href="./pages/contact-us.html">' 
                    . htmlspecialchars($row['price']) . ' EGP</a>';
            echo '<i class="fa-solid fa-cart-shopping"></i></div>';
            echo '</div>';
        } ?>

                
            </div>
            <!-- <products end  -->
                
            <!-- FOOTER -->
            <footer>
                <div class="container">
                    <img src="./assets/images/Nav-logo.png" alt="logo" />
                    <p>we are 24/7 in business , keeping you safe  </p>
                    <div class="social-icons">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fas fa-home"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                    <p class="copyright">© 2025 <span>Hend Abdelfattah's Pharmacy</span> All Right Reserved</p>

                </div>
            </footer>
</body>