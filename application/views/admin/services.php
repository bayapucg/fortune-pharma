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
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph" id="paragraph" class="form-control" rows="5"><?php echo isset($detail['paragraph'])?$detail['paragraph']:''; ?></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h4 class="text-primary">Service 1</h4>
                    <div class="form-group">
                        <label>Service 1 title</label>
                        <input type="text" name="title1" id="title1" class="form-control" placeholder="Enter Service 1" value="<?php echo isset($detail['title1'])?$detail['title1']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph1" id="paragraph1" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($detail['paragraph1'])?$detail['paragraph1']:''; ?></textarea>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table order-list">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="lname" placeholder="Enter Name" class="form-control" />
                                    </td>
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-info addrow">Add Row</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary">Service 2</h4>
                    <div class="form-group">
                        <label>Service 2 title</label>
                        <input type="text" name="title2" id="title2" class="form-control" placeholder="Enter Service 2" value="<?php echo isset($detail['title2'])?$detail['title2']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph2" id="paragraph2" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($detail['paragraph2'])?$detail['paragraph2']:''; ?></textarea>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table order-list">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="lname" placeholder="Enter Name" class="form-control" />
                                    </td>
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-info addrow">Add Row</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary">Service 3</h4>
                    <div class="form-group">
                        <label>Service 3 title</label>
                        <input type="text" name="title3" id="title3" class="form-control" placeholder="Enter Serviec 3" value="<?php echo isset($detail['title3'])?$detail['title3']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph3" id="paragraph3" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($detail['paragraph3'])?$detail['paragraph3']:''; ?></textarea>
                    </div>
                    <div class="table-responsive">
                        <table id="" class="table order-list">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="text" name="lname" placeholder="Enter Name" class="form-control" />
                                    </td>
                                    <td>
                                        <a class="deleteRow"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-sm btn-info addrow">Add Row</button>
                    </div>
                </div>
            </div>
            <!--<div class="row">
                <div class="col-md-4">
                    <h4 class="text-primary">Service 4</h4>
                    <div class="form-group">
                        <label>Service 4 title</label>
                        <input type="text" name="title4" id="title4" class="form-control" placeholder="Enter Service 4" value="<?php echo isset($detail['title4'])?$detail['title4']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph4" id="paragraph4" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($detail['paragraph4'])?$detail['paragraph4']:''; ?></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary">Service 5 </h4>
                    <div class="form-group">
                        <label>Service 5 title</label>
                        <input type="text" name="title5" id="title5" class="form-control" placeholder="Enter Service 5" value="<?php echo isset($detail['title5'])?$detail['title5']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph5" id="paragraph5" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($detail['paragraph5'])?$detail['paragraph5']:''; ?></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-primary">Service 6</h4>
                    <div class="form-group">
                        <label>Service 6 title</label>
                        <input type="text" name="title6" id="title6" class="form-control" placeholder="Enter Service 6" value="<?php echo isset($detail['title6'])?$detail['title6']:''; ?>">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph6" id="paragraph6" class="form-control" rows="5" placeholder="Enter title here..."><?php echo isset($detail['paragraph6'])?$detail['paragraph6']:''; ?></textarea>
                    </div>
                </div>
            </div>-->
            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save</button>
            </div>

        </form>

    </div>
</div>

<script>
    $(document).ready(function () {
    var counter = 0;

    $(".addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" placeholder="Enter Name" name="lname' + counter + '"/></td>';

        cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});


</script>