
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Instruments List</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('instruments'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Instruments</a>

            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
					<?php if(isset($instruments_list) && count($instruments_list)>0){ ?>
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Paragraph</th>
                                    <th>Description</th>
									<th>Status</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($instruments_list as $list){?>
                                <tr>
                                    <td>
                                       <?php  echo $list['title'];?>
                                    </td>
                                    <td>
                                       <?php  echo $list['paragraph'];?>
                                    </td>
									<td>
									<?php foreach($list['instrument'] as $li){ ?>
									<?php echo $li['description'].'<br>'; ?>
									<?php } ?>
                                    </td>
									<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
                                    <td class="">
											<a href="<?php echo base_url('instruments/edit/'.base64_encode($list['i_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
											<a href="<?php echo base_url('instruments/status/'.base64_encode($list['i_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
		                                    <a href="<?php echo base_url('instruments/delete/'.base64_encode($list['i_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>
											</td>
                                </tr>
							<?php }?>
                            </tbody>
                        </table>
                    </div>
					<?php }else{ ?>
                    <div> No data available</div>
                     <?php }?>
                </div>
            </div>
            
        </form>
    </div>

</div>

<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
