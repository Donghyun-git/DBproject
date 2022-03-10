<?php
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska") or die ("mysql 접속 실패");
  $uid = $_GET["userid"];

	$sql = "select * from userTBL where userID='".$uid."'";
  $ret = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($ret);
  $check = $row['userID'];

  if($uid == $check)
	{
?>
  <center>
  <br><br>
  <div style='font-size: 1.3em; color:red;'>중복된 아이디입니다. 다시 입력 부탁드립니다.<div>
  </center>
  <?php
  } else {
  ?>
  <center>
  <br><br>
  <div style='font-size: 1.3em;'><?php echo $uid; ?>은(는) 사용 가능한 아이디입니다.</div>
  </center>
  <?php
  }
  ?>
  <center>
  <br><br>
  <button name="close" value="닫기" onclick="self.close()">닫기</button>
  </center>
