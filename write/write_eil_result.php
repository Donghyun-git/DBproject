<?php

include "../inc_head.php";



//mysql접속//
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska");

//입력한 데이터 값 가져오기 데이터 전송//
  $eilName = $_POST["eilName"];
  $soy = $_POST["soy"];
  $MG = $_POST["MG"];
  $chamoil = $_POST["chamoil"];
  $sugar = $_POST["sugar"];
  $salt = $_POST["salt"];
  $MS = $_POST["MS"];
  $pepper = $_POST["pepper"];
  $GUL = $_POST["GUL"];
  $etc = $_POST["etc"];
  $jori = $_POST["jori"];


if (empty($eilName)) {
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
          $sql = "INSERT INTO eiltbl (eilName, soy, MG, chamoil, sugar, salt, MS, pepper, GUL, etc, jori ,image) VALUES ('".$eilName."', '".$soy."', '".$MG."', '".$chamoil."', '".$sugar."', '".$salt;
          $sql = $sql."',  '".$MS."', '".$pepper."', '".$GUL."', '".$etc."', '".$jori."' ,'".$image."')";

          $ret = mysqli_query($con, $sql);

          //main_hantbl에 데이터 저장//

          $sql1 = "SELECT eilID FROM eilTBL ORDER BY eilID DESC LIMIT 1";
          $ret1 = mysqli_query($con, $sql1);
          $row = mysqli_fetch_array($ret1);
          $eilID = $row['eilID'];

          $sql2 = "INSERT INTO main_eilTBL (userID, name2, eilID, eilName, soy, MG, chamoil, sugar, salt, MS, pepper, GUL, etc, jori ,image) VALUES
          ('".$_SESSION['userID']."', '".$_SESSION['name2']."', '".$eilID."', '".$eilName."', '".$soy."', '".$MG."', '".$chamoil."', '".$sugar."', '".$salt."',  '".$MS."', '".$pepper."'
            , '".$GUL."' ,'".$etc."', '".$jori."' ,'".$image."')";
          $ret2 = mysqli_query($con, $sql2);

          //main_hanTBL에 good 0으로 초기화//
          $sql3 = "UPDATE main_eilTBL SET good = 0 where eilID='".$eilID."'";
          $ret3 = mysqli_query($con, $sql3);



          if ($ret3)
          {
            ?>
            <script>
            alert("게시글이 등록되었습니다!")
            location.href = "../main/eilsik_main.php";
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
