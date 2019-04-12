<?php
require('./database/call_database.php');
session_start();
$user = $_SESSION['id'];
/*
if(!isset($user)) {
    unset($_SESSION['id']);
    header("Location:/03project/site/login.php");
}*/
/* 수정해야할 부분 데이터베이스 설
$sql = "SELECT * FROM list order by id desc";
$result = mysqli_query($conn, $sql);

$exist = mysqli_num_rows($result);
$total_record = $exist;
*/

$no = $_GET['no'];

$page_size = 5;
$page_list_size = 5;

if(!isset($no) || $no < 0) {
    $no = 0;
}
$total_row = $total_record;

$total_page = floor(($total_row - 1) / $page_size);
$current_page = floor($no / $page_size);

/*
$sql = "SELECT * FROM board ORDER BY id DESC LIMIT $no, $page_size";
$result = mysqli_query($conn, $sql);

$start_page = (ceil($current_page / $page_list_size) * $page_list_size);
$end_page = $start_page + $page_list_size - 1;
if($total_page < $end_page) {
    $end_page = $total_page;
}*/
?>

<!DOCTYPE HTML>
<html>
  <head>
    <title>재밌는 자료</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/list.css">
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
          </button></li>
          <li><button type="button" class="btn btn-danger btn_badge_r navbar-btn" data-toggle="modal" data-target="#reply_modal" id="buttons">
            답글 <span class="badge badge-light">4</span>
          </button></li>
          <!--<li><a id="sign_btn" cßlass="btn btn-sm btn-outline-primary" href="signup.php">회원가입</a></li>
          <li><a class="btn btn-sm btn-outline-secondary" href="login.php">로그인</a></li>-->
          <li><a href="mypaeg.php"><span class="glyphicon glyphicon-user"></span> 내 계정</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
            <input type="text" id="myInput" onKeyup="finding()" placeholder="제목을 입력하세요...">

            <!-- 추가 하는 버튼 -->
            <button  class="btn btn-primary" style="float:right;">글 작성하기</button>

            <!-- board start -->
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">썸네일</th>
      <th scope="col">제목</th>
      <th scope="col">작성자</th>
      <th scope="col">등록일</th>
      <th scope="col">추천/반대</th>
      <th scope="col">조회수</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

                <table class="board" id="myTable">
                    <thead>
                        <tr>
                            <th scope="cols">번호</th>
                            <th scope="cols">제목</th>
                            <th scope="cols">내용</th>
                            <th scope="cols">지은이</th>
                            <th scope="cols">날짜</th>
                            <th scope="cols">조회수</th>
                        </tr>
                    </thead>
                    <?php if($total_record==0) : ?>
                    <h4 style="text-align:center;">글이 없습니다.. 게시물을 써보시겠어요?</h4>
                    <?php
                     else :
                        while($data = $result->fetch_array()) :
                    ?>
                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><a data-ajax="false" href="board_get.php?title=<?php echo $data['title'] ?>"><?php echo $data['title'] ?></a></td>
                        <td><?php echo $data['content'] ?></td>
                        <td><?php echo $data['nickname'] ?></td>
                        <td><?php echo $data['wdate'] ?></td>
                        <td><?php echo $data['view'] ?></td>
                    </tr>
                <?php endwhile;
                            endif;
                    $conn->close();?>
                </table>
            <div class="box_btn">
                <table class="table">
                    <?php
                    if($start_page >= $page_list_size) :
                        $prev_list = ($start_page - 1) * page_size; ?>
                    <th><button class="btn"><a href="/finalwebapp/board.php?no=<?php echo $prev_list; ?>">&#8592;</a></button></th>
                    <?php endif?>
                    <?php for($i=$start_page; $i <= $end_page; $i++) :
                        $page = $page_size*$i;
                        $page_num = $i+1; ?>
                    <th><button class="btn"><a href="/finalwebapp/board.php?no=<?php echo $page ?>">
                        <?php echo $page_num;?>
                        </a></button></th>
                    <?php endfor?>
                    <?php if($total_page > end_page) :
                    $next_list = ($end_page + 1) * $page_size;?>
                    <th><button class="btn">
                        <a href="/finalwebapp/board.php?no=<?php echo $next_list; ?>">&#8594;</a></button></th>
                    <?php endif ?>
                </table>
            </div>
          </body>
          <script src="./js/list.js"></script>
          </html>
