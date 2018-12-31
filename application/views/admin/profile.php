<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h4 class="page-title">My Profile</h4>
            </div>
        </div>
        <div class="card-box">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#">
                                    <?php if($details['profile_pic']==''){ ?>
                                    <img class="avatar" src="assets/img/user.jpg" alt="">
                                    <?php }else{ ?>
                                    <img class="avatar" src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>" alt="<?php echo isset($details['profile_pic'])?$details['profile_pic']:''; ?>">
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 m-b-0">
                                            <?php echo isset($details['name'])?$details['name']:''; ?>
                                        </h3>
                                        <small class="text-muted">Admin</small>
                                       <!-- <div class="staff-id">Employee ID :
                                            <?php echo isset($details['id'])?$details['id']:''; ?>
                                        </div>-->

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <span class="title">Phone:</span>
                                            <span class="text"><a href="#">
                                                    <?php echo isset($details['mobile'])?$details['mobile']:''; ?></a></span>
                                        </li>
                                        <li>
                                            <span class="title">Email:</span>
                                            <span class="text"><a href="#">
                                                    <?php echo isset($details['email'])?$details['email']:''; ?></a></span>
                                        </li>

                                        <li>
                                            <span class="title">Address:</span>
                                            <span class="text">
                                                <?php echo isset($details['address'])?$details['address']:''; ?>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="title">Gender:</span>
                                            <span class="text">
                                                <?php echo isset($details['gender'])?$details['gender']:''; ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="card-box">

                    <div class="col-md-6">
                        <h3 class="card-title">Basic Information</h3>
                        <div class="experience-box">
                            <ul class="experience-list">
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#" class="name"> Name </a>
                                            <div>
                                                <?php echo isset($details['name'])?$details['name']:''; ?>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#" class="name">Email </a>
                                            <div>
                                                <?php echo isset($details['email'])?$details['email']:''; ?>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#" class="name">Mobile</a>
                                            <div>
                                                <?php echo isset($details['mobile'])?$details['mobile']:''; ?>
                                            </div>

                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="card-title">Basic Information</h3>
                        <div class="experience-box">
                            <ul class="experience-list">

                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#" class="name">Designation </a>
                                            <div>Admin</div>

                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#" class="name">Current Address</a>
                                            <div>
                                                <?php echo isset($details['address'])?$details['address']:''; ?>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="experience-user">
                                        <div class="before-circle"></div>
                                    </div>
                                    <div class="experience-content">
                                        <div class="timeline-content">
                                            <a href="#" class="name">Permanent Address</a>
                                            <div>
                                                <?php echo isset($details['paddress'])?$details['paddress']:''; ?>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix">&nbsp;</div>
                </div>

            </div>
        </div>
    </div>

</div>