
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Contact List</h4>
            </div>
            
        </div>
        <form>
            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
					
					<?php if(isset($contact_list) && count($contact_list)>0){ ?>
                    <div class="table-responsive">
                       
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>S.no</th>
									<th>Name</th>
									<th>Email</th>
									<th>Subject</th>
                                    <th>Message</th>
                                    <th>Createdat</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
							 <tr>
							
							<?php $count=1;foreach($contact_list as $lis){?>
                               
                                   
                                    <td>
                                        <?php echo $count; ?>
                                    </td>
									<td>
                                        <?php echo isset($lis['name'])?$lis['name']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($lis['email_id'])?$lis['email_id']:''; ?>
                                    </td>
									
									<td>
                                        <?php echo isset($lis['subject'])?$lis['subject']:''; ?>
                                    </td>
									<td>
                                        <?php echo isset($lis['message'])?$lis['message']:''; ?>
                                    </td>
									<td>
                                        <?php echo isset($lis['create_at'])?$lis['create_at']:''; ?>
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