<html>
<head>
<title></title>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
*{padding:0px;
margin:0px;
}
body{
	background-color:#F2F4F4;
}


#mm{
	margin-left:100px;
	margin-top:50px;
}
#mm img{
	float:left;
	margin-left:10px;
}

 

ul{
	
	list-style:none;
	float:right;
	margin-right:60px;

	
	
}
ul li{
	float:left;
	
	
}
ul li a{
	margin:20px;
	text-decoration:none;
	color:#060505e3;
	font-weight:bold;
	font-family:Trebuchet MS;
	font-size:20px;
}
ul li a:hover{
	background-color:gray;
	border:2px black;
	border-radius:6px;
	padding:10px;
}

#au{
	position:relative;
}

ul li ul{
	position:absolute;
	top:27px;
	width:200px;
	
	display:none;
}

ul li ul li{
	height:30px;
	
}
ul li ul li a{
	padding-top:0px;
	padding-right:auto;
	width:150px;
	
	}
ul li:hover > ul{
	display:block;
}


</style>
</head>
<body>


<div id="mm">
<img src="img1/Bhawani logo.jpg" width="400" height="150" id="img">
<ul>
<li><a href="home.php">HOME</a></li>
<li id="au"><a href="#">ABOUT US</a>
<ul>
<li><a href="auprofile.php">PROFILE</a></li><br>

</ul>
</li>
<li><a href="products.php">PRODUCTS</a></li>
<li><a href="whywe.php">WHY WE?</a></li>
<li><a href="contact.php">CONTACT</a></li>
</ul>
</div>




</body>
</html>