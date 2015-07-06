<?php
	$playername = $_POST[playername];
	if($playername == "") {
		echo "<script>alert('아무런 닉네임도 입력하지 않으셨습니다.');window.location='./'</script>";
		} else {
		Header("Location: index.php?playername=$playername");
	}
?>