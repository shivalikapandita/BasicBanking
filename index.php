<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
		
html {
  min-height: 100%;
}
body {
  margin:0;
  padding:0;
  font-family: sans-serif;
  background: linear-gradient(#141e30, #243b55);
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
}

.login-box .select-user select{
	width: 100%;
font-family: sans-serif;
font-size: 16px;
padding-top:10px;
padding-bottom:10px;
border-radius: 20px;
background-color: rgba(0,0,0,.5);
color: #fff;

}
.login-box .select-user{
	padding-bottom: 30px;

}

.login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(0,0,0,.5);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box h2 {
  margin: 0 0 30px;
  padding: 0;
  color: #fff;
  text-align: center;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}
.login-box .user-box label {
  position: absolute;
  top:0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #03e9f4;
  font-size: 12px;
}



.login-box form button {
  position: relative;
  display: inline-block;
  background-color: rgba(0,0,0,.5);
  padding: 10px 20px;
  color: #03e9f4;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transition: .5s;
  margin-top: 40px;
  letter-spacing: 4px
}

.login-box button:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box button span {
  position: absolute;
  display: block;
}

.login-box button span:nth-child(1) {
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg, transparent, #03e9f4);
  animation: btn-anim1 1s linear infinite;
}

@keyframes btn-anim1 {
  0% {
    left: -100%;
  }
  50%,100% {
    left: 100%;
  }
}

.login-box button span:nth-child(2) {
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #03e9f4);
  animation: btn-anim2 1s linear infinite;
  animation-delay: .25s
}

@keyframes btn-anim2 {
  0% {
    top: -100%;
  }
  50%,100% {
    top: 100%;
  }
}

.login-box button span:nth-child(3) {
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg, transparent, #03e9f4);
  animation: btn-anim3 1s linear infinite;
  animation-delay: .5s
}

@keyframes btn-anim3 {
  0% {
    right: -100%;
  }
  50%,100% {
    right: 100%;
  }
}

.login-box button span:nth-child(4) {
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg, transparent, #03e9f4);
  animation: btn-anim4 1s linear infinite;
  animation-delay: .75s
}

@keyframes btn-anim4 {
  0% {
    bottom: -100%;
  }
  50%,100% {
    bottom: 100%;
  }
}
@viewport{
	zoom:1.0;
	width: extend-to-zoom;
}
@-ms-viewport{
	width: extend-to-zoom;
	zoom:1.0;
}

	</style>
	<title>money transfer</title>
	<meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>
<body>
	
  <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgba(0,0,0,.5)">
    
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shivalika Banking</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/banktransfer/transferhistory.php">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/banktransfer/user.php">View Users</a>
        </li>
        
          
        
        
      </ul>
 
      
    </div>

  </div>
 
</nav>

<div class="login-box">
  <h2>Shivalika Banking</h2>
  <form  method="POST">
   <div class="select-user">

      <select id="From" name="user-from">
      	<option value="From">select From</option>
      	<option value="Shivalika Pandita">Shivalika Pandita</option>
      	<option value="Paras Pandita">Paras Pandita</option>
      	<option value="Shubam Pandita">Shubam Pandita</option>
      	<option value="Arvita Pandita">Arvita Pandita</option>
      	<option value="Monica Pandita">Monica Pandita</option>
        <option value="Mohit Pandita">Mohit Pandita</option>
      	<option value="Ritik Pandita">Ritik Pandita</option>
      	<option value="Praful Pandita">Praful Pandita</option>
      	<option value="Rupesh Pandita">Rupesh Pandita</option>
      	<option value="Sheen Pandita">Sheen Pandita</option>
      </select>

    </div>
     <div class="select-user">

      <select id="To" name="user-to">
      	<option value="To">select To</option>
      	<option value="Shivalika Pandita">Shivalika Pandita</option>
      	<option value="Paras Pandita">Paras Pandita</option>
      	<option value="Shubam Pandita">Shubam Pandita</option>
      	<option value="Arvita Pandita">Arvita Pandita</option>
      	<option value="Monica Pandita">Monica Pandita</option>
        <option value="Mohit Pandita">Mohit Pandita</option>
      	<option value="Ritik Pandita">Ritik Pandita</option>
      	<option value="Praful Pandita">Praful Pandita</option>
      	<option value="Rupesh Pandita">Rupesh Pandita</option>
      	<option value="Sheen Pandita">Sheen Pandita</option>
      </select>

    </div>
    <div class="user-box">
      <input type="number" name="user-amount" required="">
      <label>Amount</label>
    </div>
    
   
    <button href="#" type="submit" name="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Send
    </button>
  </form>
  


</div>

<div class="footer">
  <p>By Shivalika Pandita</p>
</div>
</body>

</html>
<?php 

$conn = mysqli_connect("localhost", "root", "","customer") ;
	 if ($conn-> connect_error) {
	 	die("Connection failed:". $conn->connect_error);
	 }
if(isset($_POST['submit']))

{ 


  $From =$_POST["user-from"];
  $To =$_POST["user-to"];
  $Amount =$_POST["user-amount"];



  $insertquery="INSERT INTO transferhistory(transfer_from, transfer_to, Amount) VALUES ('$From','$To','$Amount')";
  $updatequery="UPDATE customers SET Balance=Balance+'$Amount' where Name='$To'";
$updatequery1="UPDATE customers SET Balance=Balance-'$Amount' where Name='$From'";
mysqli_query($conn,$updatequery);
mysqli_query($conn,$updatequery1);

  mysqli_query($conn,$insertquery);
 


 }

?>





