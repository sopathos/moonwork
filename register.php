<div data-role="page" id="register">
  <!-- 헤더 -->
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>회원가입</h1>
  </div>
  
  <!-- 내용 -->
  <div data-role="content">
    <form name="signForm" method="post" action="registerProc.php">
      <table border="0" width="100%">
        <tr>
          <td><b>*아이디</b></td><td><input type="text" id="m_id" name="m_id"></td>
        </tr>
        <tr>
          <td><b>*비밀번호</b></td>
          <td><input type="password" id="m_pw" name="m_pw"></td>
        </tr>
        <tr>
          <td><b>*비밀번호 확인</b></td>
          <td><input type="password" id="m_pw2" name="m_pw2"></td>
        </tr>
        <tr>
          <td><b>*이름</b></td>
          <td><input type="text" id="m_name" name="m_name"></td>
        </tr>
        <tr>
          <td><b>*이메일</b></td>
          <td><input type="email" id="m_email" name="m_email"></td>
        </tr>
        <tr>
          <td>전화번호</td>
          <td><input type="text" id="m_phone" name="m_phone"></td>
        </tr>
        <tr>
          <td>전공</td>
          <td><input type="text" id="m_major" name="m_major"></td>
        </tr>
        <tr>
          <td colspan="2">
          <input type="button" value="회원가입" data-theme="a" onclick="javascript:signIn()"></td>
      </table>
    </form>
  </div>
</div>
