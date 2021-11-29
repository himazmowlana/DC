<?php
session_start();
require_once("dbcontroller.php");
$db_handle = new DBController();
?>
<!DOCTYPE php>
<php>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="incdec.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> DC vs MARVEL </title>
<style>
     body {
         background-image: url("images/MAIN PAGE.jpg");
	     background-size: 100% 1400px;
         
        } 
        h4 {
            text-align:center;
            font-size:30px;
            font-weight:bold; 
            background-color: BLACK;
            opacity:0.9;
            background-size:cover;
            color:white;
        }
        
        .fade img {
            width: 100%;
            height: 325px;
       }
       
      
       .FP {
            text-align:center;
            font-size:30px;
            font-weight:bold; 
             background-color: hsla(0, 9%, 96%, 0.74);
            overflow: hidden;
            border-style: solid;
            opacity:0.9;
            background-size:cover;
            margin:5px;
            margin-bottom:8px;
       }
             
</style>


</head>
<body>
 
    <div class="header">
        <a class="logo" href="index.php"> <img src="images/logo.jpg">  </a>
  
            <nav class="header-left">
                <a class="active" href="index.php">Home</a>
                
                    <div class="dropdown">
                         <button class="dropbtn"> comics
                                <i class="fa fa-caret-down"></i>
                         </button>
                
                    <div class="dropdown-options">
                      <a href="MARVEL.php" target="_blank"> MARVEL </a>
                      <a href="DC.php" target="_blank"> DC</a>
                      <a href="comicsoffer.php" target="_blank"> Offers</a>
                    </div> 
                    </div>
               <a href="reg.php" target="_blank"> Sign Up </a>
               <a href="login.php" > Login</a>
               <a href="contact.php" target="_blank">Contact</a>
               <a href="feedback.php" target="_blank">Feedback</a>  
                   
             </nav>
             <div class="search-right">
                <form class="search" method="POST" action="search.php" style=" margin:auto">
                    <input type="text" placeholder="Whats on your mind?? " name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                
                </form>
                 
             </div>
             
        <div class="cart-right">
            <a href="cart.php" >
             <span class="fa fa-shopping-cart"></span> Your Cart
            </a>
        </div>
    </div>

  
  
<div class="slideshow">
    <h4>Special Offers and Discounts!</h4>
        <div class="fade">
            <img src="images/DISCOUNTS.jpg">
        </div> 
        
        <div class="fade">
            <img src="images/SLIDESHOW 1.png" >
        </div>
    
        <div class="fade">
            <img src="images/SLIDESHOW 2.png">
        </div>
    
        <div class="fade">
            <img src="images/SLIDESHOW 3.png" >
        </div>
    
        <div class="fade">
            <img src="images/FREE DELIVERY.jpg" >
        </div>
    
         


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a> 

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

</div>
<br>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("fade");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<h3 class="FP">FEATURED COMICS</h3>
    
 
<div id="product-grid">
	
            <?php
            $product_array = $db_handle->runQuery("SELECT * FROM featurecomics ORDER BY id ASC");
            if (!empty($product_array)) { 
                    foreach($product_array as $key=>$value){
            ?>
		<div class="product-item">
			<form method="post" action="cart.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>" >
                        <form method="post" action="account.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
			<div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
			<div class="product-tile-footer">
			<div class="product-title"><?php echo $product_array[$key]["name"]; ?></div> 
                        <div class="product-desc"><?php echo $product_array[$key]["description"]; ?></div> 
			<div class="product-price"><?php echo "LKR ".$product_array[$key]["price"]; ?></div>
			<div class="cart-action">
                             <div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value"></div>
                             <input type="number" class="product-quantity" name="quantity" value="1" size="2" />
                             <div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value"></div>
<script>      
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value++;
  document.getElementById('number').value = value;
}
function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 0 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>
                        </div>
                          <input type="submit" value="Add to Cart" class="btnAddAction" />
			</div>
			</form>

		</div>
	<?php
		}
	}
	?>
</div>

  
    <div class="footer">
        <div class="footer-left">
                
            <i class="fa fa-map-marker" style=" font-size:15px"> </i> No. 7 Ridgewayplace, Colombo 04 <br> 
            <i class="fa fa-phone-square" style=" font-size:15px"> </i> 011-123-1234 <br> 
            <i class="fa fa-mobile" style="font-size:20px"></i> 0771234567 <br>
            <i class="fa fa-envelope" style=" font-size:15px"> </i> dcvsmarvel@gmail.com
        </div>
        
        <div class="footer-center">
                <i class="fa fa-facebook-official" style="color:blue; font-size:40px; margin: 5px"></i> 
                <i class="fa fa-instagram" style="color:magenta; font-size:40px; margin: 5px"></i> 
                <i class="fa fa-twitter-square" style="color:#00acee; font-size:40px; margin: 5px" ></i> 
            </a>  <br>
             &copy;2021-2025 copyright by DC vs MARVAL<br>
             all rights reserved.<br>
                Designed by Hussain Moulana!  
        </div>
        
        <div class="footer-right">
            
            <H6> PAYMENT METHODS </H6>
            <i class="fa fa-cc-visa" style=" font-size:50px; color:navy;"></i>
            <i class="fa fa-cc-mastercard"  style=" font-size:50px; color:red"></i>
            <i class="fa fa-cc-paypal"  style=" font-size:50px; color:darkslateblue"></i> <br> <br>
            <i class="fa fa-motorcycle" style=" font-size:20px"> Free Delivery Island-wide!</i> <br>
           
        </div>
        
    </div>

</body>
</php>
