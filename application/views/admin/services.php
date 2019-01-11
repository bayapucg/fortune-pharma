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
                <h4 class="page-title">Services</h4>
            </div>
        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="<?php echo base_url('services/addpost'); ?>" enctype="multipart/form-data">

            <div class="row">
			<div class="col-md-6">
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" id="title" class="form-control" placeholder="Enter Title"></input>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph" id="paragraph" placeholder="Enter text here....." class="form-control" rows="5"></textarea>
                    </div>
                </div>
				
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-primary">Service 1</h4>
                    <div class="form-group">
                        <label>Service 1 title</label>
                        <input type="text" name="title1" id="title1" class="form-control" placeholder="Enter Service 1" >
                    </div>
                   
                    <div class="table-responsive">
                        <table id="" class="table order-list1">
                            <tbody>
                                <tr>
                                    <td >
                                        <input type="text" name="service_name1[]" placeholder="Enter service name1" class="form-control" />
                                    </td>
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-info" id="addrow1">Add Row</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary">Service 2</h4>
                    <div class="form-group">
                        <label>Service 2 title</label>
                        <input type="text" name="title2" id="title2" class="form-control" placeholder="Enter Service 2" >
                    </div>
                    
                    <div class="table-responsive">
                        <table id="" class="table order-list2">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="service_name2[]" placeholder="Enter service name2" class="form-control" />
                                    </td>
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-info" id="addrow2">Add Row</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary">Service 3</h4>
                    <div class="form-group">
                        <label>Service 3 title</label>
                        <input type="text" name="title3" id="title3" class="form-control" placeholder="Enter Service 3" >
                    </div>
                    
                    <div class="table-responsive">
                        <table id="" class="table order-list3">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="service_name3[]" placeholder="Enter service name3" class="form-control" />
                                    </td>
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
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