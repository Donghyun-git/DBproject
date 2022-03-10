<?php
include '../inc_head.php';
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>ska_ska</title>
    <style>

   .main_logo{ height:220px;}

    body{
    height: 135vh;
    background-image: url("../img/bg1.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background: url("../img/bg1.png" no-repeat center/cover;)
    }
    /* 레이아웃 */
    #wrap { text-align:center; text-transform:uppercase;}
    #header1 {  height: 220px; border-bottom: 1px solid gray; }
    #header2 { font-size: 10px; height: 50px; border-bottom: 1px Dashed gray; }
    #contents { height: 1300px; font-size: 20px; margin-top: 20px; }
    #footer {font-size: 15px; height: 60px; }

  .bg{ width: 1300px; height: 1630px; background-color:white; margin: 0 auto;}

    /* 컨텐츠(내용물) */
    .container {
      display: block;
      text-align: center;
      width: 1100px;
      margin: 0 auto;
      height: inherit;

       }
    .container1 {display: inline-block; text-align: center; width: 1100px; margin: 0 auto; height: inherit;  background-color: #caccd1; border-radius: 70px;}



    /* 메인 이미지 */


    .main_word{ font-size: 30px; margin-left: 310px; margin-top: 50px;}

/* 작성 버튼 위치 */
    .write_button { display:inline-block; margin-top:10px; margin-left: 350px;}

/* body 여백 초기화 */
    body {margin: 0;}

ul li { border-radius: 20px; background-color: #f3f4f7}
ul { background-color: #caccd1;}
li { list-style-type:none; float: left; display:inline-block;}


</style>
  </head>
  <body>
<div id="wrap">
  <div class="bg">


  <div id="header1">
    <div class="container">
<a href="../list.php"> <img class="main_logo" src="../img/main_logo.png"> </a>
    </div>
  </div>
  <div id="header2">

    <div class="container">

        <table>
          <tr>
            <td>
              <?php

              if(isset($_SESSION['userID'])){
                echo "<h6>{$_SESSION['name2']}님 환영합니다.</h6>";

              }else{
                echo "<script>alert('잘못된 접근입니다.'); history.back(); </script>";
                }
                ?>
              </td>
              <td>
                <a href="../logout.php"><input type="button" value="로그아웃" /></a>
              </td>
              <td>
                <span class="main_word"><strong>한식 공유방</strong></span>
              </td>
              <td class="write_button">
                <input type="image" name="button"  src='../img/write_icon.png' style="width:30px; height:30px;" onClick="location.href='../write/hansik.php'">

              </td>
            </tr>
          </table>
      </div>
  </div>
  <div id="contents">
    <div class="container1">

<!--MySQL에 저장된 데이터 불러오기, 자리 잡기-->
<ul>

  <?php
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska");
  $ret = mysqli_query($con, "select * from main_hantbl where hanID LIKE 'K%'");


  ?>


<?php
  while($row=mysqli_fetch_array($ret)){
?>
  <li style = " display:inline-block; text-align:center; vertical-align:top; margin-left:50px; margin-top:15px;">
<?php
    echo "작성자 : ";
    echo "<strong>".$row['name2']."</strong>";
    echo "<br>";
    echo '<a href="hansik_food.php?hanID='.$row['hanID'].'"><img src="data:image/png;base64, '.base64_encode($row['image'] ).'" height="200" width="200"/ ></a>';
    echo "<br>";
    echo $row['hanName'];
    echo "<br>";
    echo '<img src="../img/good.png" height="20" width="20"/>';
  
    echo $row['good'];
    echo "<br>";
}
  ?>
  </li>
</ul>




    </div>
  </div>
  <div id="footer">
    <div class="container">
<h3>&copy; 2021. HELP_ME. All Right Reserved.</h3>
    </div>
  </div>
</div>
</div>
  </body>
</html>
