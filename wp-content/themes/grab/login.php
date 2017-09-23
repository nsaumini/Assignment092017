<?php

/*
 * Template Name: Grab Login
 */

global $user_ID;

if (! $user_ID) {
    // User not logged in
    if ($_POST) {
        $username = esc_sql($_REQUEST['username']);
        $password = esc_sql($_REQUEST['password']);
        $remember = isset($_REQUEST['rememberme']) ? esc_sql($_REQUEST['rememberme']) : 0;

        if ($remember) {
            $remember = 'true';
        } else {
            $remember = 'false';
        }

        $login_data = array();
        $login_data['user_login']    = $username;
        $login_data['user_password'] = $password;
        $login_data['remember']      = $remember;
        $user_verify = wp_signon($login_data, true);

        if (is_wp_error($user_verify)) {
            echo '<span class="error">Invalid username or password. Please try again!</span>';
            exit();
        } else {
            // Redirect
            echo '<script type="text/javascript">window.location="'. get_home_url() .'"</script>';
            exit();
        }
    } else {
        get_header();
    }
?>
	<div class="login-content">
        <div class="container">
            <div class="row">
                <!-- To hold validation results -->
    			<div id="result" class="col-md-6 col-md-offset-3"></div>
			</div>

        	<div class="row">
        		<div class="col-md-6 col-md-offset-3">
            		<form id="loginForm" action="" method="post">

            			<div class="row">
                			<div class="col-xs-12 col-sm-12 col-md-12 form-group">
                				<input type="text" name="username" class="text form-control" value="" placeholder="Username">
                			</div>
            			</div>

						<div class="row">
                			<div class="col-xs-12 col-sm-12 col-md-12 form-group">
                				<input type="password" name="password" class="text form-control" value="" placeholder="Password">
                			</div>
            			</div>

						<div class="row">
                			<div class="col-xs-12 col-sm-12 col-md-12 form-group">
                				<label class="checkbox-inline"><input name="rememberme" type="checkbox" value="1">Remember me</label>
                			</div>
            			</div>

            			<div class="row">
                			<div class="col-xs-12 col-sm-12 col-md-12 form-group">
                				<input type="submit" id="submitbtn" class="btn btn-green form-control" name="submit" value="Login">
                			</div>
            			</div>
            		</form>
        		</div>
    		</div>

    		<script type="text/javascript">
    		jQuery(document).ready(function($) {
                $('#submitbtn').click(function() {
                	var input_data = $('#loginForm').serialize();

                	$.ajax({
                		type: "POST",
                		url:  "<?php echo "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>",
                		data: input_data,
                		success: function(msg) {
                			$('<div>').html(msg).appendTo('div#result').hide().fadeIn('slow');
            			}
                	});
                	return false;
                });
    		});
            </script>
		</div>
	</div>
<?php
get_footer();

} else {
    // User already logged in
    echo '<script type="text/javascript">window.location="'. get_home_url() .'"</script>';
    exit();
}
?>
