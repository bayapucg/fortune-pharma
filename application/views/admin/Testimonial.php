<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="page-title">Team <span class="text-warning">( image Should be300px width and height 300px )</span></h4>
            </div>

        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('testimonial/addpost'); ?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <h4 class="text-primary">Team </h4>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" name="lastName">
                    </div>
                    <div class="form-group">
                        <label>Designation</label>
                        <input type="text" name="designation" id="designation" class="form-control" placeholder="Enter Designation">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph" id="paragraph" class="form-control" rows="5" placeholder="Enter Description..."></textarea>
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

                paragraph: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        }
                    }
                },
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Name is required'
                        }
                    }
                },
                designation: {
                    validators: {
                        notEmpty: {
                            message: 'Designation is required'
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