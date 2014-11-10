<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
	
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Cryptomen.com &rsaquo; Log In</title>
	<link rel='stylesheet' id='buttons-css'  href='wp-includes/css/buttons.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='wp-includes/css/dashicons.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='login-css'  href='wp-admin/css/login.min.css' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var strong_password_error_text = {"text":"Sorry, but you must enter a strong password."};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/better-wp-security/modules/free/strong-passwords/js/strong-passwords.js'></script>
<meta name='robots' content='noindex,follow' />
	</head>
	<body class="login login-action-login wp-core-ui  locale-en-us">
	<div id="login">
		<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Cryptomen.com</a></h1>
	<div id="login_error"></div>

<form name="loginform" id="loginform" action="wp-login.php.html" method="post">
	<p>
		<label for="user_login">Username<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p>
		<label title="If you don't have Google Authenticator enabled for your WordPress account, leave this field empty.">Google Authenticator code<span id="google-auth-info"></span><br />
		<input type="text" name="googleotp" id="user_email" class="input" value="" size="20" style="ime-mode: inactive;" /></label>
	</p>
	<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="http://cryptomen.com/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="wp-login.php%3Faction=lostpassword.html" title="Password Lost and Found">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="cryptofund-october-2014/index.html" title="Are you lost?">&larr; Back to Cryptomen.com</a></p>
	
	</div>

	
	
<script type="text/javascript">
	try{
		document.getElementById('user_email').setAttribute('autocomplete','off');
	} catch(e){}
</script>
	<div class="clear"></div>
	</body>
	</html>
	