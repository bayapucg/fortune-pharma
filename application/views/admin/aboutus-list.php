<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Sliders</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('aboutus'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Slider</a>

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
                                        <th>parahraph</th>
                                    
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($aboutus_list as $list){ ?>
                                <tr>
                                   
                                   <td>
                                        <?php echo isset($list['parahraph'])?$list['parahraph']:''; ?>
                                    </td>
                                    
									
                                    <td>
                                        <?php if($list['status']==1){ echo "Active"; }else{ echo "Deactive";} ?>
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