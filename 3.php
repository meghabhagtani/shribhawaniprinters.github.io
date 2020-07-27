<!doctype html>
<html>
<head>
<title>HTML</title>
<style> 
*{padding:0px;
  margin:0px;}
#outerdiv{width:1130px;
		  overflow:hidden;
		  position:absolute;
		  margin-top:100px;
		  clear:both;}
#innerdiv img{float:left;
			position:relative;
		    animation:myslid 10s infinite;
			}
#innerdiv {width:2260px;
clear:both;
		   }
/* 4*100/10 */
@keyframes myslid{0%{left:0px;}
				  40%{left:0px;}
				  50%{left:-1130px;}
				  90%{left:-1130px;}
				  }
</style>
</head>
<body>

<div id="outerdiv">
<div id="innerdiv">
<img src="img1/sm3.png">
<img src="img1/sm5.png">
</div>
</div>
</body>
</html>