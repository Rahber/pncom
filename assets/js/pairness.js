$.pnotify.defaults.styling = "bootstrap";$(document.documentElement).keyup(function (event) {  // handle cursor keys  if (event.keyCode == 27) {   $(".login").css("display","none");	}  });$( "#login-mini" ).click(function(e) {$(".login").css("display","none");	$(".login").css("display","block");$('.login').load('./assets/template/sub/login.html');	$(document).attr('title', 'Login');	$('#login-form input').focus();	});		$( "#register-mini" ).click(function(e) {$(".login").css("display","none");	$(".login").css("display","block");	e.preventDefault();$('.login').load('./assets/template/register.coz');	location.hash = 'register';	$(document).attr('title', 'Register');	});$("body").on("click", ".login-submit", function (e) {	e.preventDefault();		var datastring = $("#login-form").serialize();	datastring= datastring + "&return="+ ret;			$.ajax({		type: "POST",		url: "./ajax/do-login.php",        data: datastring,        dataType: "json"        }) .always(function(data) { 				if(data.s==1){					$.pnotify({					type: 'success',					styling: 'bootstrap',					title: 'Success',					text: 'You have successfully logged in..'					});  					if (data.r!=''){				window.location = baseurl+data.r+".php";	}				location.hash = 'home';				$(document).attr('title', 'Home');				$('.content').load('./assets/template/sub/home.html');				$(".box-layout").css("display","none");					$(".tp-nav").css("display","none");					$(".loader").css("display","block");				$(".layout").css("opacity","0.4");									window.setTimeout(function(){ window.location = 'home.php'; }, 3000);											}else{												$.pnotify({					styling: 'bootstrap',							type: 'error',					title: 'Failed!',					text: data.e	});						}		}); });$("body").on("click", ".s-register", function (e)  {	$(".login").css("display","none");		$(".login").css("display","block");	e.preventDefault();	$('.login').load('./assets/template/sub/s-register.html');	$(document).attr('title', 'Regsiter Now!');	location.hash = 'self-registrations';	});$("body").on("click", ".g-register", function (e) {	$(".login").css("display","none");		$(".login").css("display","block");	e.preventDefault();	location.hash = 'family-registrations';	$('.login').load('./assets/template/sub/g-register.html');	$(document).attr('title', 'Regsiter Now!');});