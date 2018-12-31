

             <div class="page-wrapper">
                <div class="content container-fluid">
					<div class="row">
						<div class="col-sm-8">
							<h4 class="page-title">Edit Profile</h4>
						</div>
					</div>
					<form id="defaultForm" name="defaultForm" method="post" action="<?php echo base_url('profile/editpost'); ?>" enctype="multipart/form-data">
						<div class="card-box">
							<h3 class="card-title">Basic Information</h3>
							<div class="row">
								<div class="col-md-12">
									<div class="profile-img-wrap">
									<?php if($details['profile_pic']==''){ ?>
											<img class="inline-block" src="<?php echo base_url(); ?>assets/vendor/admin/img/user.jpg" alt="">
											<?php }else{ ?>
											<img class="inline-block" src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>" alt="<?php echo isset($details['profile_pic'])?$details['profile_pic']:''; ?>">
											<?php } ?>
										
									</div>
									<div class="profile-basic">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group form-focus">
													<label class="control-label">Name</label>
													<input type="text" name="name" id="name" class="form-control floating" value="<?php echo isset($details['name'])?$details['name']:''; ?>"  />
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group form-focus" >
													
													<input style="padding-top:15px;" type="file" name="image" id="image" class="form-control floating" />
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group form-focus">
													<label class="control-label">Email</label>
													<input type="text" name="email" id="email" class="form-control floating" value="<?php echo isset($details['email'])?$details['email']:''; ?>"  />
												</div>
											</div>
											<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Mobile Number</label>
										<input type="text" name="mobile" id="mobile" class="form-control floating"value="<?php echo isset($details['mobile'])?$details['mobile']:''; ?>"  />
									</div>
								</div>
											<div class="col-md-6">
												<div class="form-group form-focus select-focus">
													<label class="control-label">Gender</label>
													<select  name="gender" id="gender" class="select form-control floating">
														<option value="">Select Gender</option>
														<option value="Male" <?php if($details['gender']=='Male'){ echo "selected";} ?>>Male</option>
														<option value="Female" <?php if($details['gender']=='Female'){ echo "selected";} ?>>Female</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-box">
							<h3 class="card-title">Contact Information</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Current Address</label>
										<input type="text" name="address" id="address" class="form-control floating" value="<?php echo isset($details['address'])?$details['address']:''; ?>" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group form-focus">
										<label class="control-label">Permanent Address</label>
										<input type="text" name="paddress" id="paddress" class="form-control floating" value="<?php echo isset($details['paddress'])?$details['paddress']:''; ?>" />
									</div>
								</div>
								
							</div>
						
						</div>
						
						<div class="text-center m-t-20">
							<button class="btn btn-primary btn-lg" type="submit">Save &amp; update</button>
						</div>
					</form>
				</div>
				
			</div>

<script>
    $(document).ready(function() {

        $('#defaultForm').bootstrapValidator({
            //     
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Name wont allow <> [] = % '
                        }
                    }
                },
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

                gender: {
                    validators: {
                        notEmpty: {
                            message: 'Gender is required'
                        }
                    }
                },
                image: {
                    validators: {
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|Png)$",
                            message: 'Uploaded file is not a valid. Only png,jpeg,jpg,gif files are allowed'
                        }
                    }
                },
                address: {
                    validators: {
                        notEmpty: {
                            message: 'Current Address is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Current Address wont allow <> [] = % '
                        }
                    }
                },
                paddress: {
                    validators: {
                        notEmpty: {
                            message: 'Permanent Address is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Permanent Address wont allow <> [] = % '
                        }
                    }
                },
                mobile: {
                    validators: {
                        notEmpty: {
                            message: 'Mobile Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,14}$/,
                            message: 'Mobile Number must be 10 to 14 digits'
                        }

                    }
                },

                password: {
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                            message: 'Password wont allow <> [] = % '
                        }
                    }
                }
            }
        });

    });
</script>