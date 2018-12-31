<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Forgot password</title>
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
					<h3 class="account-title" style="color:#fff;">Forgot password</h3>
					<div class="account-box">
						<div class="account-logo bg-primary py-5" style="margin-bottom:0px">
								<a href="">	
							
								<?php if(isset($logo_details['image']) && $logo_details['image']!=''){ ?>
									<img class="" src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>"  alt="<?php echo isset($logo_details['org_image'])?$logo_details['org_image']:''; ?>">
								<?php }else{ ?>
									<img class="" src="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png"  alt="Logo">
								<?php } ?>
								</a>
							</div>
						<div class="account-wrapper">
						
							<form id="forgtpassword" method="post" action="<?php echo base_url('admin/forgotpost'); ?>">
								<div class="form-group ">
									<label class="control-label">Email</label>
									<input class="form-control floating" name="email" id="email" type="text" placeholder="Enter your email">
								</div>
								<div class="form-group text-center">
									<button class="btn btn-primary btn-block account-btn" type="submit">Reset Password</button>
								</div>
								<div class="text-center">
									<a href="<?php echo base_url('admin'); ?>">Back to Login</a>
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
	<script type="text/javascript">
$(document).ready(function() {
    $('#forgtpassword').bootstrapValidator({
        
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
            }
            }
        })
     
});

</script>
