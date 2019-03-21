<?php
function print_head() {
  #head부분을 출력해주는 함수
  echo <<<_HEAD_
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>오늘의 인기 자료</title>
    <link rel="stylesheet" href="./css/index.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">

  </head>
_HEAD_;

}

function print_header() {
  #header부분을 출력해주는 함수
  echo <<<_HTML_
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="index.html">커뮤니티</a>
  <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>-->

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">추천 자료<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="waiting_list.html">대기 자료</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          창작 작품
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">소설</a>
          <a class="dropdown-item" href="#">웹툰</a>
          <!-- <div class="dropdown-divider"></div> -->
          <a class="dropdown-item" href="#">그림</a>
        </div>
      </li>
    </ul>
    <button type="button" class="btn btn-primary btn_badge_m" data-toggle="modal" data-target="#message_modal">
      메시지 <span class="badge badge-light">4</span>
    </button>
    <button type="button" class="btn btn-danger btn_badge_r" data-toggle="modal" data-target="#reply_modal">
      답글 <span class="badge badge-light">4</span>
    </button>
    <div class="d-flex justify-content-end align-items-center" id="user">
      <h6>안녕하세요. 이효인님</h6>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a id="sign_btn" class="btn btn-sm btn-outline-primary" href="signup.html">회원가입</a>
      <a class="btn btn-sm btn-outline-secondary" href="login.html">로그인</a>
    </div>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="자료 이름, 작성자" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">검색하기</button>
    </form>
  </div>
  </nav>
  </header>
_HTML_;
}
?>
<!DOCTYPE HTML>
<html lang="ko">
<?php
print_head();
?>
<body>
  <?php
print_header();
?>
</body>
