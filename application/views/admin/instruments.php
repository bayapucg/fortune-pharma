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
                <h4 class="page-title">Instruments</h4>
            </div>
        </div>
        <form id="defaultForm" method="post" class="m-b-30" action="" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" id="title" class="form-control" placeholder="Title Name">
                    </div>
                    <div class="form-group">
                        <label>Paragraph</label>
                        <textarea name="paragraph" id="paragraph" class="form-control" rows="5"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
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
                        <button type="button" class="btn btn-sm btn-info" id="addrow">Add Row</button>
                    </div>
                </div>
            </div>
            
            <div class="row m-t-30">
                <div class="col-md-12">
                    <div id="summernote"></div>
                </div>
            </div>
            
            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Save</button>
            </div>

        </form>

    </div>
</div>

<script>
    $(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
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
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            height: 200
        });
    });
</script>