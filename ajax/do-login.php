<?phpinclude('../includes/functions.php');echo do_login(request_var('username',''),request_var('password',''),request_var('remember',''),request_var('return',''));?>