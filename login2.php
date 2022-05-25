<?php require_once('private/initialize.php');

$page = 'Login';
$page_title = 'ToNote | Login';

$errors = [];
$email = '';
$password = '';


if (is_post_request()) { 

  $login = $_POST ?? '';
  if ($login) {

    $email = $login['email'] ?? '';
    $password = $login['password'] ?? ''; 

    // Validations
    if (is_blank($email)) {
      $errors[] = "Email cannot be blank.";
    }
    if (is_blank($password)) {
      $errors[] = "Password cannot be blank.";
    }


    // if there were no errors, try to login
    if (empty($errors)) {
      $admin = Admin::find_by_email($email);

      
      // test if admin found and password is correct
      if ($admin != false && $admin->verify_password($password)) {
        // Logged out Customer and riders before login in Admin
        $session->logout(true); //for admin logout
        $session->logout('', true); //for Riders logout

        // Mark admin as logged in
        $session->login($admin);
        
        //for logging actions in the log file
        log_action('Admin Login', "{$admin->full_name()} Logged in.", "login");
        redirect_to(url_for('dashboard/'));

      } else {
        // email not found or password does not match
        $errors[] = "Log in not successful.";
      }
      // end
      
    }
  }
} else {
  $admin = new Admin;
}

?>

 <!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="PIXINVENT">
    <title><?php echo $page_title; ?></title>
    <link rel="apple-touch-icon" href="<?php echo url_for('app-assets/images/ico/apple-icon-120.html') ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo url_for('app-assets/images/ico/favicon.ico') ?>">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500&family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/vendors/css/vendors.min.css') ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/bootstrap-extended.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/colors.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/components.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/themes/dark-layout.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/themes/bordered-layout.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/themes/semi-dark-layout.min.css') ?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/core/menu/menu-types/vertical-menu.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/plugins/forms/form-validation.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('app-assets/css/pages/authentication.css') ?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo url_for('assets/css/style.css') ?>">
    <!-- END: Custom CSS-->

    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script> -->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->

		    <div id="app" class="app-content content ">
		      <div class="content-overlay"></div>
		      <div class="header-navbar-shadow"></div>
		      <div class="content-wrapper">
		        <div class="content-header row">
		        </div>
		        <div class="content-body"><div class="auth-wrapper auth-basic px-2">
			  <div class="auth-inner my-2">
			    <!-- Login basic -->
			    <div class="card mb-0">
			      <div class="card-body">
			        <a href="#" class="brand-logo">
			          <img src="<?php echo url_for('app-assets/images/logo/logo-dark.png') ?>" width="150">
			        </a>

			        <!-- <h4 class="card-title mb-1">Welcome to Vuexy! 👋</h4> -->
			        <!-- <p class="card-text mb-2">{{ message }}</p> -->
			         <?php if ($errors) { ?>
                          <?php echo display_errors($errors); ?> 
                      <?php } ?>

			        <form class="auth-login-form mt-2" id="myform" method="post">
			          <section class="first">
				          <div class="mb-1">
				            <label for="login-email" class="form-label">Email</label>
				            <input
				              type="text"
				              class="form-control email"
				              id="login-email"
				              name="email"
				              placeholder="john@example.com"
				              aria-describedby="login-email"
				              tabindex="1"
				              autofocus
				              value="<?php echo $email ?>"
				            />
				            <div class="email-error text-danger"></div>
				          </div>
				          <div>
				          	<button  class="btn btn-primary w-100" id="next">Next</button>
				          </div>
			          </section>

			          <section class="second d-none" >
			          	  <div class="text-center h6 py-1 showEmail"></div>
				          <div class="mb-1">
				            <div class="d-flex justify-content-between">
				              <label class="form-label" for="login-password">Password</label>
				              <a href="auth-forgot-password-basic.html">
				                <small>Forgot Password?</small>
				              </a>
				            </div>
				            <div class="input-group input-group-merge form-password-toggle">
				              <input
				                type="password"
				                class="form-control form-control-merge password"
				                id="login-password"
				                name="password"
				                tabindex="2"
				                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
				                aria-describedby="login-password"
				                v-model="form.password"

				              />
				              <div class="password-error text-danger"></div>
				              <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>

				              
				            </div>
				          </div>
				          <small></small>

				          <div class="mb-1">
				            <div class="form-check">
				              <input class="form-check-input" type="checkbox" id="remember-me" tabindex="3" />
				              <label class="form-check-label" for="remember-me"> Remember Me </label>
				            </div>
				          </div>

				          <button type="submit"  class="btn btn-primary w-100" id="submit">Sign in</button>
				          <div class="text-center pt-1"><a href="#" class=" diffUser">Sign in as a different user</a></div>
			          </section>
			        </form>

			        <p class="text-center mt-2">
			          <span>New on our platform?</span>
			          <a href="auth-register-basic.html">
			            <span>Create an account</span>
			          </a>
			        </p>

			        <div class="divider my-2">
			          <div class="divider-text">or</div>
			        </div>

			        <div class="auth-footer-btn d-flex justify-content-center">
			          <a href="#" class="">
			            Login as a Notary
			          </a>
			         
			        </div>
			      </div>
			    </div>
			    <!-- /Login basic -->
			  </div>
			</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo url_for('app-assets/vendors/js/vendors.min.js"></script') ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo url_for('app-assets/vendors/js/forms/validation/jquery.validate.min.js') ?>"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/vuelidate@0.7.7/lib/index.min.js"></script> -->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo url_for('app-assets/js/core/app-menu.min.js') ?>"></script>
    <script src="<?php echo url_for('app-assets/js/core/app.min.js') ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo url_for('app-assets/js/scripts/pages/auth-login.js') ?>"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })

      var email = $(".email");
      var password = $(".password");
      var emailError = $(".email-error");
      var passwordError = $(".password-error");
      var isCurrent = 0;

      function toggle(isCurrent){
      	if (isCurrent == 1) {
      		$(".first").addClass('d-none')
      		$(".second").removeClass('d-none')
      	}else{
      		$(".first").removeClass('d-none')
      		$(".second").addClass('d-none')
      	}
      }

      $(document).on('input', '.email', function(e) {
      	emailError.html('')
      })

      $(document).on('input', '.password', function(e) {
      	passwordError.html('')
      })

      $(document).on('click', '#next', function(e) {
      	e.preventDefault()
	      if (email.val() != '') {
	      	$(".showEmail").html(email.val())
	      	var isCurrent = 1;
      		toggle(isCurrent)

	      }else{
	      	emailError.html("This field is required")
	      }
      })
       $(document).on('click', '.diffUser', function(e) {
       		var isCurrent = 0;
      		toggle(isCurrent)
       })
      


        

      $(document).on('click', '#submit', function(e) {
      	// e.preventDefault()
	      if (password.val() == '') {
	      	passwordError.html("This field is required")
	      	
	      }else{
	      	$("#myform").submit();

	      }
      })


      
        
    </script>
  </body>
  <!-- END: Body-->

</html>