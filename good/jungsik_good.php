<?php
include '../inc_head.php';

$jungID = $_GET['jungID'];
$con = mysqli_connect("localhost", "root", "1234", "ska_ska");

$res = mysqli_query($con, "select * from goodTBL where foodID = '".$jungID."'");
$row = mysqli_fetch_array($res);


    if( $_SESSION['userID'] == $row['userID'] && $jungID == $row['foodID'] ) {

      ?>
      <script>

        alert("해당 게시물을 이미 추천하셨습니다!");
        history.back();

      </script>


      <?php
    }
    else {

      $sql1 = "UPDATE main_jungTBL SET good = good + 1 where jungID='".$jungID."'";
      $ret1 = mysqli_query($con, $sql1);

      $sql2 = "INSERT INTO goodTBL (userID, foodID) VALUES ('".$_SESSION['userID']."', '".$jungID."')";
      $ret2 = mysqli_query($con, $sql2);

      ?>
      <script>

      alert("추천하셨습니다!");
      history.back();

      </script>
      <?php


    }

?>
