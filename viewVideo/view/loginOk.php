<?php
require_once '../module/db_conn.php';

$memId = $_POST["memId"];
$memPw = $_POST["memPw"];
$sql = myq("select * member where memId='".$memId."'");
$row = $sql->fetch_array();
if($row["memPw"]==$memPw){
    echo "<script>alert('".$row["memName"]."様ようこそ。')</script>";
    echo "<script>location.href='myPage.php?memNo=".$row["memNo"]."'</script>";
}else{
    echo "<script>alert('pwが間違いました。')</script>";
    echo "<script>location.href='../index.php'</script>";
}

?>