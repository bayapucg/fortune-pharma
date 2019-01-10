<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Sliders</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('slider'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Slider</a>

            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
                    <div class="table-responsive">
                        <?php if(isset($slider_list) && count($slider_list)>0){ ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                   
                                    <th>Upload Slider 1</th>
                                    <th>frist Slider Text</th>
									<th>Upload Slider 2</th>
                                    <th>second Slider Text</th>
									<th>Upload Slider 3</th>
                                    <th>third Slider Text</th>
									<th>Upload Slider 4</th>
                                    <th>Fourth Slider Text</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($slider_list as $list){ ?>
                                <tr>
                                   
                                   
                                    <td>
                                        <img class="img-responsive" src="<?php echo base_url('assets/slider/'.$list['image_slider1']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>" style="height:50px;width:auto;">
                                    </td>
									<td>
                                        <?php echo isset($list['slider1'])?$list['slider1']:''; ?>
                                    </td>
									<td>
                                        <img class="img-responsive" src="<?php echo base_url('assets/slider/'.$list['image_slider2']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>" style="height:50px;width:auto;">
                                    </td>
									<td>
                                        <?php echo isset($list['slider2'])?$list['slider2']:''; ?>
                                    </td>
                                    
									<td>
                                        <img class="img-responsive" src="<?php echo base_url('assets/slider/'.$list['image_slider3']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>" style="height:50px;width:auto;">
                                    </td>
									<td>
                                        <?php echo isset($list['slider3'])?$list['slider3']:''; ?>
                                    </td>
									<td>
                                        <img class="img-responsive" src="<?php echo base_url('assets/slider/'.$list['image_slider4']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>" style="height:50px;width:auto;">
                                    </td>
									<td>
                                        <?php echo isset($list['slider4'])?$list['slider4']:''; ?>
                                    </td>
									
                                    <td>
                                        <?php if($list['status']==1){ echo "Active"; }else{ echo "Deactive";} ?>
                                    </td>

                                    <td class="text-right">
									<a href="<?php echo base_url('slider/edit/'.base64_encode($list['s_id'])); ?>" class="btn btn-success">Edit</a>
                                        <a href="<?php echo base_url('slider/status/'.base64_encode($list['s_id']).'/'.base64_encode($list['status'])); ?>" class="btn btn-warning">
                                            <?php if($list['status']==0){ echo "Active"; }else{ echo "Deactive";} ?></a>
                                        <a href="<?php echo base_url('slider/delete/'.base64_encode($list['s_id'])); ?>" class="btn btn-danger">Delete</a>
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
                [3, "desc"]
            ]
        });
    });
</script>