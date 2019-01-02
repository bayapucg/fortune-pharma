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
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('services/editpost'); ?>" enctype="multipart/form-data">
<input type="hidden" id="s_id" name="s_id" value="<?php echo $edit_servies['s_id'] ?>">
            <div class="row">
			<div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <textarea name="title" id="title" class="form-control" placeholder="Enter Title"><?php echo isset($edit_servies['title'])?$edit_servies['title']:''; ?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Paragraph</label>
                        <input name="paragraph" id="paragraph" class="form-control" value="<?php echo isset($edit_servies['paragraph'])?$edit_servies['paragraph']:''; ?>">
                    </div>
                </div>
				
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-primary">Service 1</h4>
                    <div class="form-group">
                        <label>Service 1 title</label>
                        <input type="text" name="title1" id="title1" class="form-control" placeholder="Enter Service 1" value="<?php echo isset($edit_servies['title1'])?$edit_servies['title1']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph1" id="paragraph1" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($edit_servies['paragraph1'])?$edit_servies['paragraph1']:''; ?></textarea>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table order-list1">
                            <tbody>
							<?php $cnt=1;foreach($edit_servies['sevies_list'] as $lis){ ?>
                               <tr id="oldid<?php echo $cnt; ?>">
                                    <td >
                                        <input type="text" name="service_name1[]" placeholder="Enter Name" class="form-control" value="<?php echo isset($lis['service_name1'])?$lis['service_name1']:''; ?>" />
                                    </td>
									<td class="text-center" valign="center"><a href="javascript:void(0);" onclick="removeparagraph('<?php echo $lis['s_d_id']; ?>','<?php echo $cnt; ?>')"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
							<?php $cnt++;} ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-info" id="addrow1">Add Row</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary">Service 2</h4>
                    <div class="form-group">
                        <label>Service 2 title</label>
                        <input type="text" name="title2" id="title2" class="form-control" placeholder="Enter Service 2" value="<?php echo isset($edit_servies['title2'])?$edit_servies['title2']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph2" id="paragraph2" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($edit_servies['paragraph2'])?$edit_servies['paragraph2']:''; ?></textarea>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table order-list2">
                            <tbody>
							<?php $cnt=1;foreach($edit_servies['sevies_list'] as $lis){ ?>
                               <tr id="oldid2<?php echo $cnt; ?>">
                                    <td>
                                        <input type="text" name="service_name2[]" placeholder="Enter Name" class="form-control" value="<?php echo isset($lis['service_name2'])?$lis['service_name2']:''; ?>"  />
                                    </td>
								<td class="text-center" valign="center"><a href="javascript:void(0);" onclick="removeparagraph2('<?php echo $lis['s_d_id']; ?>','<?php echo $cnt; ?>')"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>	
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
							<?php $cnt++;} ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-info" id="addrow2">Add Row</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary">Service 3</h4>
                    <div class="form-group">
                        <label>Service 3 title</label>
                        <input type="text" name="title3" id="title3" class="form-control" placeholder="Enter Serviec 3" value="<?php echo isset($edit_servies['title3'])?$edit_servies['title3']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph3" id="paragraph3" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($edit_servies['paragraph3'])?$edit_servies['paragraph3']:''; ?></textarea>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table order-list3">
                            <tbody>
							<?php $cnt=1;foreach($edit_servies['sevies_list'] as $lis){ ?>
                                 <tr id="oldid3<?php echo $cnt; ?>">
                                    <td>
                                        <input type="text" name="service_name3[]" placeholder="Enter Name" class="form-control" value="<?php echo isset($lis['service_name3'])?$lis['service_name3']:''; ?>" />
                                    </td>
									<td class="text-center" valign="center"><a href="javascript:void(0);" onclick="removeparagraph3('<?php echo $lis['s_d_id']; ?>','<?php echo $cnt; ?>')"><i class="fa fa-times-circle " style="font-size:25px;" aria-hidden="true"></i></a></td>	
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
							<?php $cnt++;} ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-info" id="addrow3">Add Row</button>
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
function removeparagraph(p_id,id){
	if(p_id!=''){
		 jQuery.ajax({
					url: "<?php echo site_url('services/remove_pragraph');?>",
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


function removeparagraph2(p_id,id){
	if(p_id!=''){
		 jQuery.ajax({
					url: "<?php echo site_url('services/remove_pragraph_second');?>",
					data: {
						p_id: p_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
						jQuery('#oldid2'+id).remove();
						jQuery('#oldid2'+id).hide();
					}
				 }
				});
			}
	
}

function removeparagraph3(p_id,id){
	if(p_id!=''){
		 jQuery.ajax({
					url: "<?php echo site_url('services/remove_pragraph_third');?>",
					data: {
						p_id: p_id,
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
						jQuery('#oldid3'+id).remove();
						jQuery('#oldid3'+id).hide();
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
                 title: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
                title1: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
				title2: {
                    validators: {
                        notEmpty: {
                            message: 'Title is required'
                        }
                    }
                },
				title3: {
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
				paragraph1: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        }
                    }
                },
				paragraph2: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        }
                    }
                },
				paragraph3: {
                    validators: {
                        notEmpty: {
                            message: 'Paragraph is required'
                        }
                    }
                },
                'service_name1[]': {
                    validators: {
                        notEmpty: {
                            message: 'service name1 is required'
                        }
                    }
                },
                'service_name2[]': {
                    validators: {
                        notEmpty: {
                            message: 'service name2 is required'
                        }
                    }
                },
                'service_name3[]': {
                    validators: {
                        notEmpty: {
                            message: 'service name3 is required'
                        }
                    }
                }
                
            }
        })

    });
</script>
<script>
    $(document).ready(function () {
    var counter = 0;

    $("#addrow1").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" placeholder="Enter service name1" name="service_name1[]' + counter + '"/></td>';

        cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
        newRow.append(cols);
        $("table.order-list1").append(newRow);
        counter++;
    });



    $("table.order-list1").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
</script><script>
    $(document).ready(function () {
    var counter = 0;

    $("#addrow2").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" placeholder="Enter service name2" name="service_name2[]' + counter + '"/></td>';

        cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
        newRow.append(cols);
        $("table.order-list2").append(newRow);
        counter++;
    });



    $("table.order-list2").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
</script>

<script>
    $(document).ready(function () {
    var counter = 0;

    $("#addrow3").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" placeholder="Enter service name3" name="service_name3[]' + counter + '"/></td>';

        cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
        newRow.append(cols);
        $("table.order-list3").append(newRow);
        counter++;
    });



    $("table.order-list3").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
</script>