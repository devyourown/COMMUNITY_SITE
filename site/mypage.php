<!-- refrence: https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_temp_social&stacked=h -->

<!DOCTYPE html>
<html lang="ko">
<head>
  <title>커뮤니티</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/index.css">

</head>

<body>

  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">커뮤니티</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="mypage.php">Home</a></li>
        <li><a href="list.php">자료모음</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><button type="button" class="btn btn-primary btn_badge_m navbar-btn" data-toggle="modal" data-target="#message_modal" id="buttons">
          메시지 <span class="badge badge-light">4</span>
        </button>
        </li>
        <li><button type="button" class="btn btn-danger btn_badge_r navbar-btn" data-toggle="modal" data-target="#reply_modal" id="buttons">
          답글 <span class="badge badge-light">4</span>
        </button></li>
        <!--<li><a id="sign_btn" class="btn btn-sm btn-outline-primary" href="signup.php">회원가입</a></li>
        <li><a class="btn btn-sm btn-outline-secondary" href="login.php">로그인</a></li>-->
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> 내 계정</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container text-center">
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <p><a href="#">My Profile</a></p>
        <img src="./img/a.jpg" class="img-circle" height="65" width="65" alt="Avatar">
      </div>
      <div class="well">
        <p><a href="#">관심있는 것들</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">W3Schools</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>안녕!</strong></p>
        사람들이 당신을 알아볼수 있게 만드세요!
      </div>
      <p><a href="#">Instagram</a></p>
      <p><a href="#">Facebook</a></p>
      <p><a href="#">Twitter</a></p>
    </div>
    <div class="col-sm-7">

      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">기분 상태 : 좋음</p>
              <button type="button" class="btn btn-default btn-sm">
                <span class="glyphicon glyphicon-thumbs-up"></span> Like
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="well">
        <label for="comment" style="float:left;">댓글:</label>
        <textarea class="form-control" rows="3" id="comment"></textarea>
        &nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary navbar_btn" style="float:right;">달기</button>
      </div>
        <div class="col-sm-3">
          <div class="well">
           <p>John</p>
           <img src="./img/rowan.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Bo</p>
           <img src="./img/a.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Jane</p>
           <img src="./img/kyle.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p>Anja</p>
           <img src="./img/a.jpg" class="img-circle" height="55" width="55" alt="Avatar">
          </div>
        </div>
        <div class="col-sm-9">
          <div class="well">
            <p>Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>다가오는 행사 : </p>
        <img src="./img/redlambo.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>2015년 8월 21일</p>
        <button class="btn btn-primary">Info</button>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<!-- 모달 추가-->

<!--메시지 모달 -->
<div class="modal fade" id="message_modal" tabindex="-1" role="dialog" aria-labelledby="modal_main" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="modal_main">채팅</h5>
      <input type="text" class="search_bar" placeholder="채팅기록검색">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <a href="#chat_monitor" class="list-group-item list-group-item-action" data-toggle="collapse">
      <div class="media">
        <img id="user_photo" class="img-thumbnail" src="./img/rowan.jpg" alt="Generic placeholder image" width="50" height="50">
        <div class="media-body">
          <h5 class="mt-0" id="user_name">Olivia Hassen</h5>
          <span class="badge badge-danger" id="info_span">1</span><p id="chat_content">Hi, baby It's me</p>
          <span class="user_date">8월 15일</span>
        </div>
      </div>
      </a>

      <!--메시지 전송 모달 -->
      <div class="collapse multi-collapse" id="chat_monitor">
        <div class="outgoing_msg">
            <div class="sent_msg">
                <p>Apollo University, Delhi, India Test</p>
                <span class="time_date"> 11:01 AM    |    Yesterday</span>
            </div>
        </div>
        <div class="incoming_msg">
          <div class="incoming_msg_img"> <img src="./img/rowan.jpg" alt="sunil" class="img-circle" height="40" width="40"> </div>
          <div class="received_msg">
              <div class="received_withd_msg">
                <p>I love you so much</p>
                <span class="time_date"> 11:01 AM    |    yesterday</span>
              </div>
          </div>
        </div>
      <div class="outgoing_msg">
          <div class="sent_msg">
              <p>Apollo University, Delhi, India Test</p>
              <span class="time_date"> 11:01 AM    |    Today</span>
          </div>
      </div>
      <div class="incoming_msg">
        <div class="incoming_msg_img"> <img src="./img/rowan.jpg" alt="sunil" class="img-circle" height="40" width="40"> </div>
        <div class="received_msg">
            <div class="received_withd_msg">
                <p>We work directly with our designers and suppliers,
                      and sell direct to you, which means quality, exclusive
                    products, at a price anyone can afford.</p>
                <span class="time_date"> 11:01 AM    |    Today</span>
            </div>
        </div>
      </div>
        <div class="type_msg">
          <div class="input_msg_write">
            <input type="text" class="write_msg" placeholder="Type a message" />
            <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
      </div>

    </div>
  </div>
</div>
</div>

<!-- 답글 알림 모달 -->
<div class="modal fade" id="reply_modal" tabindex="-2" role="dialog" aria-labelledby="reply_modal_main" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="reply_modal_main">답글 알림</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <a href="#board.html" class="list-group-item list-group-item-action" data-toggle="collapse">
        <div class="media">
          <img id="reply_thumnails" class="img-thumbnail" src="./img/a.jpg" alt="reply_modal_thumbnail" width="50" height="50">
          <div class="media-body">
            <h5 class="mt-0" id="article-name">이지은씨 인스타그램</h5>
            <span class="badge badge-danger" id="info_span">1</span><p id="reply_content">Hi, baby It's me</p>
            <span class="reply_date">8월 15일</span>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
</div>


</body>
