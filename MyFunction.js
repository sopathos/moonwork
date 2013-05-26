$(document).ready(function() {
	$("table.order button.add").click(function() {
		var table = $(this).parents("table.order");
		// Get a new row based on the prototype row

		var row = table.find(".row").clone();
		row.attr("class", "")
		table.find("tbody").append(row);
	});

	$("table.order button.remove").live("click", function() {  			  
	  $(this).parents("tr").remove();
	});
});

function signIn(){
  var chk = document.signForm;
  if(chk.m_id.value == ""){
    alert("아이디를 입력해주세요");
    chk.m_id.focus();
    return false;
  }
  if(chk.m_pw.value == ""){
    alert("비밀번호를 입력해주세요");
    chk.m_pw.focus();
    return false;
  }
  if(chk.m_pw2.value == ""){
    alert("비밀번호를 확인해주세요");
    chk.m_pw2.focus();
    return false;
  }
  if(chk.m_name.value == ""){
    alert("이름을 입력해주세요");
    chk.m_name.focus();
    return false;
  }
  if(chk.m_email.value == ""){
    alert("이메일을 입력해주세요");
    chk.m_email.focus();
    return false;
  }
  if(chk.m_pw.value != chk.m_pw2.value){
    alert("비밀번호를 확인해주세요");
    chk.m_pw.focus();
    return false;
  }
  chk.submit();
}

function login_chk()
{
  var chk = document.loginForm;
  if(chk.m_id.value == ""){
    alert("아이디를 입력해주세요");
    chk.m_id.focus();
    return false;
  }
  if(chk.m_pw.value == ""){
    alert("비밀번호를 입력해주세요");
    chk.m_pw.focus();
    return false;
  }
  chk.submit();
}

function logout()
{
  location.href="logout.php";
}