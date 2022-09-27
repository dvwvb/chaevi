var site_host = location.protocol + "//" + location.host;

//아이디 특수문자 유효성
function chkTxt(str){
	var reg_txt = /^[a-z0-9_.-]{3,16}$/;
	if(!reg_txt.test(str)){
		  return false;
	}
	return true;
}

//아이디 영문/숫자조합
function chkTxt2(str){
	var reg_txt = /^.*(?=.{4,16})(?=.*[0-9])(?=.*[a-zA-Z]).*$/;
	if(!reg_txt.test(str)){
		  return false;
	}
	return true;
}

//ID 체크
function id_check(){
	var f = document.join_form;
	var email = f.email1.value+"@"+f.email2.value;
	var lang = f.lang.value;
	if(f.email1.value=="") {
		if(lang==1){//국문
		alert("이메일을 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your e-mail.");
		} else if(lang==4){//일문
		alert("이메일을 입력해 주세요.");
		}
		$("#email_check").empty();
		f.email1.focus();
		return false;
	} 
	
	if(!chkTxt($.trim(f.email1.value))){ 
		if(lang==1){//국문
		alert("한글,특수문자,영문(대문자)는 사용 할 수 없습니다.");
		} else if(lang==2){//영문
		alert("You cannot use special characters or uppercase letters.");
		} else if(lang==4){//일문
		alert("한글,특수문자,영문(대문자)는 사용 할 수 없습니다.");
		}    
		$("#email_check").empty();
		f.email1.focus();
		return false;
	} 

	if(f.email2.value=="") {
		if(lang==1){//국문
		alert("이메일을 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your e-mail.");
		} else if(lang==4){//일문
		alert("이메일을 입력해 주세요.");
		}
		$("#email_check").empty();
		f.email2.focus();
		return false;
	}

	if(!chkTxt($.trim(f.email2.value))){ 
		if(lang==1){//국문
		alert("한글,특수문자,영문(대문자)는 사용 할 수 없습니다.");
		} else if(lang==2){//영문
		alert("You cannot use special characters or uppercase letters.");
		} else if(lang==4){//일문
		alert("한글,특수문자,영문(대문자)는 사용 할 수 없습니다.");
		}    
		$("#email_check").empty();
		f.email2.focus();
		return false;
	}

	$.ajax({
		url : "/form/email_check.php",
		type: "get",
		data:	 {"email": email, "lang":lang}, 
		success:function(obj){ 
			$("#email_check").html(obj);
		}
	});
	
}

//차량번호 체크
function car_check(){
	var f = document.join_form;
	var lang = f.lang.value;
	if(f.car_number.value=="") {
		if(lang==1){//국문
		alert("차량번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your license plate number.");
		} else if(lang==4){//일문
		alert("차량번호를 입력해 주세요.");
		}
		f.car_number.focus();
	} else {
		$.ajax({
			url : "/form/car_check.php",
			type: "GET",
			data:	 {"car_number": f.car_number.value, "lang":lang}, 
			success:function(obj){ 
				$("#car_check").html(obj);
			}
		});
	}
}

//카드번호 체크
function utile_card_check(){
	var f = document.join_form;
	var lang = f.lang.value;
	if(f.card_number1.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number1.focus();
		return false;
	} 

	if(f.card_number2.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number2.focus();
		return false;
	} 

	if(f.card_number3.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number3.focus();
		return false;
	} 

	if(f.card_number4.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number4.focus();
		return false;
	} 

	var card_number = f.card_number1.value+f.card_number2.value+f.card_number3.value+f.card_number4.value

	if(card_number.length!=16){
		if(lang==1){//국문
		alert("카드번호를 16자리로 입력해 주세요.");
		} else if(lang==2){//영문
		alert("카드번호를 16자리로 입력해 주세요.");
		} else if(lang==4){//일문
		alert("카드번호를 16자리로 입력해 주세요.");
		}
		return false;
	}
	
	$.ajax({
		url : "/form/card_check.php",
		type: "GET",
		data:	 {"card_number": card_number, "lang":lang}, 
		success:function(obj){ 
			$("#card_check").html(obj);
		}
	});
	
}

