<!DOCTYPE php>

<html>
    <head>
        <title>DC vs MARVEL</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
	margin: 0 auto;
	background-image: url("images/PAGE 1.jpg");
	background-repeat: no-repeat;
	background-size: 100% 1000px;
      }
      
h1{
    color: rgb(199, 92, 21);  
    font-family: cursive, Times New Roman;
    font-size: 25px;
  }
      
.forgotpass{
       padding-left: 80px;
       padding-right:80px;
       width: 300px;
       height: 450px;
       text-align:center;
       margin: 0 auto;
       background-color: rgb(182, 186, 187) ;
       margin-top: 40px;
}

.forgotpass img{
	width: 100px;
	height: 100px;
	margin-top: 20px;
        
}

.sendbtn {
  background-color: white;
  color: black;
  padding: 5px 5px;
  margin: 10px 0;
  border-radius: 10px;
  cursor: pointer;
  width: 40%;
  font-size:15px;
}

.sendbtn:hover{
    background-color:lightsalmon;
    
}

  input[type=email] {
  width: 100%;
  padding: 10px;
  opacity :0.7;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
}

input[type=text]:focus {
  background-color: lightgray;
  outline: none;
}

</style>
</head>

    <body>
        
         <div class="forgotpass">
           <img src="images/LOGIN.png"> <br>
           <h1> RESET USERNAME/PASSWORD </h1>
           WE WILL SEND YOU INSTRUCTIONS TO RESET YOUR USERNAME/PASSWORD <br> <br>
            <form action="fpemail.php" method="POST">
                
                <div class="forgotpassdetails">
                    <b>Enter Your Registered Email </b> <input type="email" name="email" placeholder="Email" required> 
                    <button type="submit" class="sendbtn" value ="send"> SEND </button>
                </div>
            </form>
       </div>
    </body>
</html>
