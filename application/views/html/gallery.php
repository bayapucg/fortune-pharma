<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo isset($logo_details['title'])?$logo_details['title']:'Pracha Multi'; ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="<?php echo isset($logo_details['title'])?$logo_details['title']:'keywords'; ?>">
    <meta content="" name="<?php echo isset($logo_details['title'])?$logo_details['title']:'description'; ?>">
    <!-- Favicons -->
    <?php if($logo_details['favicon']==''){ ?>
    <link href="<?php echo base_url(); ?>assets/vendor/img/favicon.png" rel="icon">
    <?php }else{ ?>
    <link href="<?php echo base_url('assets/logo/'.$logo_details['favicon']); ?>" rel="icon">
    <?php } ?>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url(); ?>assets/vendor/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url(); ?>assets/vendor/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">
</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header" class="">
        <div class="container-fluid">

            <div id="logo" class="pull-left logo-header">

                <?php if($logo_details['image']==''){ ?>
                <img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo" height="70px">
                <?php }else{ ?>
                <img src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="logo" height="70px">
                <?php } ?>

            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="<?php echo base_url('home'); ?>">Home</a></li>
                    <li><a href="<?php echo base_url('home/aboutus'); ?>">About Us</a></li>
                    <li><a href="<?php echo base_url('home/services'); ?>">Services</a></li>
					<li><a href="<?php echo base_url('home/gallery'); ?>">Gallery</a></li>
                    <li><a href="<?php echo base_url('home/instrument'); ?>">Instruments</a></li>
                     <li><a href="<?php echo base_url('home/contactus'); ?>">Contactus</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <form action="<?php echo base_url('preview/okpost'); ?>" method="post">
        <?php if(isset($slider_details) && count($slider_details)>0){ ?>
        <section id="intro">
            <div class="intro-container">
                <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                    <ol class="carousel-indicators"></ol>

                    <div class="carousel-inner" role="listbox">
                        <?php $cnt=1;foreach($slider_details as $list){ ?>
                        <input type="hidden" name="slider_id[]" id="slider_id" value="<?php echo isset($list['s_id'])?$list['s_id']:''; ?>">
                        <?php if($cnt==1){ ?>
                        <div class="carousel-item active">
                            <div class="carousel-background"><img src="<?php echo base_url('assets/slider/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>"></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>
                                        <?php echo isset($list['text'])?$list['text']:''; ?>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <?php }else{ ?>
                        <div class="carousel-item">
                            <div class="carousel-background"><img src="<?php echo base_url('assets/slider/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>"></div>
                            <div class="carousel-container">
                                <div class="carousel-content">
                                    <h2>
                                        <?php echo isset($list['text'])?$list['text']:''; ?>
                                    </h2>

                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <?php $cnt++;} ?>
                        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
            </div>
        </section><!-- #intro -->
        <?php } ?>

        <main id="main">
         

        
            
           

            <!--==========================
      Call To Action Section
    ============================-->
              

             <?php if(isset($gallery_details) && count($gallery_details)>0){ ?>

                <section id="portfolio" class="section-bg">
                    <div class="container">

                        <header class="section-header">
                            <h3 class="section-title">Our Gallery</h3>
                        </header>


                        <div class="row portfolio-container">
                            <?php foreach($gallery_details as $list){ ?>
                            <input type="hidden" name="gallery_id[]" id="gallery_id" value="<?php echo isset($list['g_id'])?$list['g_id']:''; ?>">

                            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="<?php echo base_url('assets/gallery/'.$list['image']); ?>" class="img-fluid" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>">
                                        <a href="<?php echo base_url('assets/gallery/'.$list['image']); ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                    </figure>

                                    <div class="portfolio-info">
                                        <h4><a href="#">
                                                <?php echo isset($list['text'])?$list['text']:''; ?></a></h4>


                                    </div>
                                </div>
                            </div>
                            <?php } ?>


                        </div>

                    </div>
                </section><!-- #portfolio -->

                <?php } ?>

               
               
        </main>

        <!--==========================
>>>>>>> 8602cd27977922d1578be8ef47090c730593da92
    Footer
  ============================-->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4  footer-info">
                            <div id="logo" class="pull-left logo-header">
                               <?php if($logo_details['image']==''){ ?>
                <img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo" height="70px">
                <?php }else{ ?>
                <img src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="logo" height="70px">
                <?php } ?>

                                <p>
                                    <?php echo isset($contactus_details['address'])?$contactus_details['address']:''; ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4 footer-links">
                            <h4>Useful Links</h4>
                            <ul>
                                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('home'); ?>">Home</a></li>
                                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('home/aboutus'); ?>">About us</a></li>
                                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('home/services'); ?>">Services</a></li>
                                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('home/gallery'); ?>">Gallery</a></li>
                                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('home/instrument'); ?>">Instruments</a></li>
                                <li><i class="ion-ios-arrow-right"></i> <a href="<?php echo base_url('home/contactus'); ?>">Contactus</a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                                <strong>Phone:</strong>
                                <?php echo isset($contactus_details['phone'])?$contactus_details['phone']:''; ?><br>
                                <strong>Email:</strong>
                                <?php echo isset($contactus_details['email'])?$contactus_details['email']:''; ?><br>
                            </p>

                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright">
                            &copy; Copyright <strong>
                                <?php echo isset($logo_details['title'])?$logo_details['title']:'Pracha Multi'; ?></strong>. All Rights Reserved
                        </div>
                      
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-success" style="margin-top:40px;">Preview Ok</button>
                    </div>
                </div>
            </div>
        </footer><!-- #footer -->
    </form>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#defaultForm').bootstrapValidator({

                fields: {

                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Name is required'
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
                    subject: {
                        validators: {
                            notEmpty: {
                                message: 'Subject is required'
                            }
                        }
                    },
                    message: {
                        validators: {
                            notEmpty: {
                                message: 'Subject is required'
                            }
                        }
                    }
                }
            })

        });
    </script>
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="<?php echo base_url(); ?>assets/vendor/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/superfish/hoverIntent.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/superfish/superfish.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url(); ?>assets/vendor/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url(); ?>assets/vendor/js/main.js"></script>


</body>

</html>