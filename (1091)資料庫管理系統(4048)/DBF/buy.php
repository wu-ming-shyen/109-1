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
							<h2>收購資訊</h2>
							<span class="byline">Farmer's Information</span>
							<br><p><span class="byline">享農 敬農 樂農 愛農</span></p>
						</header>
						<table >
							<thead>
								<tr>
									<th colspan="10">收購明細</th>
								</tr>
							</thead>
							<tbody>
								<tr>
                                    <td>編號</td>
                                    <td>名稱</td>
                                    <td>農民</td>
									<td>價格</td>
									<td>數量</td>
									<td>時間</td>
								</tr>
								
								<?php
									header("Content-Type: text/html; charset=utf8");
									include('connect.php');
									
									$sql = "SELECT * FROM `buy_records`";
									$result = mysqli_query($connect,$sql);

									for($i=1; $i <= mysqli_num_rows($result);$i++){
                                        $text = mysqli_fetch_row($result);
                                        $Pro_No = $text[0];
										$B_No = $text[1];
										$B_Price = $text[2];
                                        $B_Amount = $text[3];
                                        
                                        $fsql = "SELECT * FROM `buy` WHERE `B_No` = '$B_No'";
                                        $fresult = mysqli_query($connect,$fsql);
                                        $ftext = mysqli_fetch_row($fresult);
                                        $P_ID = $ftext[1];
                                        $B_DateTime = $ftext[2];
                                        
                                        $ffsql = "SELECT * FROM `producer` WHERE `P_ID` = '$P_ID'";
                                        $ffresult = mysqli_query($connect,$ffsql);
                                        $fftext = mysqli_fetch_row($ffresult);
										$P_Name = $fftext[1];

										$fffsql = "SELECT * FROM `product` WHERE `Pro_No` = '$Pro_No'";
                                        $fffresult = mysqli_query($connect,$fffsql);
                                        $ffftext = mysqli_fetch_row($fffresult);
										$Pro_Name = $ffftext[2];
										

										echo "
										<tr>
											<td>$B_No</td>
											<td>$Pro_Name</td>
											<td>$P_Name</td>
                                            <td>$B_Price</td>
											<td>$B_Amount</td>
											<td>$B_DateTime</td>
										</tr>
										";
									}
								?>
							</tbody>
						</table>
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