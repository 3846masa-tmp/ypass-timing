<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Password Timing</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
html,body {
	height: 100%;
}
#wrap {
	min-height: 100%;
	height: auto !important;
	height: 100%;
	margin: 0 auto -60px;
}
#push,#footer {
	height: 60px;
}
#footer {
	background-color: #f5f5f5;
}
@media ( max-width : 767px) {
	#footer {
		margin-left: -20px;
		margin-right: -20px;
		padding-left: 20px;
		padding-right: 20px;
	}
}
.container {
	width: auto;
	max-width: 680px;
}
.container .credit {
	margin: 20px 0;
}
</style>
<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
</head>
<body bgcolor="#ffffff">
	<div id="wrap">
		<div class="container">
			<div class="page-header">
				<h1>デモ　認証結果</h1>
			</div>
			<?php
				$pw = htmlentities(htmlspecialchars($_POST['passwd']));
				if(empty($pw)||$pw==''){
					print_r("<h1>NG</h1><img src=\"image/ng.png\">");
				}
				else if($pw=="0000020"){
					print_r("<h1>OK</h1><img src=\"image/ok.png\">");
				}
				else{
					print_r("<h1>NG</h1><img src=\"image/ng.png\">");
				}
			?>
			<br>
			<br><br>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<p class="muted credit">
				<a href="./index.html">Password Timing</a>
			</p>
		</div>
	</div>
</body>
</html>


