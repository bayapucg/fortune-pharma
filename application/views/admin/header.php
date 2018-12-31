<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>
        <?php echo isset($logo_details['title'])?$logo_details['title']:'Pracha Multi Templete'; ?>
    </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrapValidator.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/plugins/morris/morris.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/admin/css/search-slider.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/vendor/admin/js/bootstrapValidator.js"></script>

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="<?php echo base_url('dashboard'); ?>" class="logo">
                    <?php if(isset($logo_details['image']) && $logo_details['image']!=''){ ?>
                    <img style="height:50px;width:auto;margin-top:-10px;" src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="<?php echo isset($logo_details['org_image'])?$logo_details['org_image']:''; ?>">
                    <?php }else{ ?>
                    <img style="height:50px;width:auto;margin-top:-10px;" class="img-responsive" src="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" alt="Logo">
                    <?php } ?>
                </a>
            </div>
            <div class="page-title-box pull-left">
            </div>
            <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <ul class="nav navbar-nav navbar-right user-menu pull-right">

                <li class="dropdown">
                    <a href="profile.html" class="dropdown-toggle user-link" data-toggle="dropdown" title="Admin">
                        <span class="user-img">
                            <?php if(isset($details['profile_pic']) && $details['profile_pic']!=''){ ?>
                            <img class="img-circle" src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>" width="40" alt="<?php echo isset($details['profile_pic'])?$details['profile_pic']:''; ?>">

                            <?php }else{ ?>
                            <img class="img-circle" src="<?php echo base_url(); ?>assets/vendor/admin/img/user.jpg" width="40" alt="Admin">
                            <?php } ?>
                            <span class="status online"></span></span>
                        <span>
                            <?php echo isset($details['name'])?$details['name']:''; ?></span>
                        <i class="caret"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('profile'); ?>">My Profile</a></li>
                        <li><a href="<?php echo base_url('profile/edit'); ?>">Edit Profile</a></li>
                        <li><a href="<?php echo base_url('profile/changepassword'); ?>">Change Password</a></li>
                        <li><a href="<?php echo base_url('dashboard/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div>

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
        <!-- =============================================== -->
        <!--view modals-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">

                    <div style="padding:10px">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 style="pull-left" class="modal-title">Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-danger alert-dismissible" id="errormsg" style="display:none;"></div>
                        <div class="row">
                            <div id="content1" class="col-xs-12 col-xl-12 form-group">
                                Are you sure ?
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6  col-sm-6 ">
                                <button type="button" aria-label="Close" data-dismiss="modal" class="btn  blueBtn pull-left">Cancel</button>
                            </div>
                            <div class="col-md-6 col-sm-6  col-sm-6 ">
                                <a href="?id=value" class="btn  blueBtn popid pull-right" style="text-decoration:none;"> <span aria-hidden="true">Ok</span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
            function adminstatus(id) {
                if (id == 1) {
                    $('#content1').html('Are you sure you want to Deactivate?');

                }
                if (id == 0) {
                    $('#content1').html('Are you sure you want to activate?');
                }
            }

            function admindedeletemsg(id) {
                $('#content1').html('Are you sure you want to delete?');

            }
        </script>