<?php

include "../inc_head.php";



//mysql접속//
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska");

//입력한 데이터 값 가져오기 데이터 전송//
  $jungName = $_POST["jungName"];
  $DJ = $_POST["DJ"];
  $soy = $_POST["soy"];
  $MG = $_POST["MG"];
  $sugar = $_POST["sugar"];
  $salt = $_POST["salt"];
  $MS = $_POST["MS"];
  $pepper = $_POST["pepper"];
  $GUL = $_POST["GUL"];
  $RP = $_POST["RP"];
  $NG = $_POST["NG"];
  $etc = $_POST["etc"];
  $jori = $_POST["jori"];


if (empty($jungName)) {
  ?>
  <script>
  alert("음식 이름을 입력해주세요!!!!")
  history.back();
  </script>
  <?php
} else {
      $upload = $_FILES['f1']['tmp_name'];

      if (empty($upload)) {
        ?>
        <script>
        alert("이미지를 꼭 첨부해주세요!")
        history.back();
        </script>
        <?php
      } else {

          $image = addslashes(file_get_contents($_FILES['f1']['tmp_name']));
          $sql = "INSERT INTO jungtbl (jungName, DJ, soy, MG, sugar, salt, MS, pepper, GUL, RP, NG, etc, jori ,image) VALUES ('".$jungName."', '".$DJ."', '".$soy."', '".$MG."', '".$sugar."', '".$salt;
          $sql = $sql."',  '".$MS."', '".$pepper."', '".$GUL."', '".$RP."', '".$NG."', '".$etc."', '".$jori."' ,'".$image."')";

          $ret = mysqli_query($con, $sql);

          //main_hantbl에 데이터 저장//

          $sql1 = "SELECT jungID FROM jungTBL ORDER BY jungID DESC LIMIT 1";
          $ret1 = mysqli_query($con, $sql1);
          $row = mysqli_fetch_array($ret1);
          $jungID = $row['jungID'];

          $sql2 = "INSERT INTO main_jungTBL (userID, name2, jungID, jungName, DJ, soy, MG, sugar, salt, MS, pepper, GUL, RP, NG, etc, jori ,image) VALUES
          ('".$_SESSION['userID']."', '".$_SESSION['name2']."', '".$jungID."', '".$jungName."', '".$DJ."', '".$soy."', '".$MG."', '".$sugar."', '".$salt."',  '".$MS."', '".$pepper."'
            , '".$GUL."', '".$RP."', '".$NG."', '".$etc."', '".$jori."' ,'".$image."')";
          $ret2 = mysqli_query($con, $sql2);

          //main_hanTBL에 good 0으로 초기화//
          $sql3 = "UPDATE main_jungTBL SET good = 0 where jungID='".$jungID."'";
          $ret3 = mysqli_query($con, $sql3);



          if ($ret3)
          {
            ?>
            <script>
            alert("게시글이 등록되었습니다!")
            location.href = "../main/junsik_main.php";
            </script>
            <?php
          } else {
            echo "에러! <br>";
            echo "원인: ".mysqli_error($con);
          }
      }
}


//mysql 종료//
  mysqli_close($con);



 ?>
