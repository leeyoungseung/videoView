<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Join</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script
  src="http://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
 $("#send").click(function(){
  var memId = $("#memId").val();
  memId = $.trim(memId);
  if(memId==''){
   alert("IDを入力してください");
   return;
  }
  var memPw = $("#memPw").val();
  memPw = $.trim(memPw);
  if(memPw==''){
   alert("Pwdを入力してください");
   return;
  }
  var memName = $("#memName").val();
  memName = $.trim(memName);
  if(memName==''){
   alert("氏名を入力してください");
   return;
  }
  $("form").attr("action", "joinMemberOk.php").submit();
 });
});
</script>
</head>
<body>
<div class="container">
	<div class="jumbotron">
		<div>
		<form action="joinResult.php" method="post" name="jf">
		<div>
		<p class="text-center">ID : <input type="text" id="memId" name="memId" maxlength="20"></p>
		</div>
		<div>
		<p class="text-center">PWD : <input type="text" id="memPw" name="memPw" ></p>
		</div>
		<div>
		<p class="text-center">氏名 : <input type="text" id="memName" name="memName" maxlength="30"></p>
		</div>
		<div align="center">
		<input class="btn btn-primary" type="button" value="登録" id="send">
		</div>
		</form>
		</div>
		<br>
		<div align="center">
			<button class="btn btn-primary" type="button" onclick="location.href='../index.php'">戻る</button>
		</div>
	</div>
</div>
</body>
</html>

