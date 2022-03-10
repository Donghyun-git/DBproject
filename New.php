<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>회원가입</title>
    <!-- CSS STYLE -->
    <link rel="stylesheet" href="reset.css">
    <style>
    body{
    height:95vh;
    background-image: url("img/bg1.png");
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background: url("img/bg1.png" no-repeat center/cover;)
    }

    #wrap { text-align:center; text-transform:uppercase; font-size:22px;}
    #wrap1 { width: 1100px; height: 1000px; text-align:center; text-transform:uppercase; margin: 0 auto; }
    #header { width: inherit; font-size: 30px; height: 20px;  }
    #contents { width: inherit; height: 1100px; }
    #footer { width: inherit; font-size: 30px; height: 60px; }

    .container {width: 500px; height: 1100px;  margin: 0 auto; height: inherit; border: 5px solid #9f9fa3; background-color:white; border-radius:70px;}



img{   margin: 0 auto; display: block;}

    </style>
<!--아이디 중복확인-->
    <script type="text/javascript">

      function checkID(){
         var userid = document.getElementById("uid").value;

         var popupX = (document.body.offsetWidth / 2) - (500 / 2);
         var popupY= (window.screen.height / 2) - (400 / 2);
         if(userid)
         {
             url = "check.php?userid="+userid;
                window.open(url,"chkid", 'status=no, height=180, width=500, left='+ popupX + ', top='+ popupY);
         }else{
              alert("아이디를 입력하세요");
              }
         }

      </script>

<!--중복확인 체크 여부 작성하기-->



  </head>
  <body>
    <div id="wrap">
      <div id="header">


    </div>
    <div id="contents">
      <div class="container">

    <a href="login.php"><img src="img/main_logo.png" width =300 height = 300 ></a>

    <h3>회원 가입</h3>

      <form action="NEW_result.php" method="POST">
      ID

      <br>
      <input type="text" placeholder="아이디를 입력하세요" style="text-align:center; width:200px; height:35px;  border-radius:70px; " name="userID" id="uid" required>
    <br>


      <input type="button" name="IDcheck" style="font-size:20; background-color:#caccd1; color: black; border-radius: 70px;" value="중복확인" onclick="checkID();">
<br>
    <br>
      비밀번호
        <br>
      <input type="password" placeholder="비밀번호를 입력하세요" style="text-align:center; width:200px; height:35px;  border-radius:70px;" name="userPW" required>
        <br>
        <br>
      비밀번호 확인
        <br>
      <input type="password" placeholder="비밀번호 입력 확인" style="text-align:center; width:200px; height:35px;  border-radius:70px;" name="userPW2" value="" required>
        <br>
        <br>
      이름
        <br>
      <input type="text" placeholder="이름을 입력하세요" style="text-align:center; width:200px; height:35px;  border-radius:70px;" name="name" required>
        <br>
        <br>
      닉네임
        <br>
      <input type="text" placeholder="닉네임을 입력하세요" style="text-align:center; width:200px; height:35px;  border-radius:70px;" name="name2" required>
        <br>
        <br>
      이메일
        <br>
      <input type="text" placeholder="이메일을 입력하세요" style="text-align:center; width:200px; height:35px;  border-radius:70px;" name="E_mail" required>
        <br>
      <br>
      <input type="submit" style="font-size:20; background-color:#caccd1; color: black; border-radius: 70px;" value="가입하기">
    </form>
  </div>
    </div>
    <div id="footer">

    </div>
  </div>
  </body>
</html>
