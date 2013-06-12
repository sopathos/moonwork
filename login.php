<div data-role="page" id="login">
  <!-- 헤더 -->
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>로그인</h1>
  </div>
  
  <!-- 내용 -->
  <div data-role="content">
    <form name="loginForm" method="post" action="login_chk.php">
      <table border="0" style="width:100%">
        <tr>
          <td>ID</td><td><input type="text" name="m_id"></input></td>
        </tr>
        <tr>
          <td>PW</td><td><input type="password" name="m_pw"></input></td>
        </tr>
        <tr>
          <td colspan="2"><input type="button" value="로그인" style="width:100%" data-theme="a" onclick="javascript:login_chk()"></td>
        </tr>
      </table>
    </form>
    <table border="0" width="100%">
      <tr>
        <td>회원이 아니신가요?</td>
        <td width="50%"><a href="#register" data-rel="dialog" style="color:black;">회원가입</a></td>
      </tr>
      <tr>
        <td>아이디를 잊으셨나요?</td>
        <td width="50%"><a href="#" style="color:black;">아이디 찾기</a></td>
      <tr>
        <td>비밀번호를 잊으셨나요?</td>
        <td width="50%"><a href="#" style="color:black;">비밀번호 찾기</a></td>
    </table>
  </div>
</div>
