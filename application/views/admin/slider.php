<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="page-title">Sliders <span class="text-warning">(upload 1920px width, height 1200px)</span></h4>
            </div>

        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('slider/addpost'); ?>" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Slider 1</label>
                        <input type="file" name="image[]" id="image" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>First Slider Text</label>
                        <input type="text" name="text[]" id="text1" class="form-control" placeholder="Enter Slider Text" name="lastName" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Slider 2</label>
                        <input type="file" name="image[]" id="image" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Second Slider Text</label>
                        <input type="text" name="text[]" id="text2" class="form-control" placeholder="Enter Slider Text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Slider 3</label>
                        <input type="file" name="image[]" id="image" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Third Slider Text</label>
                        <input type="text" name="text[]" id="text" class="form-control" placeholder="Enter Slider Text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Upload Slider 4</label>
                        <input type="file" name="image[]" id="image" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Fourth Slider Text</label>
                        <input type="text" name="text[]" id="text" class="form-control" placeholder="Enter Slider Text">
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

                    'image[]': {
                        validators: {

                            regexp: {
                                regexp: "(.*?)\.(png|jpeg|jpg|gif)$",
                                message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
                            }
                        }
                    },
                    'text[]': {
                        validators: {

                            regexp: {
                                regexp: /^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
                                message: 'Name wont allow <> [] = % '
                            }
                        }
                    }
                }
            }
        })

    });
</script>