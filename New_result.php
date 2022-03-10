<?php

//mysql접속//
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska") or die ("mysql 접속 실패");

//회원가입 textbox 데이터 전송//
  $userID = $_POST["userID"];
  $userPW = password_hash($_POST["userPW"], PASSWORD_DEFAULT);
  $userPW1 = $_POST["userPW"];
  $userPW2 = $_POST["userPW2"];
  $name = $_POST["name"];
  $name2 = $_POST["name2"];
  $E_mail = $_POST["E_mail"];
  echo $userPW;

//아이디 중복확인//



//비밀번호 일치 확인 여부//
if($userPW1==$userPW2) {
  $sql = "INSERT INTO userTBL VALUES ('".$userID."', '".$userPW."', '".$name."', '".$name2."', '".$E_mail."')";

  $ret = mysqli_query($con, $sql);
    if ($ret)
    {
      ?>
        <script>
          alert("회원가입에 성공하였습니다.")
          location.href = "login.php";
          </script>
          <?php
    }
    else
    {
      echo "에러! <br>";
      echo "원인: ".mysqli_error($con);
    }
} else {
  ?>
  <script>
    alert("비밀번호가 일치하지 않습니다.")
    history.back();
  </script>
  <?php
}



//테이블에 데이터 저장//

//mysql 종료//
  mysqli_close($con);

 ?>
