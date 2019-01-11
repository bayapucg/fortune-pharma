
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Aboutus List</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('aboutus'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Aboutus</a>

            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
					
					<?php if(isset($aboutus_list) && count($aboutus_list)>0){ ?>
                    <div class="table-responsive">
                       
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Paragraph</th>
									<th>Upload Image1</th>
									<th>Paragraph1</th>
									<th>Upload Image2</th>
									<th>Paragraph2</th>
                                    <th>Upload Image3</th>
									<th>Paragraph3</th>
                                     <th>Status</th>
									 <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
							<?php foreach($aboutus_list as $list){ ?>
							 <tr>
							 
                                    <td>
                                       <?php echo isset($list['parahraph'])?$list['parahraph']:''; ?>
                                    </td>
									<td>
                                       <img class="img-responsive" src="<?php echo base_url('assets/aboutus/'.$list['image1']);?>" alt="" style="height:50px;width:auto;">
                                    </td>
									<td>
                                       <?php echo isset($list['paragraph1'])?$list['paragraph1']:''; ?>
                                    </td>
                                    <td>
                                      <img class="img-responsive" src="<?php echo base_url('assets/aboutus/'.$list['image2']);?>" alt="" style="height:50px;width:auto;">
                                    </td>
									
									<td>
                                       <?php echo isset($list['paragraph2'])?$list['paragraph2']:''; ?>
                                    </td>
									<td>
                                       <img class="img-responsive" src="<?php echo base_url('assets/aboutus/'.$list['image3']);?>" alt="" style="height:50px;width:auto;"> 
                                    </td>
									<td>
                                     <?php echo isset($list['paragraph3'])?$list['paragraph3']:''; ?>
                                    </td>
									<td><?php if($list['status']==1){ echo "Active";}else{ echo "Deactive"; } ?></td>
									 <td>
									 <a href="<?php echo base_url('aboutus/edit/'.base64_encode($list['a_id'])); ?>"  data-toggle="tooltip" title="Edit" class="btn btn-success"><i class="fa fa-pencil btn btn-success"></i></a>
									 <a href="<?php echo base_url('aboutus/status/'.base64_encode($list['a_id']).'/'.base64_encode($list['status'])); ?>" data-toggle="tooltip" title="status" class="btn btn-warning"><i class="fa fa-info-circle btn btn-warning"></i></a>
									 <a href="<?php echo base_url('aboutus/deletes/'.base64_encode($list['a_id']));?>" data-toggle="tooltip"  title="Delete" class="btn btn-danger"><i class="fa fa-trash btn btn-danger"></i></a>

									</td>
		                           
                                 
                                  
                                    
                                </tr>
                               
                                
							<?php } ?>
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