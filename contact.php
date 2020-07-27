<?php include "nav.php" ?>
<?php
include "db.php";
$msg="";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$contact=$_POST['contact'];
	$message=$_POST['message'];
	
	
	
	
	$sql=mysqli_query($con,"INSERT INTO `register`(`name`, `email`, `contact`,`message`) VALUES ('$name','$email','$contact','$message')");
	if($sql){
		$msg="<span style='background-color:white'>We will contact you soon...</span>";	
	}
	else{
		$msg="<span style='background-color:red'>Data Not Inserted </span>";
	}
}

?>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>
<style>

#bankh{
	font-weight:bold;
	margin-top:190px;
	font-size:36px;
	margin-left:60px;
	clear:both;
	position:absolute;
	font-family:century gothic;
}
#map{
	position:absolute;
	margin-top:150px;
}
#conmap{
	position:relative;
	clear:both;
	margin-left:60px;
	top:200px;
}
.con1{
	float:left;
	width:60%;
	height:600px;
	position:relative;
	top:350px;
	margin-left:40px;
}

.con2{
	float:left;
	width:35%;
	height:600px;
	position:relative;
	top:350px;
}

#conhead{
	
	font-weight:bold;
	font-size:24px;
	float:left;
}
#conbd{
	font-size:20px;
	position:absolute;
	top:50px;
	font-weight:bold;
	font-family:Trebuchet MS;
}
#btn1{
	background-color:blue;
	border:2px black;
	border-radius:6px;
	padding:10px;
	color:white;
	width:130px;
	height:50px;
	margin-left:200px;
}
#btn1:hover{
	cursor:pointer;
	background-color:gray;
}

#input{
	width:400px;
	height:40px;
	border-radius:6px;
}
	
#inp1{
	border-radius:6px;
	
}
#anc{
	color:black;
	text-decoration:none;
}
	
#anc:hover{
	color:brown;
	text-decoration:block;
	
}
</style>
</head>

<body>

<div id="bankhead">
<p id="bankh">Get In Touch</p>
</div>
<div id="conmap">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1918999.3615485225!2d76.64401491611676!3d20.04853147131335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd6a359b07300a7%3A0xa1dc5bd30b80215!2sSri%20Bhavani%20Printers!5e0!3m2!1sen!2sin!4v1595766818012!5m2!1sen!2sin" width="1200" height="900" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div>
 
 <div class="conmain">
 
 <div class="con1">
<div>
<p id="conhead">Get in Touch With Us By Filling Contact Form Below</p>
</div>
<div id="conbd">
<form method="POST" action="">
<input type="text" name="name" placeholder="Your Full Name" id="input"><br><br>

<input type="email" name="email" placeholder="Your email" id="input"><br><br>
<input type="contact" name="contact" placeholder="your Contact" id="input"><br><br>
<!--<input type="text" name="message" placeholder="Message" id="inp1"><br><br>-->
<textarea  rows="7" cols="90" placeholder="Message" id="inp1" name="message"></textarea><br><br>

<input type="submit" value="submit" id="btn1" name="submit">
  <?php echo $msg; ?>

</form>
</div>
</div>

<div class="con2">
<div>
<p id="conhead">Contact Information</p>
</div>
<div id="conbd">
Address :Shri Bhawani Printers<br>
shop no.F18,Sindhi Chowk, <br>
RamLaxman Sankul,Amravati 444603<br><br></a>

Phone:+91 9422194258,90283567754<br><br>
Email :<br>
bhawaniprinter123@gmail.com<br>
</div>
</div>

</div>
<?php include "5c.php" ?>

 
 </body>
 </html>