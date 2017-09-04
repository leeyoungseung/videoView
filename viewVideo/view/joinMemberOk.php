<?php
header("Content-Type: text/html; charset=utf-8");
require_once '../module/db_conn.php';

$memId = $_POST["memId"];
$memPw = $_POST["memPw"];
$memName = $_POST["memName"];

$sql = myq("insert into member (memId, memPw, memName)
			values ('".$memId."','".$memPw."', '".$memName."')");

$confirm = myq("select * from member where memId='".$memId."'");
$row = $confirm->fetch_array();
if($row["memId"]==$memId){
    echo "<script>alert('".$row["memName"]."様の登録を完了しました。')</script>";
    echo "<script>location.href='../index.php'</script>";
}else{
    echo "<script>alert('登録エラー。')</script>";
    echo "<script>location.href='../index.php'</script>";
}
?>