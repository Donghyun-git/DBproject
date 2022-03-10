<?php

include "../inc_head.php";



//mysql접속//
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska");

//입력한 데이터 값 가져오기 데이터 전송//
  $hanName = $_POST["hanName"];
  $GCJ = $_POST["GCJ"];
  $DJ = $_POST["DJ"];
  $sugar = $_POST["sugar"];
  $pepper = $_POST["pepper"];
  $salt = $_POST["salt"];
  $MG = $_POST["MG"];
  $soy = $_POST["soy"];
  $chamoil = $_POST["chamoil"];
  $MS = $_POST["MS"];
  $oligo = $_POST["oligo"];
  $etc = $_POST["etc"];
  $jori = $_POST["jori"];


if (empty($hanName)) {
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
          $sql = "INSERT INTO hantbl (hanName, GCJ, DJ, sugar, pepper, salt, MG, soy, chamoil, MS, oligo, etc, jori ,image) VALUES ('".$hanName."', '".$GCJ."', '".$DJ."', '".$sugar."', '".$pepper."', '".$salt;
          $sql = $sql."',  '".$MG."', '".$soy."', '".$chamoil."', '".$MS."', '".$oligo."', '".$etc."', '".$jori."' ,'".$image."')";

          $ret = mysqli_query($con, $sql);

          //res_hantbl에 데이터 저장//

          $sql1 = "SELECT hanID FROM hanTBL ORDER BY hanID DESC LIMIT 1";
          $ret1 = mysqli_query($con, $sql1);
          $row = mysqli_fetch_array($ret1);
          $hanID = $row['hanID'];

          $sql2 = "INSERT INTO main_hanTBL (userID, name2, hanID, hanName, GCJ, DJ, sugar, pepper, salt, MG, soy, chamoil, MS, oligo, etc, jori ,image) VALUES
         ('".$_SESSION['userID']."', '".$_SESSION['name2']."', '".$hanID."', '".$hanName."', '".$GCJ."', '".$DJ."', '".$sugar."', '".$pepper."', '".$salt."',  '".$MG."', '".$soy."'
           , '".$chamoil."', '".$MS."', '".$oligo."', '".$etc."', '".$jori."' ,'".$image."')";
         $ret2 = mysqli_query($con, $sql2);

         //main_hanTBL에 good 0으로 초기화//
         $sql3 = "UPDATE main_hanTBL SET good = 0 where hanID='".$hanID."'";
         $ret3 = mysqli_query($con, $sql3);



         if ($ret3)
         {
           ?>
           <script>
           alert("게시글이 등록되었습니다!")
           location.href = "../main/hansik_main.php";
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
