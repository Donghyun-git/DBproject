<?php
include 'inc_head.php';
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>SKA SKA</title>

  <style>

  body{
  height: 100vh;
  background-image: url("img/bg1.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  background: url("img/bg1.png" no-repeat center/cover;)
  }

  /* 레이아웃 */
  #wrap { text-align:center; text-transform:uppercase;}
  #header1 {  height: 220px;  border-bottom: 1px solid gray; }
  #header2 { font-size: 10px; height: 50px; border-bottom: 1px Dashed gray; }
  #contents { height: 870px; }
  #footer { height: 60px; }

  .bg{ width: 1300px; height: 1200px; background-color:white; margin: 0 auto; border-radius: 70px;}

  /* 컨텐츠(내용물) */
  .container {display: inline-block; text-align: center; width: 1100px; margin: 0 auto; height: inherit; }

  /* 메인 이미지 */
  img { height: 220px;}

  /*리스트 버튼*/
    .btn {
      text-decoration:none;
      color: black;
      background-color: #caccd1;
      padding: 130px 130px;
      margin: 0 auto;

      display: inline-block;
      border-radius: 40px;
      transition: all 0.1s;
      font-weight: bold;
      border-bottom: solid black 5px;

      text-align: center;
      margin-bottom:10px;
     }

     .btn:active{
       transform: translateY(2px);
       border-bottom: solid black 2px;
       background-color:#f3f4f7;
     }




     /* 리스트 스타일 삭제 */
     .foodlist { position: absolute; list-style:none; margin-top:100px; margin-left: 140px; font-size: 40px; }

     li {  display: inline; float: left; margin-bottom: 50px; margin-left: 50px; }
     #phpword {margin-bottom: 20px;}

     .word{ margin-left: 300px; font-size: 35px;}

  </style>

  </head>
  <body>
    <div id="wrap">
      <div class="bg">
      <div id="header1">
        <div class="container">
            <img src="img/main_logo.png">
        </div>
      </div>
        <div id="header2">
          <div class="container">
            <table>
              <tr>
                <span id="phpword">
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
                    <a href="logout.php"><input type="button" value="로그아웃" /></a>
                  </td>

            <td> <span class="word"> <strong>SKA 리스트</strong> </span> </td>
                  </span>

                </tr>
              </table>
          </div>

        </div>
        <div id="contents">
          <div class="container">
              <div class="foodlist">
                  <ui>
                    <li><a class='btn 1' href="main/hansik_main.php">한식</a></li>
                    <li><a class='btn 1' href="main/junsik_main.php">중식</a></li>
                    <br>
                    <li><a class='btn 1' href="main/eilsik_main.php">일식</a></li>
                    <li><a class='btn 1' href="main/yangsik_main.php">양식</a></li>
                  </ui>
              </div>
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
