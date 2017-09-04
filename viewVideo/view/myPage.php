<?php
$memNo = $_POST["memNo"];
$sql = myq("select * member where memNo='".$memNo."'");
$row = $sql->fetch_array();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"><!-- utf-8로 테스트인코딩을 기본으로 하겠다  -->
 <meta name="viewport" content="width=device-width", initial-scale="1">
 <!-- 화면 설정 : initial-scale : 기본화면을 1로 설정, content : 화면크기는 기계화면의 크기와 일치하게 설정  -->
 <title>코딩부스터</title>
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css"><!-- 외부적으로 만들어진 css파일의 디자인을 사용하겠다고 선언하는 코드  -->
 <link rel="stylesheet" type="text/css" href="css/codingBooster.css">
</head>
 <body>
 <nav class="navbar navbar-default"><!-- 네비게이션바의 시작 -->
  <div class="container-fluid"><!-- 네비게이션바의 부트스트랩 컨테이너 -->
   <div class="navbar-header"><!-- 네비게이션바의 header부분 -->
    <!-- (1)네비게이션바의 header버튼 -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
     data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only"></span>
    <span class="icon-bar"></span><!-- 네비게이션바의 header버튼의 줄 수를 늘린다 -->
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><?php echo $row["memName"]?></a><!-- (2)header부분의 태그 -->
   </div>
   <div class="collapsed nabvar-collapse" id="bs-example-navbar-collapse-1"><!-- 네비게이션바의 내용을 가로로 나열 할 수 있게 설정 -->
    <ul class="nav navbar-nav"><!-- 네비게이션바의 본문 -->
     <li class="active"><a href="joinMedia.php?memNo=<?php echo row["memNo"]?>">映像登録<span class="sr-only"></span></a></li><!-- (3)두 번째 버튼으로 li태그의 active클래스 속성을 사용하여 선택되어져 있듯이 보이게함. -->
     <li><a href="#">앨범</a></li><!-- (4)세번째 버튼 -->
     <li class="dropdown"><!-- (5)dropdown클래스 속성을 이용하여 토글 버튼생성 -->
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
       aria-haspopup="true" aria-expanded="false">멤버<span class="caret"></span></a>
      <ul class="dropdown-menu">
       <li><a href="#">모모</a></li>
       <li><a href="#">사나</a></li>
       <li><a href="#">미나</a></li>
      </ul>
     </li>
    </ul>
    <form class="navbar-form navbar-left"><!-- (6)네비게이션바의 form태그를 사용하여 검색창 생성 -->
     <div class="form-group">
      <input type="text" class="form-control" placeholder="내용을 입력하세요">
     </div>
     <button type="submit" class="btn btn-default">검색</button>
    </form>
    <ul class="nav navbar-nav navbar-right"><!-- (7)dropdown클래스 속성을 이용하여 토글 버튼생성 -->
     <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
       aria-haspopup="true" aria-expanded="false">접속하기<span class="caret"></span></a>
      <ul class="dropdown-menu">
       <li><a href="#">로그인</a></li>
       <li><a href="#">로그아웃</a></li>
      </ul>
     </li>

    </ul>
   </div>
  </div>
 </nav> 
 <div class="container"><!-- container : 어떠한 내용이 담기는 공간  -->
  <div class="jumbotron"><!-- jumbotron : 전광판이라고 생각하면 된다 -->
   <h1 class="text-center">트와이스를 소개합니다 </h1>
   <p class="text-center">이쁜애 옆에 또 이쁜애가! 최고의 걸그룹 트와이스!!</p>
   <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">시그널 보내!</a></p>
  </div>
  <hr>
  <!-- 패널을 생성 -->
  <div class="panel panel-primary">
   <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-pencil"></span>
    &nbsp;&nbsp;youtube 갤러리</h3>
   </div>
   <div class="panel-body">
   <!-- 미디어 태그를 생성하기 -->
    <div class="media">
     <div class="media-left"><!-- 하나의 문단(div태그) 안에 이미지를 넣기  -->
      <div class="row">
   <div class="embed-responsive embed-responsive-16by9"><!-- embed-responsive-16by9 동영상 태그인 embed를 생성 하고 16by9비율로 동영상 크기를 지정함-->
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bVxRjgDRclQ">
    </iframe>
   </div>
  </div>
     </div>
     <div class="media-body">
      <h4 class="media-heading"><a href="#">모모 사진 모음</a>&nbsp;<span class="badge">New</span></h4>
      모모 : 본명은 히라이 모모, 춤을 매우 잘 추는 마지막 끝판왕 멤버입니다.
     </div>
    </div>
   </div>
  </div>
 </div>
 <footer style="background-color: #000000; color: #ffffff"><!-- footer를 선언하는 태그  -->
  <div class="container">
   <br>
   <div class="row"><!-- row속성은 화면안의 div(문단)를 12개로 등분하여 하나의 문단에 최대 12개까지 태그가 올 수 있다 등분한 공간은 col-sm-(1~12)속성을 통해 활용 할 수 있다   -->
    <div class="col-sm-2" style="text-align: center;"><h5>Copyright &copy; 2017</h5><h5>David</h5></div>
    <div class="col-sm-4"><h4>대표자 소개</h4><p>저는 트와이스를 프로듀싱한 JYP입니다</p></div>
    <div class="col-sm-2"><h4 style="text-align: center;">내비게이션</h4>
     <div class="list-group">
      <a href="#" class="list-group-item">소개</a>
      <a href="#" class="list-group-item">강사진</a>
      <a href="#" class="list-group-item">콘서트</a>
     </div>
    </div>
    <div class="col-sm-2"><h4 style="text-align: center;">SNS</h4>
     <div class="list-group">
      <a href="#" class="list-group-item">페이스북</a>
      <a href="#" class="list-group-item">유튜브</a>
      <a href="#" class="list-group-item">네이버</a>
     </div>
    </div>
    <div class="col-sm-2"><h4 style="text-align: center;"><span class="glyphicon glyphicon-ok"></span>&nbsp;by David</h4></div>
   </div>
  </div>
 </footer>
 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script><!-- 부트스트랩의 동적기능을 이용하기 위해선 제이쿼리 플러그인이나 외부소스가 필요하다. 이 코드는 외부에서 제이쿼리 소스를 가져오는 코드이다. -->
 <script src="js/bootstrap.js"></script><!-- 부트스트랩의 동적기능을 활용하기위해 작성한 코드 -->
 </body>
</html>