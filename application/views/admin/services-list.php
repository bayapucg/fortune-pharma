
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Services List</h4>
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
                        
					<table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Paragraph</th>
									<th>Status</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                       <?php echo isset($services_list[0]['title'])?$services_list[0]['title']:''; ?>
								   
                                    </td>
                                    <td>
								 <?php echo isset($services_list[0]['paragraph'])?$services_list[0]['paragraph']:''; ?>
                                    </td>
									
									<td><?php if($services_list[0]['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
                                    <td class="">
									<a href="<?php echo base_url('services/serviesedit/'.base64_encode($services_list[0]['s_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
									<a href="<?php echo base_url('services/serviesdelete/'.base64_encode($services_list[0]['s_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>
								</td>
                                </tr>
							
                            </tbody>
                        </table>


					
					
					
                    
					
				<?php if(isset($services_list[0]['servies']) && count($services_list[0]['servies'])>0){ ?>

                    <div class="table-responsive">
                       
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    
									<th>Service</th>
									<th>Service Title</th>
                                    <th>Service Name</th>
                                    <th>Names </th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
							 <tr>
							
							<?php $count=1;foreach($services_list[0]['servies'] as $lis){?>
                               
                                   
                                    <td>
                                        <?php echo $count; ?>
                                    </td>
									<td>
                                        <?php echo isset($lis['title_name'])?$lis['title_name']:''; ?>
                                    </td>
                                   
									<td>
										<?php foreach($lis['servie_data'] as $li){ ?>
                                        <li><?php echo isset($li['service_name'])?$li['service_name']:''; ?>&nbsp; <a  href="<?php echo base_url('services/servicenamedelete/'.base64_encode($li['s_b_d_id']));?>">X</a></li>
										<?php } ?>
                                    </td> 
									
									
									
		                             <td>
									 <a href="<?php echo base_url('services/edit/'.base64_encode($lis['s_n_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
									 <a href="<?php echo base_url('services/deletes/'.base64_encode($lis['s_n_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>

									</td>
                                 
                                  
                                    
                                </tr>
                               
                                
						<?php $count++;}?>
                            </tbody>
                        </table>
                        
                    </div>
					<?php }else{ ?>
                    <div> No data available</div>
                     <?php }?>
					
					
                </div>
				<?php }else{ ?>
                    <div> No data available</div>
                     <?php }?>
				
				
				
				
				
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