$.pnotify.defaults.styling = "bootstrap";function centerdiv (el){    el.css("position","fixed");    el.css("top", ($(window).height() / 2) - ((el.outerHeight() / 2)+100));    el.css("left", ($(window).width() / 2) - (el.outerWidth() / 2));	return el;}$(document).ready(function(){ centerdiv( $('.not-wrapper') );});$(document.documentElement).keyup(function (event) {  // handle cursor keys  if (event.keyCode == 27) {   $(".not-wrapper").css("display","none");	}  });$( ".login-mini" ).click(function(e) { centerdiv( $('.not-wrapper') );$(".not-wrapper").css("display","none");	$(".not-wrapper").css("display","block");$('.not-wrapper').load('./assets/template/sub/login.html');$( ".not-wrapper" ).append( '<div class="close-wrapper"><a href="#"><img src="./assets/css/img/cross.png"></a></div>' );  centerdiv( $('.not-wrapper') );	$(document).attr('title', 'Login');	$('#login-form input').focus();	});		$( "#register-mini" ).click(function(e) {$(".not-wrapper").css("display","none");	$(".not-wrapper").css("display","block");	e.preventDefault();$('.not-wrapper').load('./assets/template/register.coz'); centerdiv( $('.not-wrapper') );$( ".not-wrapper" ).append( '<div class="close-wrapper"><a href="#"><img src="./assets/css/img/cross.png"></a></div>' );	location.hash = 'register';	$(document).attr('title', 'Register');	});	$("body").on("click", ".user-mini", function (e) {$(".user-opt").css("display","block");});$(".user-opt").on('mouseleave',function(){        $(".user-opt").css("display","none");    })	$("body").on("click", ".login-submit", function (e) {	e.preventDefault();			var datastring = $("#login-form").serialize();	datastring= datastring + "&return="+ ret;			$.ajax({		type: "POST",		url: "./ajax/do-login.php",        data: datastring,        dataType: "json"        }) .always(function(data) { 				if(data.s==1){					$.pnotify({					type: 'success',					styling: 'bootstrap',					title: 'Success',					text: 'You have successfully logged in..'					});  					if (data.r!=''){				window.location = baseurl+data.r+".php";	}				location.hash = 'home';				$(document).attr('title', 'Home');				$('.content').load('./assets/template/sub/home.html');								$(".box-layout").css("display","none");					$(".tp-nav").css("display","none");					$(".loader").css("display","block");				$(".layout").css("opacity","0.4");									window.setTimeout(function(){ window.location = 'home.php'; }, 3000);											}else{												$.pnotify({					styling: 'bootstrap',							type: 'error',					title: 'Failed!',					text: data.e	});						}		}); });$("body").on("click", ".s-register", function (e)  {	$(".not-wrapper").css("display","none");		$(".not-wrapper").css("display","block");	e.preventDefault();	$('.not-wrapper').load('./assets/template/sub/s-register.html'); centerdiv( $('.not-wrapper') );	$( ".not-wrapper" ).append( '<div class="close-wrapper"><a href="#"><img src="./assets/css/img/cross.png"></a></div>' );	$(document).attr('title', 'Regsiter Now!');	location.hash = 'self-registrations';	 centerdiv( $('.not-wrapper') );	  centerdiv( $('.not-wrapper') );	});$("body").on("click", ".g-register", function (e) {	$(".not-wrapper").css("display","none");		$(".not-wrapper").css("display","block");	e.preventDefault();	location.hash = 'family-registrations';	$('.not-wrapper').load('./assets/template/sub/g-register.html'); centerdiv( $('.not-wrapper') );	$( ".not-wrapper" ).append( '<div class="close-wrapper"><a href="#"><img src="./assets/css/img/cross.png"></a></div>' );	$(document).attr('title', 'Regsiter Now!');});$(function () {    'use strict';    // Load countries then initialize plugin:    $.ajax({        url: 'content/countries.txt',        dataType: 'json'    }).done(function (source) {        var countriesArray = $.map(source, function (value, key) { return { value: value, data: key }; }),            countries = $.map(source, function (value) { return value; });        // Setup jQuery ajax mock:        $.mockjax({            url: '*',            responseTime: 2000,            response: function (settings) {                var query = settings.data.query,                    queryLowerCase = query.toLowerCase(),                    re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi'),                    suggestions = $.grep(countriesArray, function (country) {                         // return country.value.toLowerCase().indexOf(queryLowerCase) === 0;                        return re.test(country.value);                    }),                    response = {                        query: query,                        suggestions: suggestions                    };                this.responseText = JSON.stringify(response);            }        });        // Initialize ajax autocomplete:        $('#autocomplete-ajax').autocomplete({            // serviceUrl: '/autosuggest/service/url',            lookup: countriesArray,            lookupFilter: function(suggestion, originalQuery, queryLowerCase) {                var re = new RegExp('\\b' + $.Autocomplete.utils.escapeRegExChars(queryLowerCase), 'gi');                return re.test(suggestion.value);            },            onSelect: function(suggestion) {                $('#selction-ajax').html('You selected: ' + suggestion.value + ', ' + suggestion.data);            },            onHint: function (hint) {                $('#autocomplete-ajax-x').val(hint);            },            onInvalidateSelection: function() {                $('#selction-ajax').html('You selected: none');            }        });        // Initialize autocomplete with local lookup:        $('#autocomplete').autocomplete({            lookup: countriesArray,            onSelect: function (suggestion) {                $('#selection').html('You selected: ' + suggestion.value + ', ' + suggestion.data);            }        });                // Initialize autocomplete with custom appendTo:        $('#autocomplete-custom-append').autocomplete({            lookup: countriesArray,            appendTo: '#suggestions-container'        });        // Initialize autocomplete with custom appendTo:        $('#autocomplete-dynamic').autocomplete({            lookup: countriesArray        });            });});