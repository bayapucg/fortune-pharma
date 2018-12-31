<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="page-title">About Us <span class="text-warning">( image Should be 350px width and height 205px )</span></h4>
            </div>

        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('aboutus/addpost'); ?>" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea class="form-control" rows="5" name="parahraph" id="parahraph"><?php echo isset($detail['parahraph'])?$detail['parahraph']:''; ?></textarea>
                    </div>
                </div>

            </div>

            <div class="row">


                <div class="col-md-4">

                    <h4 class="text-primary">Equities</h4>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="image1" id="image1" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea class="form-control" name="paragraph1" id="paragraph1" rows="5"><?php echo isset($detail['paragraph1'])?$detail['paragraph1']:''; ?></textarea>
                    </div>
                </div>
                <div class="col-md-4">

                    <h4 class="text-primary">Multi-asset</h4>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="image2" id="image2" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph2" id="paragraph2" class="form-control" rows="5"><?php echo isset($detail['paragraph2'])?$detail['paragraph2']:''; ?></textarea>
                    </div>
                </div>
                <div class="col-md-4">

                    <h4 class="text-primary">Fixed income</h4>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="image3" id="image3" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph3" id="paragraph3" class="form-control" rows="5"><?php echo isset($detail['paragraph3'])?$detail['paragraph3']:''; ?></textarea>
                    </div>
                </div>

            </div>


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

                parahraph: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        }
                    }
                },
                paragraph1: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        }
                    }
                },
                paragraph2: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        }
                    }
                },
                paragraph3: {
                    validators: {

                        notEmpty: {
                            message: 'Paragraph is required'
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
                image1: {
                    validators: {

                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|Png)$",
                            message: 'Uploaded file is not a valid. Only png,jpeg,jpg,gif files are allowed'
                        }
                    }
                },
                image2: {
                    validators: {

                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|Png)$",
                            message: 'Uploaded file is not a valid. Only png,jpeg,jpg,gif files are allowed'
                        }
                    }
                },
                image3: {
                    validators: {

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