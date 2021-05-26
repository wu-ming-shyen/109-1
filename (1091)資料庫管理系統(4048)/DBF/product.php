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
							<h2>產品資訊</h2>
							<span class="byline">Farmer's Information</span>
							<br><p><span class="byline">享農 敬農 樂農 愛農</span></p>
						</header>
						<table >
							<thead>
								<tr>
									<th colspan="10">產品</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>編號</td>
									<td>名稱</td>
									<td>種類</td>
									<td>介紹</td>
								</tr>
								
								<?php
									header("Content-Type: text/html; charset=utf8");
									include('connect.php');
									
									$sql = "SELECT * FROM `product`";
									$result = mysqli_query($connect,$sql);

									for($i=1; $i <= mysqli_num_rows($result);$i++){
										$text = mysqli_fetch_row($result);
										$Pro_No=$text[0];
										$Pro_Name=$text[2];
										$Pro_Category=$text[3];
										$Pro_Introduce=$text[4];
										echo "
										<tr>
											<td>$Pro_No</td>
											<td>$Pro_Name</td>
											<td>$Pro_Category</td>
											<td>$Pro_Introduce</td>
											<td><a href='product/delete.php?Pro_No=$Pro_No'>刪除</a></td>
										</tr>
										";
									}
								?>
							</tbody>
						</table>
						<form action="product/add.php" method="POST">
							新增編號:<input type="text" name="Pro_No">
							新增名稱:<input type="text" name="Pro_Name">
							新增種類:<input type="text" name="Pro_Category">
							新增介紹:<input type="text" name="Pro_Introduce">
							<input type="submit" value="新增">
						</form>
						<form action="product/update.php" method="POST">
							修改編號:<input type="text" name="O_Pro_No">
							新編號:<input type="text" name="Pro_No">
							新名稱:<input type="text" name="Pro_Name">
							新種類:<input type="text" name="Pro_Category">
							新介紹:<input type="text" name="Pro_Introduce">
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