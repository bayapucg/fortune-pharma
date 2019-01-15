<style>
    table.table{
        margin-bottom: 0px;
    }
table.order-list td {
    padding-left: 0px !important;
    border-top: 0px solid #ddd !important;
}
</style>


<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Edit Services</h4>
            </div>
        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('Services/editpost'); ?>" enctype="multipart/form-data">
       <input type="hidden" id="s_n_id" name="s_n_id" value="<?php echo isset($edit_servies['s_n_id'])?$edit_servies['s_n_id']:''; ?>">
           

            <div class="row">
			
                <div class="col-md-4">
                    <h4 class="text-primary">Service </h4>
                    <div class="form-group">
                        <label>Service title</label>
                        <input type="text" name="title_name" id="title" class="form-control" placeholder="Enter Service Name Title " value="<?php echo isset($edit_servies['title_name'])?$edit_servies['title_name']:''; ?>" >
                    </div>
                    
					
					
					 <div class="row">
							<div class="col-lg-12">
								<h4 class="text-primary">Service Name</h4>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered table-hover" id="tab_logic">
									
									<tbody>
										<?php $cnt=1;foreach($edit_servies['servie_data'] as $lis){ ?>
										<tr id="oldid<?php echo $cnt; ?>">
										<td>
											 <input type="text" name="service_name[]" placeholder="Enter Service Name" class="form-control" value="<?php echo isset($lis['service_name'])?$lis['service_name']:''; ?>">
										</td>
										<td class="text-center" valign="center"><a href="javascript:void(0);" onclick="removeparagraph('<?php echo $lis['s_b_d_id']; ?>','<?php echo $cnt; ?>')"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>
												
										</tr>
									<?php $cnt++;} ?>
										
										<tr id='addr1'></tr>
									</tbody>
										</table>
										<a id="add_row" class="btn btn-default pull-left">Add Row</a>
										<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
									</div>
								</div>
            
					
					
					
                </div>
                
               
	  
            </div>
           
            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save</button>
            </div>

        </form>

    </div>
</div>
<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='service_name[]' id='name"+i+"' class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
  });
     $("#delete_row").click(function(){
    	 if(i>0){
		 $("#addr"+(i-1)).html('');
		 i--;
		 }
	 });

});

function removeparagraph(p_id,id){
	if(p_id!=''){
		 jQuery.ajax({
					url: "<?php echo site_url('Services/remove_pragraph');?>",
					data: {
						p_id: p_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
						jQuery('#oldid'+id).remove();
						jQuery('#oldid'+id).hide();
					}
				 }
				});
			}
	
}
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm').bootstrapValidator({

            fields: {

                title_name: {
                    validators: {
                        notEmpty: {
                            message: 'Service Name Title is required'
                        }
                    }
                },
				
				
                'service_name[]': {
                    validators: {
                        notEmpty: {
                            message: 'Service Name  is required'
                        }
                    }
                }
                
                
                
            }
        })

    });
</script>