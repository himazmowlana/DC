<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width =device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="incdec.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> DC vs MARVEL - Contact </title>
 <style>
     
 body {
    background-image: url("images/CONTACT.jpg");
    background-size: 100% 1800px;
    
}
        
.leftcolumn {   
  float: center;
  width: 100%;
  background-color: hsla(0, 9%, 96%, 0.74);
  overflow: hidden;
  border-style: solid;
  padding:0px 0 20px 40px;
  
}

.rightcolumn {
  float: right;
  width: 30%;
  padding:210px 40px 0px 40px;
}

h2{
    text-align:center;
    font-family: Times, Times New Roman, serif;
    font-size: 40px;
    text-decoration:underline;
    font-weight:700;
}
.style{
    font-family: inherit ;
    font-weight:600;
    font-size: 15px;
    text-align:center;
}
.contact{
    padding: 20px;
   margin-top: 20px;
   overflow: hidden;
   background-color: hsla(0, 9%, 96%, 0.74);
   text-align:center;
}
.card {
   padding: 20px;
   margin-top: 20px;
   overflow: hidden;
   background-color: hsla(0, 9%, 96%, 0.74);
   text-align:center; 
}

.card img{
    width:300px;
}

.card a{
    font-size:20px;
    font-family: cursive ;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}


}

  @media screen and (max-width: 700px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>

</head>
<body>
    

   <div class="header">
   <a class="logo" href="index.php"> <img src="images/logo.jpg">  </a>
  
            <nav class="header-left">
                <a  href="index.php">Home</a>
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
               <a href="login.php" target="_blank"> Login</a>
               <a class="active" href="contact.php">Contact</a>
               <a href="feedback.php" target="_blank">Feedback</a>   
                   
             </nav>
             <div class="search-right">
                <form class="search" method="POST" action="search.php" style=" margin:auto">
                    <input type="text" placeholder="Whats on your mind??" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                
                </form>
                 
             </div>
             
        <div class="cart-right">
            <a href="cart.php" >
          <span class="fa fa-shopping-cart"></span> Your Cart </a>
       </div>
    </div>

    
    
    
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>VISIT US AT</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.63162575685!2d79.78616408628022!3d6.921833528206189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1622747960611!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                 <p class="style"> Address : No. 7 Ridgewayplace, Colombo 04 <br> </p>
                 <em>Open Daily From 9am -10pm except on Poya Days and Special Holidays! </em>
            </div>
            
       
        </div>
        </div>
        </div>
                <div class="card">
                    <img src="images/socialmedia.png">
                     <h2>Follow Us On</h2>
                     <a href="https://www.facebook.com/dcvsmarvalofficial/" target="_blank"><i class="fa fa-facebook-official" style="color:blue; font-size:40px"></i> FaceBook</a> <br>
                     <a href="https://www.instagram.com/dcvsmarval_official/?hl=en" target="_blank"> <i class="fa fa-instagram" style="color:magenta; font-size:40px"></i> Instagram </a> <br>
                     <a href="https://twitter.com/dcvsmarval" target="_blank"><i class="fa fa-twitter-square" style="color:#00acee; font-size:40px" ></i> Twitter </a>
                </div>
        
        <div class="rightcolumn">
                <div class="contact">
                    <h2>Contact Us</h2>
                    
                    For more details call us: <br>
                    <i class="fa fa-phone-square" style=" font-size:15px"> </i> 011-123-1234 <br> </b>
                    <i class="fa fa-mobile" style="font-size:20px"></i> 0774500404 <br> <br>
                    Or Email us on : <i class="fa fa-envelope" style=" font-size:15px"> </i> dcvsmarvel@gmail.com
                    
                
        </div>
</div>

 <div class="footer">
        <div class="footer-left">
                
            <i class="fa fa-map-marker" style=" font-size:15px"> </i> No. 7 Ridgewayplace, Colombo 04 <br> 
            <i class="fa fa-phone-square" style=" font-size:15px"> </i> 011-123-1234 <br> 
            <i class="fa fa-mobile" style="font-size:20px"></i> 0774500404 <br>
            <i class="fa fa-envelope" style=" font-size:15px"> </i> dcvsmarvel@gmail.com
        </div>
        
        <div class="footer-center">
                <i class="fa fa-facebook-official" style="color:blue; font-size:40px; margin: 5px"></i> 
                <i class="fa fa-instagram" style="color:magenta; font-size:40px; margin: 5px"></i> 
                <i class="fa fa-twitter-square" style="color:#00acee; font-size:40px; margin: 5px" ></i> 
                <br>
             </a>  <br>
             &copy;2021-2025 copyright by DC vs MARVEL<br>
                all rights reserved.<br>
                Designed by Nafees Idrees!  
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
</html>
