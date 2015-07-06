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
		if($SQL_Result_db != "Y") {
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
				<?php
					if($_GET['status'] == "success") {
						echo 
"				<div class=\"alert alert-success\">
					<strong>성공</strong> 성공적으로 후원되었습니다, 감사합니다.
				</div>";
					}
				?>
				<div class="panel panel-default">
					<div class="panel-heading">
					</div>
					<div class="panel-body">
						<h3>후원 <small>/ 서버에 후원을 하실 수 있는 페이지 입니다.</small></h3><hr>
						<form action="donate.php" method="post" class="form-inline" role="form">
							<div class="row">
								<div class="col-md-2">
									<strong>닉네임: </strong>
								</div>
								<div class="col-md-10">
									<div class="form-group">
										<label class="sr-only" for="playername">닉네임</label>
										<input type="text" class="form-control" id="playername" name="playername" placeholder="닉네임">
									</div>
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-2">
									<strong>문화상품권 코드: </strong>
								</div>
								<div class="col-md-10">
									<div class="form-group">
										<label class="sr-only" for="PIN1">XXXX</label>
										<input type="text" class="form-control" id="PIN1" name="PIN1" placeholder="XXXX">
									</div>
									<div class="form-group">
										<label class="sr-only" for="PIN2">XXXX</label>
										<input type="text" class="form-control" id="PIN2" name="PIN2" placeholder="XXXX">
									</div>
									<div class="form-group">
										<label class="sr-only" for="PIN3">XXXX</label>
										<input type="text" class="form-control" id="PIN3" name="PIN3" placeholder="XXXX">
									</div>
									<div class="form-group">
										<label class="sr-only" for="PIN4">XXXX or XXXXXX</label>
										<input type="text" class="form-control" id="PIN4" name="PIN4" placeholder="XXXX or XXXXXX">
									</div>
								</div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-2">
									<strong>후원 목적: </strong>
								</div>
								<div class="col-md-10">
									<textarea class="form-control" rows="3" id="Details" name="Details" placeholder="후원 목적"></textarea>
								</div>
							</div>
							<br /><br />
							<button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> 확인</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>