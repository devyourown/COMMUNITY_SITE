##이번 프로젝트는 웹 커뮤니티를 개발하는 것이 목적이다.

이에 필요한 VIEW:
  로그인 화면, 메인 화면, 추천된 자료 게시판(추천수 30이상),
  대기 자료 게시판, 창작 자료 게시판, 남녀 게시판, 검색된 자료,
  회원가입 화면, 프로필 화면....

화면 각각에 필요한 CONTROLLER:
  로그인 화면: 입력된 값을 데이터베이스와 대조, 인증된 경우 로그인 후 메인화면으로 이동
  메인 화면: 각종 게시판 베스트 자료들을 보여준다
  대기 자료, 추천된 게시판 : 대기 자료에서 일정 범위의 추천수가 넘어간다면 추천된 게시판
                        으로 이동시킨다. 리스트 번호 구현
  게시판 올리기:

필요한 기능들:
  채팅 기능, 답글 알림 기능, 레벨 기능

필요한 model:
  회원 정보, 회원 섬네일(파일 저장), 자료 정보(글이름, 글정보, 작성자), 자료 이미지(파일저장), 자료 동영상(파일저장)

회원 정보:
  email, password, nickname, birthday, name, thumbnail
