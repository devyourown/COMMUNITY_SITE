# COMMUNITY_SITE
This is my school project

<h1>I'm gonna make </h1>
<ul>
  <li>LOGIN_PROCESS</li>
  <li>CHATTING</li>
  <li>board</li>
  <li>Push_notice</li>
</ul>

reference site : (chat) https://www.webslesson.info/2018/07/live-chat-system-in-php-using-ajax-jquery.html

This will be changed file:
<table class="table table-dark">
        <tr>들어와있는 친구</tr>
        <thead>
          <tr>
            <th scope="col">상태</th>
            <th scope="col">닉네임</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="badge badge-success">온라인</span></td>
            <td>효준</td>
          </tr>
          <tr>
            <td><span class="badge badge-danger">오프라인</span></td>
            <td>수현</td>
          </tr>
          <tr>
            <td><span class="badge badge-warning">대기중</span></td>
            <td>은정</td>
        </tbody>
      </table>
      
      스크립트 추가
      <script>
$(document).ready(function(){
  fetch_user();

  function fetch_user() {
    $.ajax({
      url:"fetch_user.php",
      method:"POST",
      success:function(data){
        $('#user_details').html(data);
      }
    })
  }
})
</script>
      
