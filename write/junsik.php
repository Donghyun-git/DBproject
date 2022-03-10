<?php
include '../inc_head.php';
?>
<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>ska_ska 중식</title>
  <style>

  body{
  height: 105vh;
  background-image: url("../img/bg1.png");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  background: url("../img/bg1.png" no-repeat center/cover;)
  }

  /* 레이아웃 */
  #wrap { text-align:center; text-transform:uppercase;}
  #header1 {  height: 220px;  border-bottom: 1px solid gray; }
  #header2 { font-size: 25px; height: 50px; border-bottom: 1px Dashed gray; }
  #contents { height: 990px; }
  #footer {font-size: 10px; height: 60px; border-top: 1px Dashed gray; }

  /* 컨텐츠(내용물) */
  .container {display: inline-block; text-align: center; width: 1100px; margin: 0 auto; height: inherit; background: white;}


  /* 메인 이미지 */
  img { height: 220px;}

  /* 로그아웃 버튼 */
  .logout { display:inline-block;}

  /* 게시판 폼 */

          table.table2{
                  border-collapse: separate;
                  border-spacing: 1px;
                  text-align: left;
                  line-height: 1.5;
                  border-top: 1px solid #ccc;
                  margin : 20px 10px;
          }
          table.table2 tr {
                   width: 50px;
                   padding: 10px;
                  font-weight: bold;
                  vertical-align: top;
                  border-bottom: 1px solid #ccc;
          }
          table.table2 td {
                   width: 100px;
                   padding: 10px;
                   vertical-align: top;
                   border-bottom: 1px solid #ccc;
          }

          form { display: inline-block; text-align: center; margin: 0 auto; }

  /* 부가 재료 css */

  .button { width: 25px; height: 25px;}

  .word1{ padding-left: 10px; padding-right: 10px}

  .word2{ padding-top: 10px;}

  .twoword { display: inline-block; margin-left:32px; }

  .threeword{ display: inline-block; margin-left: 16px;}

  .word{ padding-top:30px; font-size:35px;}

  .spoon { display:inline-flex; margin-left: 25px;}

  </style>

  </head>
  <body>
<div id="wrap">
  <div id="header1">
    <div class="container">
<a href="../main/junsik_main.php"> <img src="../img/main_logo.png"> </a>
    </div>
  </div>
  <div id="header2">
    <div class="container">
 <span class="word"> <strong> 중식 레시피 작성 </strong> </span>
    </div>
  </div>
  <div id="contents">
    <div class="container">
      <form method = "post" action = "write_jung_result.php" enctype="multipart/form-data">
      <table  style="padding-top:20px" width=900 border=0 cellpadding=2 >
              <tr>
              <td height=30  bgcolor=#ccc><font color=white> 레시피 up</font></td>
              </tr>
              <tr>
              <td bgcolor=white>
              <table class = "table2">
                      <tr>
                      <td>작성자</td>
                      <td><span>
                        <?php
                        if(isset($_SESSION['userID'])){
                        echo "{$_SESSION['name2']}";}
                      ?>
                    </span>
                  </td>
                      </tr>

                      <tr>
                      <td>음식 이름</td>
                      <td><input type = text name = "jungName" size=60 ></td>
                      </tr>

                      <tr>
                        <td>재료 선택</td>
                        <td>

                          <div><span class="word1">된장</span> <div class="twoword">
                            <select name="DJ" style="width: 80px; height:30px">
                                <option selected>0</option>
                                <option>0.5</option>
                                <option>1</option>
                                <option>1.5</option>
                                <option>2</option>
                                <option>2.5</option>
                                <option>3</option>
                              </select>
                              <div class="spoon">스푼</div>
                            </div>
                          </div>
                          <div class="word2"><span class="word1">간장</span> <div class="twoword"> <select name="soy" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>
                          </div>
                        </div>
                          <div class="word2"><span class="word1">다진마늘</span>   <select name="MG" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>

                          </div>
                          <div class="word2"><span class="word1">설탕</span>  <div class="twoword"><select name="sugar" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>
                           </div>
                          </div>
                          <div class="word2"><span class="word1">소금</span> <div class="twoword"> <select name="salt" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>
                             </div>
                           </div>
                          <div class="word2"><span class="word1">맛술</span> <div class="twoword"><select name="MS" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>
                          </div>
                          </div>
                          <div class="word2"><span class="word1">후추</span> <div class="twoword"><select name="pepper" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>
                             </div>
                           </div>
                          <div class="word2"><span class="word1">굴소스</span> <div class="threeword"><select name="GUL" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>
                             </div>
                           </div>
                          <div class="word2"><span class="word1">고춧가루</span>  <select name="RP" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>
                          </div>
                        </div>
                          <div class="word2"><span class="word1">전분가루</span> <select name="NG" style="width: 80px; height:30px">
                              <option selected>0</option>
                              <option>0.5</option>
                              <option>1</option>
                              <option>1.5</option>
                              <option>2</option>
                              <option>2.5</option>
                              <option>3</option>
                            </select>
                            <div class="spoon">스푼</div>
                            </div>



                      </td>
                      </tr>
                      <tr>
                        <td>기타 재료</td>
                          <td><textarea name = "etc" cols=85 rows=5 placeholder=",(쉼표)와 줄을 바꿔가며 재료를 구분해서 입력해주세요."></textarea></td>
                        </td>
                      </tr>
                      <tr>
                        <td>조리 순서</td>
                          <td><textarea name = "jori" cols=85 rows=10 placeholder="1.(숫자)와 줄을 바꿔가며 조리순서를 구분해서 입력해주세요."></textarea></td>
                      </tr>
                      <tr>
                        <td>이미지 첨부</td>
                          <td><input type="file" name="f1"></td>
                      </tr>

                      </table>
                      <input type = "submit" name = "submit1" value="작성">

              </td>
              </tr>
      </table>
      </form>

    </div>
  </div>

</div>
  </body>
</html>
