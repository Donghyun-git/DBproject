<?php
//로그인 세션 시작 후 로그인 되어 있으면 true 값 저장
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska");

  session_start();
  if(isset ( $_SESSION['userID'])) {
    $jb_login = TRUE;

    //별명으로 활동하게 하기 위한 코드
    $sql = "select name2 from userTBL where userID= '".$_SESSION['userID']."'";
    $ret = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($ret);
    $name2 = $row['name2'];
    $_SESSION['name2'] = $name2;
  }
?>
