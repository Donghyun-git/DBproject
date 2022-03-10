<?php
include '../inc_head.php';
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>ska_ska</title>

<link rel="stylesheet" href="reset1.css">
<style>
body{
height: 210vh;
background-image: url("../img/bg1.png");
background-repeat: no-repeat;
background-position: center center;
background-size: cover;
background: url("../img/bg1.png" no-repeat center/cover;)
}

/* 전체 레이아웃  1200 px */

#wrap {  text-align: center;   }
#header2 { font-size: 10px; height: 80px; border-bottom: 4px Dashed gray; text-align:center; }
#header { height: 200px; border-bottom: 1px gray solid; }
#contents { height: 2345px; }
#content1 { height: 380px;  }
#content2 {  height: 600px;  }
#content3 {  height: 600px; }
#content4 { height: 770px;}
#thumb { height: 200px;}
#content5 { height: 100px; }

.bg{ width: 1300px; height: 2730px; background-color:white; margin: 0 auto;}


/* 컨텐츠 */
.container2 {font-size: 15px; display: inline-block; text-align: center; width: 1100px; margin: 0 auto; height: inherit; background: white;}
.container1 {width: 1100px;  margin: 0 auto;  height: inherit;  }
.container { border-left: 3px solid black; border-right: 3px solid black; width: 1100px;  margin: 0 auto;  height: inherit;  }
/* 이미지 크기 */

img { height: 300px; margin-top: 25px; border: 2px black solid;}

#img_a { height : 100px; width: 100px; border-style:none; margin: 0 auto; }

.good_int { display: block; font-size: 45px; }

/* 음식이름 폰트 */
.foodname { display:inline-block; font-size:50px;  margin-right:150px;}

/* 리스트 */

ul { list-style:none;}

.main_list { margin-top: 20px; width: 600px; margin: 0 auto; border: 7px dashed black; border-radius: 100px;}

.list { margin-top:50px; margin-bottom: 50px;   }

.tit1 { margin-top: 20px; font-size: 30px;}

.table1 { margin: 0 auto; width: 150px; font-size:18px;}



.main_list1 { margin-top: 20px; width: 600px; margin: 0 auto; border: 7px dashed black; border-radius: 100px;}

.main_list2 { margin-top: 20px; width: 600px; margin: 0 auto; border: 7px dashed black; border-radius: 100px;}

.list1 { margin-top:50px; margin-bottom: 50px;   }

.list1_list{margin-top:20px; font-size: 30px;}

.tit2 { margin-top: 20px; font-size: 30px;}

.tit3 { margin-top:20px; font-size: 30px;}

.back_button { display:inline-block; float: right; margin-right: 30px; margin-top:25px;}

.logout_button { display:inline-block; float: left; margin-left: 30px; margin-top:25px;}

.sns { border-style: none;}
</style>

</head>

<!--hansik_main.php에서 hanID값 받아오기-->
<?php
$jungID = $_GET['jungID'];
$con = mysqli_connect("localhost", "root", "1234", "ska_ska");
$res = mysqli_query($con, "select * from main_jungtbl where jungID = '".$jungID."'");
$row = mysqli_fetch_array($res);
?>


  <body>
