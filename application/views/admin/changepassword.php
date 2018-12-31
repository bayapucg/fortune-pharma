<div class="page-wrapper">
    <div class="content container-fluid bg-white">

        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('profile/changepasswordpost'); ?>" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-8">
                    <h4 class="text-primary">Change Password </h4>
                    <div class="form-group">
                        <label>Old Password</label>
                        <input type="password" name="oldpassword" id="oldpassword" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password">
                    </div>
                </div>
            </div>
            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Change</button>
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

                oldpassword: {
                    validators: {
                        notEmpty: {
                            message: 'Old Password is required'
                        },
                        stringLength: {
                            min: 6,
                            message: 'Old Password  must be at least 6 characters. '
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
                            message: 'Old Password wont allow <>[]'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        stringLength: {
                            min: 6,
                            message: 'Password  must be at least 6 characters. '
                        },
                        regexp: {
                            regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
                            message: 'Password wont allow <>[]'
                        }
                    }
                },
                confirmpassword: {
                    validators: {
                        notEmpty: {
                            message: 'Confirm Password is required'
                        },
                        identical: {
                            field: 'password',
                            message: 'Password and Confirm Password do not match'
                        }
                    }
                },
                image: {
                    validators: {
                        notEmpty: {
                            message: 'Image is required'
                        },
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|Png)$",
                            message: 'Uploaded file is not a valid. Only png,jpeg,jpg,gif files are allowed'
                        }
                    }
                }
            }
        })

    });
</script>