<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Contact Us Form Information</h4>
            </div>

        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('contactus/post'); ?>" enctype="multipart/form-data">

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-primary">Contact us form Email</h4>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email </label>
                        <input type="text" class="form-control" placeholder="Enter Email id" id="contact_email" name="contact_email" value="<?php echo isset($details['contact_email'])?$details['contact_email']:''; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-primary">Contact us </h4>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone" name="phone" value="<?php echo isset($details['phone'])?$details['phone']:''; ?>">
                    </div>
                </div>
				 <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone_number" name="phone_number" value="<?php echo isset($details['phone_number'])?$details['phone_number']:''; ?>">
                    </div>
                </div>
				 <div class="col-md-6">
                    <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter Phone Number" id="phone_no" name="phone_no" value="<?php echo isset($details['phone_no'])?$details['phone_no']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Enter Email" id="email" name="email" value="<?php echo isset($details['email'])?$details['email']:''; ?>">
                    </div>
                </div>
				 <div class="col-md-6">
                    <div class="form-group">
                        <label>fortunepharmalabs</label>
                        <input type="text" class="form-control" placeholder="Enter fortunepharmalabs" id="forturn_lab" name="forturn_lab" value="<?php echo isset($details['forturn_lab'])?$details['forturn_lab']:''; ?>">
                    </div>
                </div>
				
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" rows="5" placeholder="Enter Address" id="address" name="address"><?php echo isset($details['address'])?$details['address']:''; ?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-primary">Social Connect</h4>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Twitter Link</label>
                        <input type="text" class="form-control" placeholder="Enter Twitter Link" id="twitter_link" name="twitter_link" value="<?php echo isset($details['twitter_link'])?$details['twitter_link']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>facebook Link</label>
                        <input type="text" class="form-control" placeholder="Enter facebook Link" id="facebook_link" name="facebook_link" value="<?php echo isset($details['facebook_link'])?$details['facebook_link']:''; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>LinkedIn Link</label>
                        <input type="text" class="form-control" placeholder="Enter LinkedIn Link" id="linkedIn_link" name="linkedIn_link" value="<?php echo isset($details['linkedIn_link'])?$details['linkedIn_link']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Google+ Link</label>
                        <input type="text" class="form-control" placeholder="Enter Google+ Link" id="google_plus" name="google_plus" value="<?php echo isset($details['google_plus'])?$details['google_plus']:''; ?>">
                    </div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Instagram Link</label>
                        <input type="text" class="form-control" placeholder="Enter Instagram Link" id="instagram_link" name="instagram_link" value="<?php echo isset($details['instagram_link'])?$details['instagram_link']:''; ?>">
                    </div>
                </div>
            </div>-->
            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save</button>
            </div>
        </form>

    </div>
</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm').bootstrapValidator({

            fields: {

                contact_email: {
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
                phone: {
                    validators: {
                        notEmpty: {
                            message: 'Phone Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,14}$/,
                            message: 'Phone Number must be 10 to 14 digits'
                        }

                    }
                },
				phone_number: {
                    validators: {
                        notEmpty: {
                            message: 'Phone Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,14}$/,
                            message: 'Phone Number must be 10 to 14 digits'
                        }

                    }
                },
				phone_no: {
                    validators: {
                        notEmpty: {
                            message: 'Phone Number is required'
                        },
                        regexp: {
                            regexp: /^[0-9]{10,14}$/,
                            message: 'Phone Number must be 10 to 14 digits'
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
				forturn_lab: {
                validators: {
                    notEmpty: {
                        message: 'Forturn Lab is required'
                    },
                    regexp: {
                        regexp: /^(www\.)?fortunepharmalabs\.com(\/.*)?$/,
                        message: 'Forturn Lab format valid. For  www.fortunepharmalabs.com'
                    }

                }
                },
				
                address: {
                    validators: {
                        notEmpty: {
                            message: 'Address is required'
                        }
                    }
                },
				twitter_link: {
                validators: {
                    notEmpty: {
                        message: 'Twitter link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?twitter\.com(\/.*)?$/,
                        message: 'Twitter link format valid. For  https://www.twitter.com'
                    }

                }
                },
				facebook_link: {
                validators: {
                    notEmpty: {
                        message: 'Facebook link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?facebook\.com(\/.*)?$/,
                        message: 'Facebook link format valid. For  https://www.facebook.com'
                    }

                }
                },
				instagram_link: {
                validators: {
                    notEmpty: {
                        message: 'Instagram link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?instagram\.com(\/.*)?$/,
                        message: 'Instagram link format valid. For  https://www.instagram.com'
                    }

                }
                },
                google_plus: {
                validators: {
                    notEmpty: {
                        message: 'Google+ link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?google\.com(\/.*)?$/,
                        message: 'Google+ link format valid. For  https://www.google.com'
                    }

                }
                },
                linkedIn_link: {
                validators: {
                    notEmpty: {
                        message: 'LinkedIn link is required'
                    },
                    regexp: {
                        regexp: /^(http(s)?(:\/\/))?(www\.)?linkedin\.com(\/.*)?$/,
                        message: 'LinkedIn link  format valid. For  https://www.linkedin.com'
                    }
                                  
                }
                }
                
                
            }
        })

    });
</script>