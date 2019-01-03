
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Services</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('services'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Services</a>

            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
					<?php if(isset($services_list) && count($services_list)>0){ ?>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Paragraph</th>
                                <td>
								
                                   <?php foreach($services_list as $list){?>
								   <?php echo isset($list['paragraph'])?$list['paragraph']:''; ?>
								   <?php }?>
								   
                                </td>
                            </tr>
                        </table>
                    </div>
					<?php }?>
					<?php if(isset($services_list) && count($services_list)>0){ ?>
                    <div class="table-responsive">
                       
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    
                                    <th>Title</th>
									<th>Service 1 Title</th>
                                    <th>Paragraph1</th>
                                    <th>Description1</th>
									<th>Service 2 Title</th>
									<th>Paragraph2</th>
									<th>Description2</th>
									<th>Service 3 Title</th>
									<th>Paragraph3</th>
									<th>Description3</th>
									<th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($services_list as $list){?>
                                <tr>
                                   
                                    <td>
                                        <?php echo isset($list['title'])?$list['title']:''; ?>
                                    </td>
                                    <td>
									<?php foreach($list['servies'] as $li){ ?>
                                        <?php echo isset($li['title1'])?$li['title1']:'' ; ?>
									<?php }?>
                                    </td>
                                    <td>
									<?php foreach($list['servies'] as $li){ ?>
                                        <?php echo isset($li['paragraph1'])?$li['paragraph1']:''; ?>
										<?php }?>
                                    </td>
                                    <td>
									<?php foreach($list['servies'] as $li){ ?>
									<?php foreach($li['servie_data'] as $lis){ ?>
									<?php echo $lis['service_name1'].'<br>'; ?>
									<?php } ?>
                                    <?php } ?>  
                                    </td>
									
									<td>
                                       <?php foreach($list['servies'] as $li){ ?>
                                        <?php echo isset($li['title1'])?$li['title1']:''; ?>
									<?php }?>
                                    </td>
                                    <td>
                                        <?php foreach($list['servies'] as $li){ ?>
                                        <?php echo isset($li['paragraph1'])?$li['paragraph1']:''; ?>
										<?php }?>
                                    </td>
                                    <td>
                                        <?php foreach($list['servies'] as $li){ ?>
									<?php foreach($li['servie_data'] as $lis){ ?>
									<?php echo $lis['service_name1'].'<br>'; ?>
									<?php } ?>
                                    <?php } ?>  
                                    </td>
									
									<td>
                                       <?php foreach($list['servies'] as $li){ ?>
                                        <?php echo isset($li['title1'])?$li['title1']:''; ?>
									<?php }?>
                                    </td>
                                    <td>
                                        <?php foreach($list['servies'] as $li){ ?>
                                        <?php echo isset($li['paragraph1'])?$li['paragraph1']:''; ?>
										<?php }?>
                                    </td>
                                    <td>
                                        <?php foreach($list['servies'] as $li){ ?>
									<?php foreach($li['servie_data'] as $lis){ ?>
									<?php echo $lis['service_name1'].'<br>'; ?>
									<?php } ?>
                                    <?php } ?>  
                                    </td>
									<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
									<td class="">
											<a href="<?php echo base_url('services/edit/'.base64_encode($list['s_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
											<a href="<?php echo base_url('services/status/'.base64_encode($list['s_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
		                                    <a href="<?php echo base_url('services/delete/'.base64_encode($list['s_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>
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