<div id="wrap">
  <div class="bg">
  <div id="header2">
    <div class="container2">

        <div class="logout_button">
          <?php
          if(isset($_SESSION['userID'])){
            echo "{$_SESSION['name2']}님 환영합니다.";

          }else{
            echo "<script>alert('잘못된 접근입니다.'); history.back(); </script>";
            }
            ?>
            <a href="../logout.php"><input type="button" value="로그아웃" /></a>
        </div>

        <!--음식이름-->
        <?php
        $jungName = $row['jungName'];
        ?>
        <div class="foodname"> <?php echo "<strong>".$jungName."</strong>"; ?> </div>

        <div class="back_button">
          <input type="image" name="button"  src='../img/back_icon.png' style="width:30px; height:30px;" onClick="location.href='junsik_main.php'">
        </div>

          </div>

  </div>


    <div id="contents">
      <div id="content1">
        <div class="container">

          <!--음식이름-->

          <?php

                echo '<img src="data:image/png;base64, '.base64_encode($row['image'] ).'" height="250" width="300"/>';
                //이미지 크기민 위치 조정//
          ?>
        </div>
      </div>
      <div id="content2">
        <div class="container">
          <div class="main_list">
            <div class="tit1">
              <strong>메인재료</strong>
            </div>
            <ul class="list">
              <li>
              <table class="table1">
                <tr>
                    <td>
                    <?php
                    $DJ = $row['DJ'];
                    $soy = $row['soy'];
                    $MG = $row['MG'];
                    $sugar = $row['sugar'];
                    $salt = $row['salt'];
                    $MS = $row['MS'];
                    $pepper = $row['pepper'];
                    $GUL = $row['GUL'];
                    $RP = $row['RP'];
                    $NG = $row['NG'];


                    if($DJ==0){
                      echo "";
                    }else {
                      echo "된장  ";
                      echo "<strong>".$DJ."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($soy==0){
                      echo "";
                    }else {
                      echo "간장  ";
                      echo "<strong>".$soy."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($MG==0){
                      echo "";
                    }else {
                      echo "다진마늘  ";
                      echo "<strong>".$MG."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($sugar==0){
                      echo "";
                    }else {
                      echo "설탕  ";
                      echo "<strong>".$sugar."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($salt==0){
                      echo "";
                    } else {
                      echo "소금  ";
                      echo "<strong>".$salt."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($MS==0){
                      echo "";
                    } else {
                      echo "맛술  ";
                      echo "<strong>".$MS."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($pepper==0){
                      echo "";
                    } else {
                      echo "후추  ";
                      echo "<strong>".$pepper."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($GUL==0){
                      echo "";
                    } else {
                      echo "굴소스  ";
                      echo "<strong>".$GUL."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($RP==0){
                      echo "";
                    } else {
                      echo "고춧가루  ";
                      echo "<strong>".$RP."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    if($NG==0){
                      echo "";
                    } else {
                      echo "전분가루  ";
                      echo "<strong>".$NG."</strong>";
                      echo " 스푼";
                      echo "<br>";
                    }
                    ?>
                    </td>
                  </tr>
                </table>
            </li>
          </ul>
        </div>
      </div>
      </div>

      <div id="content3">
        <div class="container">
          <div class="main_list1">
            <div class="tit2">
              <strong>기타재료</strong>
            </div>
            <ul class="list1">
              <li>
              <table class="table1">
                <tr>
                  <td>
                  <!--기타재료-->
                  <?php
                  $etc = $row['etc'];

                  if(!$etc) {
                    echo "";
                  } else {
                     //쉼표 공백으로 치환//
                     $result = str_replace(",", "", $etc);
                     $result1 = str_replace("\r\n", "<br>", $result);
                     echo "<br>";
                     echo "<strong>".$result1."</strong>";
                  }

                  ?>
                  </td>
                </tr>

                </table>
            </li>
          </ul>
          </div>
        </div>
      </div>
      <div id="content4">
        <div class="container">
          <div class="main_list2">
            <div class="tit3">
              <strong>조리 순서</strong>
            </div>
            <ul class="list1">
              <li class='list1_list'>
                <?php
                  $jori = $row['jori'];
                  if(!$etc) {
                    echo "";
                  } else {
                    //enter 치환//
                    $result = str_replace("\r\n", "<br>", $jori);
                    echo "<strong>".$result."</strong>";
                    echo "<br>";
                  }
                ?>
              </li>


            </ul>
          </div>
        </div>
      </div>

    </div>
    <div id="thumb">
      <div class="container">
        <?php
       //main_hanTBL에 있는 good값//
       echo '<a href="../good/jungsik_good.php?jungID='.$jungID.'"><img id="img_a" src="../img/good.png"></a>';
         echo '<div class="good_int">'.$row['good'].'</div>';

       ?>
      </div>
    </div>

    <div id="content5">
      <div class="container">
        <div style="width: 100%; text-align: center; margin-bottom: 50px; border-bottom: 3px black solid">

        <!--네이버 공유-->
        <a href="#" onclick="javascript:window.open('http://share.naver.com/web/shareView.nhn?url=' +encodeURIComponent(document.URL)+'&title='+encodeURIComponent(document.title),
         'naversharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=no,height=600,width=600');return false;" target="_blank" alt="Share on Naver" >
         <img class="sns" src="../img/naver.png" title="네이버로 공유하기" class="sharebtn_custom" style="width: 70px; height: 70px;"></a>

        <!-- 트위터 공유-->
        <a href="#" onclick="javascript:window.open('https://twitter.com/intent/tweet?text=[%EA%B3%B5%EC%9C%A0]%20' +encodeURIComponent(document.URL)+'%20-%20'+encodeURIComponent(document.title),
         'twittersharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank" alt="Share on Twitter" >
         <img class="sns" src="../img/twitter.png" title="트위터로 공유하기" class="sharebtn_custom" style="width: 70px; height: 70px;"></a>

        <!-- 페이스북 공유 -->
        <a href="#" onclick="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=' +encodeURIComponent(document.URL)+'&t='+encodeURIComponent(document.title),
         'facebooksharedialog', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank" alt="Share on Facebook" >
         <img class="sns" src="../img/facebook1.png" title="페이스북으로 공유하기" class="sharebtn_custom" style="width: 70px; height: 70px;"></a>

        <!-- 카카오 스토리 공유 버튼 -->
        <a href="#" onclick="javascript:window.open('https://story.kakao.com/s/share?url=' +encodeURIComponent(document.URL), 'kakaostorysharedialog',
         'menubar=no,toolbar=no,resizable=yes,scrollbars=yes, height=600,width=600');return false;" target="_blank" alt="Share on kakaostory">
         <img class="sns" src="../img/kakaostory.png" title="카카오스토리로 공유하기" class="sharebtn_custom" style="width: 70px; height: 70px;"></a>

        </div>
      </div>
    </div>




</div>
</div>

  </body>
</html>
