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
                <h4 class="page-title">Edit Instruments</h4>
            </div>
        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('instruments/editpost'); ?>" enctype="multipart/form-data">
         <input type="hidden" id="i_id" name="i_id" value="<?php echo $edit_instruments['i_id'] ?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" id="title" class="form-control" placeholder="Title" value="<?php echo isset($edit_instruments['title'])?$edit_instruments['title']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph" id="paragraph" class="form-control" rows="5"><?php echo isset($edit_instruments['paragraph'])?$edit_instruments['paragraph']:''; ?></textarea>
                    </div>
                </div>
            </div>

                            <div class="row">
							<div class="col-lg-12">
								<h4 class="text-primary">Description</h4>
							</div>
							<div class="col-md-12">
								<table class="table table-bordered table-hover" id="tab_logic">
									
									<tbody>
									<?php $cnt=1;foreach($edit_instruments['instrument_list'] as $lis){ ?>
										
										<tr id="oldid<?php echo $cnt; ?>">
										<td>
											 <input type="text" name="description[]" placeholder="Enter Description" class="form-control" value="<?php echo isset($lis['description'])?$lis['description']:''; ?>">
										</td>
										<td class="text-center" valign="center"><a href="javascript:void(0);" onclick="removeparagraph('<?php echo $lis['i_d_id']; ?>','<?php echo $cnt; ?>')"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>
												
										</tr>
									<?php $cnt++;} ?>
										<tr id='addr0'>
											<td class="form-group">
												<input type="text" name="description[]" placeholder="Enter Description" class="form-control" />
												</td>
												
												</tr>
										<tr id='addr1'></tr>
									</tbody>
										</table>
										<a id="add_row" class="btn btn-default pull-left">Add Row</a>
										<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
									</div>
								</div>
            
            
            
            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save</button>
            </div>

        </form>

    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#defaultForm').bootstrapValidator({

            fields: {

                title: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
                paragraph: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        }
                    }
                },
                'description[]': {
                    validators: {
                        notEmpty: {
                            message: 'Description is required'
                        }
                    }
                }
                
                
                
            }
        })

    });
</script>
<script>
     $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td><input name='description[]' id='name"+i+"' class='form-control input-md'></td>");

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
					url: "<?php echo site_url('instruments/remove_pragraph');?>",
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

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 200
        });
    });
</script>