//카드번호 체크-렉서스
function card_check_lexus(){
	var f = document.join_form;
	var lang = f.lang.value;
	if(f.card_number1.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number1.focus();
		return false;
	} 

	if(f.card_number2.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number2.focus();
		return false;
	} 

	if(f.card_number3.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number3.focus();
		return false;
	} 

	if(f.card_number4.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number4.focus();
		return false;
	} 

	var card_number = f.card_number1.value+f.card_number2.value+f.card_number3.value+f.card_number4.value
	
	if(card_number.length!=16){
		if(lang==1){//국문
		alert("카드번호를 16자리로 입력해 주세요.");
		} else if(lang==2){//영문
		alert("카드번호를 16자리로 입력해 주세요.");
		} else if(lang==4){//일문
		alert("카드번호를 16자리로 입력해 주세요.");
		}
		return false;
	}

	$.ajax({
		url : "/form/card_check_lexus.php",
		type: "GET",
		data:	 {"card_number": card_number, "lang":lang}, 
		success:function(obj){ 
			$("#card_check").html(obj);
		}
	});
	
}

//카드번호 체크-폭스바겐
function card_check_volk(){
	var f = document.join_form;
	var lang = f.lang.value;
	if(f.card_number1.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number1.focus();
		return false;
	} 

	if(f.card_number2.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number2.focus();
		return false;
	} 

	if(f.card_number3.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number3.focus();
		return false;
	} 

	if(f.card_number4.value=="") {
		if(lang==1){//국문
		alert("카드번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your credit/debit card number.");
		} else if(lang==4){//일문
		alert("카드번호를 입력해 주세요.");
		}
		f.card_number4.focus();
		return false;
	} 

	var card_number = f.card_number1.value+f.card_number2.value+f.card_number3.value+f.card_number4.value
	
	if(card_number.length!=16){
		if(lang==1){//국문
		alert("카드번호를 16자리로 입력해 주세요.");
		} else if(lang==2){//영문
		alert("카드번호를 16자리로 입력해 주세요.");
		} else if(lang==4){//일문
		alert("카드번호를 16자리로 입력해 주세요.");
		}
		return false;
	}

	$.ajax({
		url : "/form/card_check_volk.php",
		type: "GET",
		data:	 {"card_number": card_number, "lang":lang}, 
		success:function(obj){ 
			$("#card_check").html(obj);
		}
	});
	
}

//차대번호 체크
function cars_check(){
	var f = document.join_form;
	var lang = f.lang.value;
	if(f.cars_number.value=="") {
		if(lang==1){//국문
		alert("차대번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your VIN.");
		} else if(lang==4){//일문
		alert("차대번호를 입력해 주세요.");
		}
		f.cars_number.focus();
	} else {
		$.ajax({
			url : "/form/cars_check.php",
			type: "GET",
			data:	 {"cars_number": f.cars_number.value, "lang":lang}, 
			success:function(obj){ 
				$("#cars_check").html(obj);
			}
		});
	}
}

//차대번호 체크-아우디
function cars_check_audi(){
	var f = document.join_form;
	var lang = f.lang.value;
	
	if(f.cars_number.value=="") {
		if(lang==1){//국문
		alert("차대번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your VIN.");
		} else if(lang==4){//일문
		alert("차대번호를 입력해 주세요.");
		}
		f.cars_number.focus();
	} else {
		$.ajax({
			url : "/form/cars_check_audi.php",
			type: "GET",
			data:	 {"cars_number": f.cars_number.value, "lang":lang, "credit_pay": f.credit_pay.value}, 
			success:function(obj){ 
				$("#cars_check").html(obj);
			}
		});
	}
}

