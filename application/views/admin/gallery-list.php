<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Gallery</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('gallery'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Gallery</a>

            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
                    <div class="table-responsive">
                        <?php if(isset($gallery_list) && count($gallery_list)>0){ ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width:30%;">Name</th>
                                    <th>Text</th>
                                    <th>Image</th>
                                    <th>Date & Time</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($gallery_list as $list){ ?>
                                <tr>
                                    <td>
                                        <?php echo isset($list['org_image'])?$list['org_image']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($list['text'])?$list['text']:''; ?>
                                    </td>
                                    <td>
                                        <img class="img-responsive" src="<?php echo base_url('assets/gallery/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>" style="height:50px;width:auto;">
                                    </td>
                                    <td>
                                        <?php echo isset($list['create_at'])?$list['create_at']:''; ?>
                                    </td>
                                    <td>
                                        <?php if($list['status']==1){ echo "Active"; }else{ echo "Deactive";} ?>
                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo base_url('gallery/status/'.base64_encode($list['g_id']).'/'.base64_encode($list['status'])); ?>" class="btn btn-danger">
                                            <?php if($list['status']==0){ echo "Active"; }else{ echo "Deactive";} ?></a>
                                        <a href="<?php echo base_url('gallery/delete/'.base64_encode($list['g_id'])); ?>" class="btn btn-danger">Delete</a>
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