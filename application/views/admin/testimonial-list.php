<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Team</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('testimonial'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Team</a>

            </div>
        </div>
        <form>

            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
                    <div class="table-responsive">
                        <?php if(isset($testimonial_list) && count($testimonial_list)>0){ ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Paragraph</th>
                                    <th>Date & Time</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($testimonial_list as $list){ ?>

                                <tr>
                                    <td><img class="img-responsive" src="<?php echo base_url('assets/testimonial/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>" style="height:50px;width:auto;"></td>
                                    <td>
                                        <?php echo isset($list['name'])?$list['name']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($list['designation'])?$list['designation']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($list['paragraph'])?$list['paragraph']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($list['create_at'])?$list['create_at']:''; ?>
                                    </td>
                                    <td>
                                        <?php if($list['status']==1){ echo "Active"; }else{ echo "Deactive";} ?>
                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo base_url('testimonial/status/'.base64_encode($list['t_id']).'/'.base64_encode($list['status'])); ?>" class="btn btn-danger">
                                            <?php if($list['status']==0){ echo "Active"; }else{ echo "Deactive";} ?></a>
                                        <a href="<?php echo base_url('testimonial/delete/'.base64_encode($list['t_id'])); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>


<script>
    $(function() {
        $('#example1').DataTable({
            "order": [
                [4, "desc"]
            ]
        });
    });
</script>