<?php
include '../inc_head.php';

$yangID = $_GET['yangID'];
$con = mysqli_connect("localhost", "root", "1234", "ska_ska");

$res = mysqli_query($con, "select * from goodTBL where foodID = '".$yangID."'");
$row = mysqli_fetch_array($res);


    if( $_SESSION['userID'] == $row['userID'] && $yangID == $row['foodID'] ) {

      ?>
      <script>

        alert("해당 게시물을 이미 추천하셨습니다!");
        history.back();

      </script>


      <?php
    }
    else {

      $sql1 = "UPDATE main_yangTBL SET good = good + 1 where yangID='".$yangID."'";
      $ret1 = mysqli_query($con, $sql1);

      $sql2 = "INSERT INTO goodTBL (userID, foodID) VALUES ('".$_SESSION['userID']."', '".$yangID."')";
      $ret2 = mysqli_query($con, $sql2);

      ?>
      <script>

      alert("추천하셨습니다!");
      history.back();

      </script>
      <?php


    }

?>
