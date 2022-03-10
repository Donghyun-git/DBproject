<meta charset="utf-8" />
<?php
  $con = mysqli_connect("localhost", "root", "1234", "ska_ska") or die ("mysql 접속 실패");

   //POST로 받아온 아이다와 비밀번호가 비었다면 알림창을 띄우고 전 페이지로 돌아감
  $userID = $_POST['userID'];
  $userPW = $_POST['userPW'];

  $sql = "SELECT * FROM usertbl WHERE userID = '".$_POST['userID']."'";

  $ret = mysqli_query($con, $sql);

  $row = mysqli_fetch_array($ret);
  $hashedPassword = $row['userpw'];
  $row['userID'];
  $name2=$row['name2'];

  foreach($row as $key => $r){
    echo "{$key} : {$r} <br>";
}

$passwordResult = password_verify($userPW, $hashedPassword);
if ($passwordResult === true) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['userID'] = $row['userID'];
    print_r($_SESSION);
    echo $_SESSION['userID'];

?>
    <script>
        alert(" <?=$name2?> 님 환영합니다.")
        location.href = "list.php";
    </script>
<?php
} else {
    // 로그인 실패
?>
    <script>
        alert("아이디와 비밀번호를 다시 확인해주세요.");
        location.href = "login.php";
    </script>
<?php
}
?>
