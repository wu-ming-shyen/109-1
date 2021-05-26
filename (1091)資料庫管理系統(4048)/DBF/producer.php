<!DOCTYPE HTML>
<!--
	Horizons by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>軒禾合作社</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<style>
		table,
		td {
			border: 1px solid #333;
			text-align:center;
		}

		thead,
		tfoot {
			background-color: #333;
			color: #fff;
		}

		</style>
	</head>
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header">
				<div class="container">
						
					<!-- Logo -->
						<h1><a href="signindex.html" id="logo">軒禾合作社</a></h1>
					
					<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="signindex.html">首頁</a></li>
							<li><a href="producer.php">農民介紹</a></li>
							<li><a href="product.php">產品介紹</a></li>
							<li><a href="buy.php">收購紀錄</a></li>
							<li><a href="sell.php">販售紀錄</a></li>
						</ul>
					</nav>

				</div>
			</div>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<section>
						<header class="major">
							<h2>農民資訊</h2>
							<span class="byline">Farmer's Information</span>
							<br><p><span class="byline">享農 敬農 樂農 愛農</span></p>
						</header>
						<table >
							<thead>
								<tr>
									<th colspan="10">農民</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>編號</td>
									<td>名稱</td>
									<td>性別</td>
									<td>電話</td>
									<td>信箱</td>
									<td>地址</td>
								</tr>
								
								<?php
									header("Content-Type: text/html; charset=utf8");
									include('connect.php');
									
									$sql = "SELECT * FROM `producer`";
									$result = mysqli_query($connect,$sql);

									for($i=1; $i <= mysqli_num_rows($result);$i++){
										$text = mysqli_fetch_row($result);
										$P_ID=$text[0];
										$P_Name=$text[1];
										$P_Gender=$text[2];
										$P_Phone=$text[3];
										$P_Email=$text[4];
										$P_Address=$text[5];
										echo "
										<tr>
											<td>$P_ID</td>
											<td>$P_Name</td>
											<td>$P_Gender</td>
											<td>$P_Phone</td>
											<td>$P_Email</td>
											<td>$P_Address</td>
											<td><a href='producer/delete.php?P_ID=$P_ID'>刪除</a></td>
										</tr>
										";
									}
								?>
							</tbody>
						</table>
						<form action="producer/add.php" method="POST">
							新增編號:<input type="text" name="P_ID">
							新增名稱:<input type="text" name="P_Name">
							新增性別:<select name="P_Gender"><option value="男">男</option><option value="女">女</option></select><br>
							新增電話:<input type="text" name="P_Phone">
							新增信箱:<input type="text" name="P_Email">
							新增地址:<input type="text" name="P_Address">
							<input type="submit" value="新增">
						</form>
						<form action="producer/update.php" method="POST">
							修改編號:<input type="text" name="O_P_ID">
							新編號:<input type="text" name="P_ID">
							新名稱:<input type="text" name="P_Name">
							新性別:<select name="P_Gender"><option value="男">男</option><option value="女">女</option></select><br>
							新電話:<input type="text" name="P_Phone">
							新信箱:<input type="text" name="P_Email">
							新地址:<input type="text" name="P_Address">
							<input type="submit" value="修改">
						</form>
					</section>
				</div>
			</div>

			<div class="wrapper style2">
				<section class="container">
				<div class="row no-collapse-1">
					<section class="4u">
						<a href="#" class="image feature"><img src="images/pic1.jpg" width="150" height="190"></a>
						<p>新鮮好果汁</p>
					</section>
					<section class="4u">
						<a href="#" class="image feature"><img src="images/pic2.jpg" width="200" height="180"></a>
						<p>快樂好農園</p>
					</section>
					<section class="4u">
						<a href="#" class="image feature"><img src="images/pic3.jpg" width="200" height="180"></a>
						<p>享受好農產</p>
					</section>

				</div>
				</section>
			</div>

		<!-- Footer -->
			<div id="footer">
				<div class="container">

				
				</div>
			</div>

	</body>
</html>