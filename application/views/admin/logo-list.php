
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Logo List</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('navigation'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Logo</a>

            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
					
				
                    <div class="table-responsive">
                       
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Upload Logo</th>
									<th>Upload Favicon</th>
									<th>Title</th>
									<th>Keywords</th>
									<th>Description</th>
                                     <th>Status</th>
									 <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
							<?php  foreach($logo_list as $list){?>
							 <tr>
							 
                                    
									<td>
                                       <img class="img-responsive" src="<?php echo base_url('assets/logo/'.$list['image']); ?>"  style="height:50px;width:auto;">
                                    </td>
							
                                    <td>
                                     <img class="img-responsive" src="<?php echo base_url('assets/logo/'.$list['favicon']); ?>"  style="height:50px;width:auto;">
                                    </td>
									
									<td>
                                      <?php echo isset($list['title'])?$list['title']:''; ?>
                                    </td>
									<td>
                                      <?php echo isset($list['keywords'])?$list['keywords']:''; ?>
                                    </td>
									<td>
                                     <?php echo isset($list['description'])?$list['description']:''; ?>
                                    </td>
									<td>
                                       <?php if($list['status']==1){ echo "Active"; }else{ echo "Deactive";} ?>
                                    </td>
									<td>
									 <a href="<?php echo base_url('navigation/edit/'.base64_encode($list['id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
									 <a href="<?php echo base_url('navigation/status/'.base64_encode($list['id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
									 <a href="<?php echo base_url('navigation/deletes/'.base64_encode($list['id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>

									</td>
		                           
                                 
                                  
                                    
                                </tr>
                               
                                
							<?php }?>
                            </tbody>
                        </table>
                        
                    </div>
					
					
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