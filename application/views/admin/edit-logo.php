<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Edit Logo</h4>
            </div>
        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('navigation/editpost'); ?>" enctype="multipart/form-data">
<input type="hidden" id="id" name="id" value="<?php echo isset($edit_logo['id'])?$edit_logo['id']:''; ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Logo</label>
                        <input type="file" name="image" id="image" class="form-control" value="<?php echo isset($edit_logo['image'])?$edit_logo['image']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Favicon</label>
                        <input type="file" name="favicon" id="favicon" class="form-control" value="<?php echo isset($edit_logo['favicon'])?$edit_logo['favicon']:''; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="<?php echo isset($edit_logo['title'])?$edit_logo['title']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Keywords</label>
                        <input type="text" name="keywords" id="keywords" class="form-control" value="<?php echo isset($edit_logo['keywords'])?$edit_logo['keywords']:''; ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" id="description" class="form-control" value="<?php echo isset($edit_logo['description'])?$edit_logo['description']:''; ?>">
                    </div>
                </div>
            </div>
            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save</button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm').bootstrapValidator({

            fields: {

                image: {
                    validators: {
                        
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                            message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                        }
                    }
                },
                favicon: {
                    validators: {
                        
                        regexp: {
                            regexp: "(.*?)\.(png|jpeg|jpg|gif|ico)$",
                            message: 'Uploaded file is not a valid. Only png,jpg,jpeg,ico,gif files are allowed'
                        }
                    }
                },
                title: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
                keywords: {
                    validators: {
                        notEmpty: {
                            message: 'Keywords is required'
                        }
                    }
                },
                description: {
                    validators: {
                        notEmpty: {
                            message: 'Description is required'
                        }
                    }
                }
            }
        })

    });
</script>