function cars_check_audi2(){
	var f = document.join_form;
	var lang = f.lang.value;
	
	if(f.cars_number2.value=="") {
		if(lang==1){//국문
		alert("차대번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your VIN.");
		} else if(lang==4){//일문
		alert("차대번호를 입력해 주세요.");
		}
		f.cars_number.focus();
	} else {
		$.ajax({
			url : "/form/cars_check_audi.php",
			type: "GET",
			data:	 { "cars_number": f.cars_number2.value, "lang":lang, "credit_pay": f.credit_pay.value}, 
			success:function(obj){ 
				$("#cars_check").html(obj);
			}
		});
	}
}

//차대번호 체크-렉서스
function cars_check_lexus(){
	var f = document.join_form;
	var lang = f.lang.value;
	if(f.cars_number.value=="") {
		if(lang==1){//국문
		alert("차대번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your VIN.");
		} else if(lang==4){//일문
		alert("차대번호를 입력해 주세요.");
		}
		f.cars_number.focus();
	} else {
		$.ajax({
			url : "/form/cars_check_lexus.php",
			type: "GET",
			data:	 {"cars_number": f.cars_number.value, "lang":lang}, 
			success:function(obj){ 
				$("#cars_check").html(obj);
			}
		});
	}
}

//차대번호 체크-폭스바겐
function cars_check_volk(){
	var f = document.join_form;
	var lang = f.lang.value;
	if(f.cars_number.value=="") {
		if(lang==1){//국문
		alert("차대번호를 입력해 주세요.");
		} else if(lang==2){//영문
		alert("Please enter your VIN.");
		} else if(lang==4){//일문
		alert("차대번호를 입력해 주세요.");
		}
		f.cars_number.focus();
	} else {
		$.ajax({
			url : "/form/cars_check_volk.php",
			type: "GET",
			data:	 {"cars_number": f.cars_number.value, "lang":lang}, 
			success:function(obj){ 
				$("#cars_check").html(obj);
			}
		});
	}
}

//email 체크
function email_check(){
	var f = document.join_form;
	if(f.email1.value=="") {
		alert("이메일을 입력해 주세요.");
		$("#email_check").empty();
		f.email1.focus();
	} else if(f.email2.value=="") {
		alert("이메일을 입력해 주세요.");
		$("#email_check").empty();
		f.email2.focus();
	} else {
		
		var email1 = f.email1.value;
		var email2 = f.email2.value;
		var emailb = email1+"@"+email2;

		$.ajax({
			url : site_host+"/_member/join_emailcheck.php",
			type: "get",
			data:	 {"email": emailb}, 
			success:function(obj){ 
				if(obj=="y"){
					var text = "<strong class='font-ok'>사용하실 수 있는 이메일입니다.</strong>";
					$("#email_check").html(text);
					$("#email_chk").val('y');
				} else {
					var text = "<strong class='font-caution'>이미 사용중인 이메일입니다.</strong>";
					$("#email_check").html(text);
					$("#email_chk").val('');
					f.email1.value = "";
					f.email2.value = "";
					f.email1.focus();

				}
			}
		});
	}
}

