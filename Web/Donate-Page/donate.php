<?php
	// Defauilt
		$playername = $_POST[playername];
		$PIN1 = $_POST[PIN1];
		$PIN2 = $_POST[PIN2];
		$PIN3 = $_POST[PIN3];
		$PIN4 = $_POST[PIN4];
		$Details = $_POST[Details];
		$IP = $_SERVER['REMOTE_ADDR'];
		$Time = date("Y-m-d A h:i:s");
		$Content = "N";
	
	// Progress
		if($playername != "" || $PIN1 != "" || $PIN2 != "" || $PIN3 != "" || $PIN4 != "" || $Details != "") {
			// MySQL Login
				include "Compact-Login.php";
			
			// Query
				mysql_query("INSERT INTO `wiz-wizserver`.`donate_donate` (`playername`, `Date`, `PIN1`, `PIN2`, `PIN3`, `PIN4`, `IP`) VALUES ('$playername', '$Time', '$PIN1', '$PIN2', '$PIN3', '$PIN4', '$IP');", $SQL_Login);
			Header("Location: index.php?status=success");
			} else {
			echo "<script>alert('내용을 모두 입력해주십시오.');window.location='./'</script>";
		}
?>