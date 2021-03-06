<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<style type="text/css">
		.content{
			float: right;
		}	
		.content .blocks{
			height: 100px;
			width: 300px;
				color: #FFF;
			font-size: 25px;
			text-align: center;
			padding-top: 5px;
		}
		.content span{
			display: block;
			font-size: 14px;
			background-color: #AAB7B8;
			color: #34495E;
			height: 33px;
			width: 300px;
			padding: 6px;
			text-align: center;
		}
		span a{
			color: #34495E;
			text-decoration: none;
		}
		span a:hover{
			text-decoration: none;
			color:#000;
		}
		.block{
			float: left;
			display: block;
			margin:10px;
		}
	</style>
</head>
<body>
	<div class="container-fluid content">
		
		<br><br><br>
		<h1>Dashboard</h1><hr>
		<div class="block">
			<div class="blocks" style="background-color: #3498DB"><br>
				CASES
			</div>
			<span><a href="allcases.php" target="_self">Full details &#8669;</a></span>
		</div>	

		<div class="block">
			<div class="blocks" style="background-color: #7AA322"><br>
				HEADS
			</div>
			<span><a href="heads.html" target="_self">See all &#8669;</a></span>
			</div>

			<div class="block">
			<div class="blocks" style="background-color: #82E0AA"><br>
				ADVOCATES
			</div>
			<span><a href="advocates.php" target="_self">See all &#8669;</a></span>
			</div>
		</div>

</body>
</html>