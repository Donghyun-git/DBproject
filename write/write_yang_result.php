<?php

include "../inc_head.php";



//mysql접속//
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska");

//입력한 데이터 값 가져오기 데이터 전송//
  $yangName = $_POST["yangName"];
  $tomato = $_POST["tomato"];
  $cream = $_POST["cream"];
  $butter = $_POST["butter"];
  $sugar = $_POST["sugar"];
  $salt = $_POST["salt"];
  $pepper = $_POST["pepper"];
  $RP = $_POST["RP"];
  $PA = $_POST["PA"];
  $etc = $_POST["etc"];
  $jori = $_POST["jori"];


if (empty($yangName)) {
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
          $sql = "INSERT INTO yangtbl (yangName, tomato, cream, butter, sugar, salt, pepper, RP, PA, etc, jori ,image) VALUES ('".$yangName."', '".$tomato."', '".$cream."', '".$butter."', '".$sugar."', '".$salt;
          $sql = $sql."',  '".$pepper."', '".$RP."', '".$PA."', '".$etc."', '".$jori."' ,'".$image."')";

          $ret = mysqli_query($con, $sql);

          //main_hantbl에 데이터 저장//

          $sql1 = "SELECT yangID FROM yangTBL ORDER BY yangID DESC LIMIT 1";
          $ret1 = mysqli_query($con, $sql1);
          $row = mysqli_fetch_array($ret1);
          $yangID = $row['yangID'];

          $sql2 = "INSERT INTO main_yangTBL (userID, name2, yangID, yangName, tomato, cream, butter, sugar, salt, pepper, RP, PA, etc, jori ,image) VALUES
          ('".$_SESSION['userID']."', '".$_SESSION['name2']."', '".$yangID."', '".$yangName."', '".$tomato."', '".$cream."', '".$butter."', '".$sugar."', '".$salt."',  '".$pepper."', '".$RP."'
            , '".$PA."' ,'".$etc."', '".$jori."' ,'".$image."')";
          $ret2 = mysqli_query($con, $sql2);

          //main_hanTBL에 good 0으로 초기화//
          $sql3 = "UPDATE main_yangTBL SET good = 0 where yangID='".$yangID."'";
          $ret3 = mysqli_query($con, $sql3);



          if ($ret3)
          {
            ?>
            <script>
            alert("게시글이 등록되었습니다!")
            location.href = "../main/yangsik_main.php";
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
