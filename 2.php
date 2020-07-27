<!doctype html>
<html>
<head>
<title>HTML</title>
<style> 
*{padding:0px;
  margin:0px;}
#outerdiv{width:1220px;
		  overflow:hidden;
		  position:absolute;
		  margin-top:80px;}
#innerdiv img{float:left;
			position:relative;
		    animation:myslid 10s infinite;}
#innerdiv {width:2440px;
		   }
/* 4*100/10 */
@keyframes myslid{0%{left:0px;}
				  40%{left:0px;}
				  50%{left:-1220px;}
				  90%{left:-1220px;}
				  }
</style>
</head>
<body>

<div id="outerdiv">
<div id="innerdiv">
<img src="img1/w1.png">
<img src="img1/w2.png">
</div>
</body>
</html>