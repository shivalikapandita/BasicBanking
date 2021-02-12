<!DOCTYPE html>
<html>
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
table{
	border-collapse: collapse;
	width: 100%;
	height: 100%;
	color: #ffffff;
	font-family:sans-serif;
	font-size: 22px;
	text-align: center;
	background-color: rgba(0,0,0,.5);
	border-radius: 10px;
}
th{
	padding: 10px;
color: #03e9f4;
}
td{
	padding: 10px;

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

.login-box form a {
  position: relative;
  display: inline-block;
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

.login-box a:hover {
  background: #03e9f4;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 0 5px #03e9f4,
              0 0 25px #03e9f4,
              0 0 50px #03e9f4,
              0 0 100px #03e9f4;
}

.login-box a span {
  position: absolute;
  display: block;
}

.login-box a span:nth-child(1) {
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

.login-box a span:nth-child(2) {
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

.login-box a span:nth-child(3) {
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

.login-box a span:nth-child(4) {
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
<head>
	<title></title>
	<meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(0,0,0,.5)">
  <div class="container-fluid">

    <a class="navbar-brand" href="#">Shivalika Banking</a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/banktransfer/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/banktransfer/transferhistory.php">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">View Users</a>
        </li>
        
          
        </li>
       
      </ul>
      
    </div>
  </div>
</nav>
<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Email</th>
		<th>Balance</th>
	</tr>
	 <?php
	 $conn = mysqli_connect("localhost", "root", "","customer") ;
	 if ($conn-> connect_error) {
	 	die("Connection failed:". $conn->connect_error);
	 }

	 $sql = "SELECT ID,Name,Email,Balance from customers";
	 $result = $conn-> query($sql);
	 if($result && $result->num_rows) {
	 	while($row = $result-> fetch_assoc()) {
	 	echo "<tr><td>". $row["ID"]."</td><td>". $row["Name"]. "</td><td>". $row["Email"]."</td><td>".$row["Balance"]."</td></tr>";	 		# code...
	 	}
	 	echo "</table>";
	 }
	 else{
	 	echo "0 result";
	 }$conn-> close();
	 	?>
</table>
<div class="footer">
  <p>By Shivalika Pandita</p>
</div>

</body>
</html>