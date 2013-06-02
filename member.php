<!-- 회원정보 --> 
<div data-role="page" id="member">
  <!-- 헤더 -->
  <div data-role="header" data-position="fixed" data-theme="a">
    <h1>회원정보</h1>
  </div>
  
  <!-- 내용 -->
  <div data-role="content">
    <table border="0" width="100%">
      <tr>
        <td colspan="2"><input type="button" value="주문 내역 확인" onclick="myOrder();"/></td>
      </tr>
      <tr>
        <td colspan="2"><input type="button" value="로그아웃" onclick="logout();"/></td>
      </tr>
      <tr>
        <td>회원번호</td>
        <td><? echo "$_SESSION[user_no]" ?></td>
      </tr>
      <tr>
        <td>ID</td>
        <td><? echo "$_SESSION[user_id]" ?></td>
      </tr>
      <tr>
        <td>이름</td>
        <td><? echo "$_SESSION[user_name]" ?></td>
      </tr>
      <tr>
        <td>이메일</td>
        <td><? echo "$_SESSION[user_email]" ?></td>
      </tr>
      <tr>
        <td>전화번호</td>
        <td><? echo "$_SESSION[user_phone]" ?></td>
      </tr>
      <tr>
        <td>전공</td>
        <td><? echo "$_SESSION[user_major]" ?></td>
      </tr>
    </table>
  </div>
</div>