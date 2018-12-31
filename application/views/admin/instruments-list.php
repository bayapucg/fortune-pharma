
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Services</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('instruments'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Instruments</a>

            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-12 bg-white">
                    <div class="clearfix">&nbsp;</div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Paragraph</th>
                                <td>
                                    We have sophisticated equipments with cGMP Compliance. Our well experienced scientists and equipments support to carryout all testing activities.
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SI No</th>
                                    <th>List Items</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        HPLC Waters 2695 with 2996,2487
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
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
