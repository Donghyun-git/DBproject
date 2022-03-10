
<HTML>
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>SKA SKA</title>
   <style>

   body{
   height: 60vh;
   background-image: url("img/bg1.png");
   background-repeat: no-repeat;
   background-position: center center;
   background-size: cover;
   background: url("img/bg1.png" no-repeat center/cover;)
   }

   #wrap { text-align:center; text-transform:uppercase;}
   #wrap1 { width: 1100px; height: 1000px; text-align:center; text-transform:uppercase; margin: 0 auto; }
   #header { width: inherit; font-size: 30px; height: 100px;  }
   #contents { width: inherit; height: 750px; }
   #footer { width: inherit; font-size: 30px; height: 60px; }

   .container {width: 550px; margin: 0 auto; height: inherit; border: 5px solid #9f9fa3; background-color:white; border-radius:70px;}




  img { display: block; margin: 0px auto; }


 </style>

</head>
<br><br>
<body>




<div id="wrap">



  <div id="wrap1">


  <div id="header">

  </div>
  <div id="contents">
<div class="container">
  <img src="img/main_logo.png" width =300 height = 300 >
<form  action="login_ok.php" method="post">

          <h1> ID </h1>

            <input placeholder="ID를 입력하세요" size="40" type="text" name="userID" style="width:300px;height:45px;font-size:30px;text-align: center; border-radius: 70px;" required></input>

         <div class="login-input-wrap password-wrap">

          <h1> PASSWORD </h1>

            <input placeholder="PASSWORD" type="password" name="userPW" style="width:300px;height:45px;font-size:30px;text-align: center; border-radius: 70px;" required></input>
         </div>

        <br>
            <!--<button>로그인</button><a href = "login.php"></a>-->
        <!--<button>회원가입</button><a href = "회원가입.php"></a>-->
        <!--버튼 링크 걸기, 크기 조절 및 스타일-->
        <input type=submit style="WIDTH: 85pt; HEIGHT: 24pt; font-size:20; background-color:#caccd1; color: black; border-radius: 70px;" value="로그인">

      </form>
        <input type=button style="WIDTH: 85pt; HEIGHT: 24pt; font-size:20; background-color:#caccd1; color: black; border-radius: 70px;" value="회원가입" onClick="location.href='NEW.php'">


       </div>

      </div>
      <div id="footer">


      <div>
</div>
</div>
</body>
