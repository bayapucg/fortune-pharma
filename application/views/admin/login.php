<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Login</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrapValidator.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/style.css">
		
    </head>
<body class="bg">

        <div class="main-wrapper">
			<div class="account-page">
				<div class="container">
					<h3 class="account-title" style="color:#fff;">Login</h3>
					<div class="account-box">
					
						<div class="account-wrapper" >
							
							<form id="defaultForm" name="defaultForm" method="post" class="" action="<?php echo base_url('admin/post'); ?>">
								<div class="form-group ">
									<label class="control-label"> Email Address</label>
									<input type="text" name="email" id="email" class="form-control floating"  placeholder="Enter Email Address">
								</div>
								<div class="form-group ">
									<label class="control-label">Password</label>
								<input type="password" name="password" id="password" class="form-control floating" placeholder="Enter Password">
								</div>
								<div class="form-group text-center">
									<button type="submit" class="btn btn-primary btn-block account-btn" style="color:#fff;">Login</button>
								</div>
								<div class="text-center">
									<a href="<?php echo base_url('admin/forgotpassword'); ?>">Forgot password</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
		<div class="sidebar-overlay" data-reff="#sidebar"></div>
	
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/bootstrap.min.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/bootstrapValidator.js"></script>

        <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/app.js"></script>
    </body>
	<?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
   <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
   <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<script>
$(document).ready(function() {
	
    $('#defaultForm').bootstrapValidator({
//     
        fields: {
            email: {
               validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            },
            password: {
               validators: {
					notEmpty: {
						message: 'Password is required'
					},
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Password wont allow <> [] = % '
					}
				}
            }
        }
    });
});
</script>
</html>