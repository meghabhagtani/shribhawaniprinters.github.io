<?php
include "db.php";
$msg="";
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$contact=$_POST['number'];
	
	
	
	
	$sql=mysqli_query($con,"INSERT INTO `register`(`name`, `email`, `contact`) VALUES ('$name','$email','$contact')");
	if($sql){
		$msg="<span style='background-color:black'>We will contact you soon...</span>";	
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
<style>
*{padding:0px;
margin:0px;
}

.foot{
	float:left;
	width:33.33%;
	background-color:#060505e3;
	color:white;
	height:400px;
	position:relative;
	top:1050px;
	

}

#head{
	
	font-weight:bold;
	font-size:24px;
	color:white;
	float:left;
    margin-left:50px;
	font-family:HelveticaNeueLT Std;

}
#bd{
	font-size:20px;
	position:absolute;
	color:white;
	top:50px;
	margin-left:50px;
	font-family:HelveticaNeueLT Std;
}
#footer{
	
}
.foot2{
	float:left;
	width:50%;
	background-color:black;
	color:white;
	height:100px;
	position:relative;
	top:1035px;
}

#bd1{
	position:absolute;
	left:80px;
	top:40px;
}
#btn{
	background-color:blue;
	border:2px black;
	border-radius:6px;
	padding:10px;
	color:white;
	width:150px;
}
#btn:hover{
	cursor:pointer;
}
</style>
</head>
<body>
<div class="footer">
<div id="para">
<div class="foot">
<div>
<p id="head">About Shri Bhawani Printers</p>
</div>
<div id="bd">
<p>Shri Bhawani Printers stands as an epitome for dedication, expertise and the drive to provide our customers the service for which they chose us over <br>the rest. <br>
We have been providing the best Wedding Cards,Invitation Cards,Visiting Cards,Flex and Banner Printing Services,Hoarding Printing Services since 2005.
<br> Providing the best products by understanding our customer’s needs, Shri Bhawani Printing press has <br>risen to being the most preferred printing press in the town.
 </p>
</div>
</div>
<div class="foot">
<div>
<p id="head">Contact Us</p>
</div>
<div id="bd">
Shri Bhawani Printers<br>
shop no. F18, Sindhi Chowk, <br>
RamLaxman Sankul,Amravati.<br><br><br>

Phone:+91 9422194258<br>
Phone:+91 9028356754<br><br><br>

email:bhawaniprinter123@gmail.com<br>
 
</div>
</div>
<div class="foot">
<div>
<p id="head">Get in Touch</p>
</div>
<div id="bd">
<form method="POST" action="">
<label>Your Name(required):</label><br>
<input type="text" name="name"><br><br>

<label>Contact Number(required):</label><br>
<input type="text" name="number"><br><br

<label>Email(required):</label><br>
<input type="email" name="email"><br><br>

<input type="submit" value="submit" id="btn" name="submit">
  <?php echo $msg; ?>

</form>
</div>
</div>
</div>
</div>

<div class="footer2">
<div class="foot2">
<p id="bd1">©All right reserved| Shri Bhawani Printers</p>
</div>
<div class="foot2">
<p id="bd1">Designed & Developed by Megha Bhagtani</p>
</div>

</body>
</html>