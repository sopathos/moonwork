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
  if($("#m_id").val() == ""){
    alert("아이디를 입력하세요");
    $("#m_id").focus();
    return false;
  }
  if($("#m_pw").val() == ""){
    alert("비밀번호를 입력하세요");
    $("#m_pw").focus();
    return false;
  }
  if($("#m_name").val() == ""){
    alert("이름를 입력하세요");
    $("#m_name").focus();
    return false;
  }
  if($("#m_email").val() == ""){
    alert("이메일를 입력하세요");
    $("#m_email").focus();
    return false;
  }
  if($("#m_pw").val() != $("#m_pw2").val()){
    alert("비밀번호 확인하세요");
    $("#m_pw").val("");
    $("#m_pw2").val("");
    $("#m_pw").focus();
    return false;
  }
  $("#sign_in").submit();
}