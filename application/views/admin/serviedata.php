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
                <h4 class="page-title"> Edit Services</h4>
            </div>
        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('services/editserviespost'); ?>" enctype="multipart/form-data">
       <input type="hidden" id="s_id" name="s_id" value="<?php echo isset($editservies['s_id'])?$editservies['s_id']:''; ?>">

            <div class="row">
			<div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" id="title" class="form-control" placeholder="Enter Title" value="<?php echo isset($editservies['title'])?$editservies['title']:''; ?>"></input>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph" id="paragraph" placeholder="Enter text here....." class="form-control" rows="5"><?php echo isset($editservies['paragraph'])?$editservies['paragraph']:''; ?></textarea>
                    </div>
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