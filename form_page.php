<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products | Online Game Consoles Retail Shop</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;900&display=swap" rel="stylesheet">   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!---------------MAIN-CONTAINER--------------->
    <div class="header">
    <div class="container">

        <!---------------MAIN-NAVIGATION--------------->
            <div class="navbar">
                <div class="logo">
                    <img src="./images/logo.png" width="125px" alt="">
                </div>
                 <nav>
                   <ul id="MenuItems">
                        <li><a href="http://localhost/shop/index.html#">Home</a></li>
                        <li><a href="http://localhost/shop/products.html">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="http://localhost/shop/contact.html">Contact</a></li>
                        <li><a href="http://localhost/shop/signup.html">Account</a></li>
                    </ul>
                </nav>
                <i class="fa fa-heart-o"></i>
                <i class="fa fa-shopping-bag"></i>
                <i class="fa fa-user-o"></i>
         <!--       <img src="./images/cart.png" width="30px" height="30px" alt="Shopping Cart">      --->
                <img src="./images/menu.png"  onclick="menutoggle()" class="menu_icon" alt="Menu Icon">
                </div>

         
    </div>
</div>

   
    
      <!---------------FORM-PAGE--------------->
      

           <!---------------TOP-BRANDS--------------->
           
        <div class="brands">
            <div class="small_container">
                <h2 class="title">Top Brands</h2>
                <div class="row">
                    <div class="col-5">
                        <img src="./images/brand1.png" alt="">
                    </div>
                     <div class="col-5">
                        <img src="./images/brand2.png" alt="">
                    </div>
                     <div class="col-5">
                        <img src="./images/brand3.png" alt="">
                    </div>
                     <div class="col-5">
                        <img src="./images/brand4.png" alt="">
                    </div>
                     <div class="col-5">
                        <img src="./images/brand5.png" alt="">
                    </div>
                </div>
            </div>
        </div>

  
           
          <!---------------FOOTER--------------->
         <div class="footer">
             <div class="container">
                 <div class="row">
                     <div class="footer-col-1">
                         <h3>Download Our App</h3>
                         <p>Download AIGameShop App for Android and ios mobile devices</p>
                         <div class="app_logo">
                             <a href="https://play.google.com/store/?hl=en_US&gl=US"><img src="./images/android.png" alt=""></a>
                             <a href="https://apps.apple.com/us/app/google/id284815942"><img src="./images/ios.png" alt=""></a>
                         </div>
                        
                     </div>
                     <div class="footer-col-2">
                         <a href="localhost/shop/index.html"><img src="./images/logo.png" alt=""></a>
                         <p>Stay connected and reciever our offer and give aways on the Go!</p>
                     </div>
                     <div class="footer-col-3">
                         <h3>Useful Links</h3>
                         <ul>
                             <li><a href="#"> Coupons</a></li>
                              <li><a href="#"> Blog Posts</a></li>
                               <li><a href="#"> Return Policy</a></li>
                                <li><a href="#"> Join Affiliates</a></li>
                            
                         </ul>
                     </div>
                     <div class="footer-col-4">
                         <h3>Follow Us</h3>
                         </ul> <ul>
                              <li><i class="fa fa-facebook-square" aria-hidden="true"></i><a href="https://www.facebook.com/">Facebook</a></li>
                               <li><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="https://www.twitter.com/">Twitter</a></li>
                                <li><i class="fa fa-instagram" aria-hidden="true"></i><a href="https://www.instagram.com/">Instagram</a></li>
                                 <li><i class="fa fa-youtube-square" aria-hidden="true"></i><a href="https://www.youtube.com/"> Youtube</a></li>
                        
                         </ul>
                     </div>
                 </div>
                 <hr>
                 <p class="copyright">© Copyright 2021 - AI Game Store | All Rights Reserved!</p>
             </div>
         </div>


         <script>
             var MenuItems = document.getElementById("MenuItems");
             MenuItems.style.maxHeight = "0px";

             function menutoggle() {
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else
                {
                    MenuItems.style.maxHeight = "0px";
                }

             }
         </script>

          <!---------------FORM-SCRIPT--------------->
        <script>
            function validateForm() {
            var x = document.forms["contactForm"]["fname"]["lname"]["country"]["subject"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
            }
        </script>


</body>
</html










