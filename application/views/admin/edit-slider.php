<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="page-title">Edit Sliders <span class="text-warning">(upload 1920px width, height 1200px)</span></h4>
            </div>

        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('slider/editpost'); ?>" enctype="multipart/form-data">
       <input type="hidden" id="s_id" name="s_id" value="<?php echo isset($edit_slider['s_id'])?$edit_slider['s_id']:''; ?>">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Slider 1</label>
                        <input type="file" name="image_slider1" id="image_slider1" class="form-control" value="<?php echo isset($edit_slider['image_slider1'])?$edit_slider['image_slider1']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Slider Text</label>
                        <input type="text" name="slider1" id="slider1" class="form-control" placeholder="Enter Slider Text" name="lastName" value="<?php echo isset($edit_slider['slider1'])?$edit_slider['slider1']:''; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Slider 2</label>
                        <input type="file" name="image_slider2" id="image_slider2" class="form-control" value="<?php echo isset($edit_slider['image_slider2'])?$edit_slider['image_slider2']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Second Slider Text</label>
                        <input type="text" name="slider2" id="slider2" class="form-control" placeholder="Enter Slider Text" value="<?php echo isset($edit_slider['slider2'])?$edit_slider['slider2']:''; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Slider 3</label>
                        <input type="file" name="image_slider3" id="image_slider3" class="form-control" value="<?php echo isset($edit_slider['image_slider3'])?$edit_slider['image_slider3']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Third Slider Text</label>
                        <input type="text" name="slider3" id="slider3" class="form-control" placeholder="Enter Slider Text" value="<?php echo isset($edit_slider['slider3'])?$edit_slider['slider3']:''; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Slider 4</label>
                        <input type="file" name="image_slider4" id="image_slider4" class="form-control" value="<?php echo isset($edit_slider['image_slider4'])?$edit_slider['image_slider4']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Fourth Slider Text</label>
                        <input type="text" name="slider4" id="slider4" class="form-control" placeholder="Enter Slider Text" value="<?php echo isset($edit_slider['slider4'])?$edit_slider['slider4']:''; ?>">
                    </div>
                </div>
            </div>

            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save</button>
                <a href="<?php echo base_url('slider/search_sliders'); ?>" type="button" class="btn btn-info">Search Sliders</a>
            </div>
        </form>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm').bootstrapValidator({

            fields: {

                image_slider1: {
                        validators: {

                            regexp: {
                                regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                                message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                            }
                        }
                    },
					image_slider2: {
                        validators: {

                            regexp: {
                                regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                                message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                            }
                        }
                    },
					image_slider3: {
                        validators: {

                            regexp: {
                                regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                                message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                            }
                        }
                    },
					image_slider4: {
                        validators: {

                            regexp: {
                                regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                                message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                            }
                        }
                    },
					slider1: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
				slider2: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },	
				slider3: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },	
				slider4: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                }		
                
                
            }
        })

    });
</script>
