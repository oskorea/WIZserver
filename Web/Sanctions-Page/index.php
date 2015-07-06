<!DOCTYPE html>
<html>
	<head>
		<!-- Default set -->
		<title>WIZserver</title>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
		
		<!-- Load CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		
		<!-- Load JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
		<!-- JavaScript -->
		<script>
			$("modal").on("shown.bs.modal",function(){$("modal").focus()})
		</script>
		
		<!-- Style -->
		<style>
			body {
				background-color: #EBEBEB;
				font-family: "OpenSans", "나눔바른고딕 Light", "NanumBarunGothic Light", NanumBarunGothicLight, NanumBarunGothicOTFLight, 나눔바른고딕, NanumBarunGothic, NanumBarunGothicOTF, 나눔고딕, NanumGothic, 맑은 고딕
			}
			a,a:hover,a:link,a:visited {
				color: #FFF;
				text-decoration: none
			}
			div.header {
				background-color: rgba(63,81,181,.8);
				color: #FFFFFF;
				font-size: 16px;
				letter-spacing: -0.2px;
				padding-top: 12px;
				top: 0px;
				position: fixed;
				width: 100%;
				z-index: 1
			}
			div.body {
				padding-top: 48px;
				z-index: 2
			}
			div.float-button {
				position: fixed;
				right: 23px;
				bottom: 23px;
				padding-top: 15px;
				margin-bottom: 0;
				z-index: 1000
			}
			div.float-button-2 {
				position: fixed;
				right: 86px;
				bottom: 23px;
				padding-top: 15px;
				margin-bottom: 0;
				z-index: 1000
			}
		</style>
	</head>
<?php
	// MySQL Login
		include "Compact-Login.php";
		
	// Progress
		if($SQL_Result_db == "Y") {
			$playername = "$_GET[playername]";
			
			$result = mysql_query("SELECT * FROM `wiz-wizserver`.`player_punishment` WHERE  `playername`='$playername'", $SQL_Login);
			$row = mysql_fetch_array($result);
			} else {
			echo "오류가 발생했습니다, 관리자에게 문의해주십시오.";
		}
?>
	<body>
		<div class="header">
			<div class="container">
				<p><a href="http://cafe.naver.com/wizss">WIZserver</a></p>
			</div>
		</div>
		<div class="body">
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
					</div>
					<div class="panel-body">
						<?php
							if($playername != null) {
								if($row[1] != "") {
									echo 
"						<h3>$playername <small>/ $playername 님에 대한 정보</small></h3><hr>
						<p>
							<strong>상태:</strong>	$row[1]<br />
							<strong>사유:</strong> $row[2]
						</p>";
									} else {
									echo 
"						<h3>$playername <small>/ $playername 님에 대한 정보</small></h3><hr>
						<p>
							$playername 님은 처벌받지 않으셨습니다.
						</p>";
								}
							}
						?>
						<br />
						<form action="check.php" method="post">
							<input type="text" name="playername" class="form-control" placeholder="닉네임" />
							<br /><br />
							<button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> 확인</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>