//비밀번호 유효성
function chkPwd(str,lang){

	var pw = str;
	var num = pw.search(/[0-9]/g);
	var eng = pw.search(/[a-z]/ig);
	var eng_small = pw.search(/[a-z]/g);
	var spe = pw.search(/[!@#$%^&*?-]/gi);
	var spe_no = pw.search(/[`~()_=+\|:;'",<.>{}/\[\]]/gi);


		if(pw.length < 8 || pw.length > 15){
			if(lang==1){//국문
			alert("비밀번호는 8~15자의 소문자 1자리,숫자 1자리, 허용 특수문자 조합으로 가능합니다.");
			} else if(lang==2){//영문
			alert("Password must be a combination of 8 to 15 letters and numbers.");
			} else if(lang==3){//중문
			alert("密码设定时, 请输入8~15位字符的英文字母与数字的组合。");
			} else if(lang==4){//일문
			alert("パスワードは半角英数字の組み合わせでご設定できます。");
			}
			return false;
		}
		if(pw.search(/₩s/) != -1){
			if(lang==1){//국문
			alert("비밀번호는 공백없이 입력해주세요.");
			} else if(lang==2){//영문
			alert("Please enter the password without any space.");
			} else if(lang==3){//중문
			alert("请输入不含有空格的密码。");
			} else if(lang==4){//일문
			alert("パスワードはスペースなしでご入力ください。");
			}
			return false;
		}

		if(spe_no==0 || spe_no>0){
			if(lang==1){//국문
			alert("허용 특수문자만 입력해 주세요.");
			} else if(lang==2){//영문
			alert("허용 특수문자만 입력해 주세요.");
			} else if(lang==3){//중문
			alert("허용 특수문자만 입력해 주세요.");
			} else if(lang==4){//일문
			alert("허용 특수문자만 입력해 주세요.");
			}
			return false;
		}

		if(num < 0 || eng_small < 0 || spe<0){
			if(lang==1){//국문
			alert("소문자 1자리,숫자 1자리, 허용 특수문자를 조합하여 입력해주세요.");
			} else if(lang==2){//영문
			alert("Please enter a combination of letters and numbers.");
			} else if(lang==3){//중문
			alert("请输入英文字母与数字的组合。");
			} else if(lang==4){//일문
			alert("半角英数字の組み合わせでご入力ください。");
			}
			return false;
		}

		
	 return true;

}

//우편번호
function openDaumPostcode() {
	new daum.Postcode({
		oncomplete: function(data) {
			$("input[name='zip_new']").val(data.zonecode);
			$("input[name='add1']").val(data.address);
			$("input[name='sigungu']").val(data.sigungu);
			$("input[name='sido']").val(data.sido);
			$("input[name='sigungu_code']").val(data.sigunguCode);
			$("input[name='dong_code']").val(data.bcode);
			$("input[name='dong']").val(data.bname);
			//$("input[name='add2']").focus();
		}
	}).open();
}

$(function(){

	$('input[name=passwd]').keyup(function(){
		var pw = this.value;
		var num = pw.search(/[0-9]/g);
		var eng = pw.search(/[a-z]/ig);
		var eng_small = pw.search(/[a-z]/g);
		var spe = pw.search(/[!@#$%^&*?-]/gi);
		var spe_no = pw.search(/[`~()_=+\|:;'",<.>{}/\[\]]/gi);
		var form=document.join_form;
		var lang = form.lang.value;

		if(pw.length >= 8){
			if( (pw.length < 8 || pw.length > 15) || (pw.search(/₩s/) != -1) || (spe_no==0 || spe_no>0) ||(num < 0 || eng_small < 0 || spe<0) ){
				if(lang==1){//국문
				$("#passwd_check").html(' <p class="join-sub-txt"><strong class="font-caution" id="passwd_check">패스워드가 정확하지 않습니다. 다시한번 입력해주세요. </strong></p>');
				} else if(lang==2){//영문
				$("#passwd_check").html(' <p class="join-sub-txt"><strong class="font-caution" id="passwd_check">Incorrect password. Please enter it again.</strong></p>');
				} else if(lang==3){//중문
				$("#passwd_check").html(' <p class="join-sub-txt"><strong class="font-caution" id="passwd_check">密码不正确。 请重新输入。</strong></p>');
				} else if(lang==4){//일문
				$("#passwd_check").html(' <p class="join-sub-txt"><strong class="font-caution" id="passwd_check">パスワードが間違っています。もう一度ご入力ください。</strong></p>');
				}
				return false;
			}else{
				$("#passwd_check").empty();
			}
		}
		return true;
	});

});