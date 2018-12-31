<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">About Us</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('aboutus'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add About Us</a>

            </div>
        </div>
        <form>

            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
                    <div class="table-responsive">
                        <?php if(isset($aboutus_list) && count($aboutus_list)>0){ ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Paragraph</th>
                                    <td colspan="2">
                                        <?php echo isset($aboutus_list['parahraph'])?$aboutus_list['parahraph']:''; ?>
                                    </td>

                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>


                                <tr>
                                    <th>
                                        Equities
                                    </th>

                                    <td><img class="img-responsive" src="<?php echo base_url('assets/aboutus/'.$aboutus_list['image1']); ?>" alt="<?php echo isset($aboutus_list['image1'])?$aboutus_list['image1']:''; ?>" style="height:50px;width:auto;"></td>
                                    <td>
                                        <?php echo isset($aboutus_list['paragraph1'])?$aboutus_list['paragraph1']:''; ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('aboutus/delete/'.base64_encode($aboutus_list['a_id']).'/'.base64_encode(1)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Multi-asset
                                    </th>

                                    <td><img class="img-responsive" src="<?php echo base_url('assets/aboutus/'.$aboutus_list['image2']); ?>" alt="<?php echo isset($aboutus_list['image2'])?$aboutus_list['image2']:''; ?>" style="height:50px;width:auto;"></td>
                                    <td>
                                        <?php echo isset($aboutus_list['paragraph2'])?$aboutus_list['paragraph2']:''; ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('aboutus/delete/'.base64_encode($aboutus_list['a_id']).'/'.base64_encode(2)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Fixed income
                                    </th>

                                    <td><img class="img-responsive" src="<?php echo base_url('assets/aboutus/'.$aboutus_list['image3']); ?>" alt="<?php echo isset($aboutus_list['image3'])?$aboutus_list['image3']:''; ?>" style="height:50px;width:auto;"></td>
                                    <td>
                                        <?php echo isset($aboutus_list['paragraph3'])?$aboutus_list['paragraph3']:''; ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('aboutus/delete/'.base64_encode($aboutus_list['a_id']).'/'.base64_encode(3)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
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