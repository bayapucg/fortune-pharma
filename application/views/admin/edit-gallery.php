<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="page-title">Edit Gallery <span class="text-warning">( image Should be 400px width and height 300px )</span></h4>
            </div>
        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('gallery/editpost'); ?>" enctype="multipart/form-data">
 <input type="hidden" id="g_id" name="g_id" value="<?php echo isset($details['g_id'])?$details['g_id']:''; ?>">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Image
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr id='addr0'>
                                <td class="form-group">
                                    <input type="file" name='image' class="form-control" value="<?php echo isset($details['image'])?$details['image']:''; ?>" >
                                </td>
                                
                            </tr>
                            <tr id='addr1'></tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>

            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Upload</button>
            </div>
        </form>

    </div>
</div>
</div>
</div>
<script>
    $(document).ready(function() {
        var i = 1;
        $("#add_row").click(function() {
            $('#addr' + i).html("<td class='form-group'><input name='image[]' type='file'  class='form-control input-md'  /> </td>");

            $('#tab_logic').append('<tr id="addr' + (i + 1) + '"></tr>');
            i++;
        });
        $("#delete_row").click(function() {
            if (i > 1) {
                $("#addr" + (i - 1)).html('');
                i--;
            }
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm').bootstrapValidator({

            fields: {

                
                image: {
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