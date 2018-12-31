<?php include("header.php"); ?>
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Services</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="<?php echo base_url('services'); ?>" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Services</a>

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
                                    <?php echo isset($services_list['paragraph'])?$services_list['paragraph']:''; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <?php if(isset($services_list) && count($services_list)>0){ ?>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th rowspan="2">Service No</th>
                                    <th>Heading</th>
                                    <th>Paragraph</th>
                                    <th>List Item</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>

                                    <td>
                                        <?php echo isset($services_list['title1'])?$services_list['title1']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($services_list['paragraph1'])?$services_list['paragraph1']:''; ?>
                                    </td>
                                    <td></td>
                                    <td class="text-right">
                                        <a href="<?php echo base_url('services/delete/'.base64_encode(1)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>

                                    <td>
                                        <?php echo isset($services_list['title2'])?$services_list['title2']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($services_list['paragraph2'])?$services_list['paragraph2']:''; ?>
                                    </td>
                                    <td></td>
                                    <td class="text-right">
                                        <a href="<?php echo base_url('services/delete/'.base64_encode(2)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>

                                    <td>
                                        <?php echo isset($services_list['title3'])?$services_list['title3']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($services_list['paragraph3'])?$services_list['paragraph3']:''; ?>
                                    </td>
                                    <td></td>
                                    <td class="text-right">
                                        <a href="<?php echo base_url('services/delete/'.base64_encode(3)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <!--<tr>
                                    <td>
                                        4
                                    </td>

                                    <td>
                                        <?php echo isset($services_list['title4'])?$services_list['title4']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($services_list['paragraph4'])?$services_list['paragraph4']:''; ?>
                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo base_url('services/delete/'.base64_encode(4)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>

                                    <td>
                                        <?php echo isset($services_list['title5'])?$services_list['title5']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($services_list['paragraph5'])?$services_list['paragraph5']:''; ?>
                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo base_url('services/delete/'.base64_encode(5)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        6
                                    </td>

                                    <td>
                                        <?php echo isset($services_list['title6'])?$services_list['title6']:''; ?>
                                    </td>
                                    <td>
                                        <?php echo isset($services_list['paragraph6'])?$services_list['paragraph6']:''; ?>
                                    </td>

                                    <td class="text-right">
                                        <a href="<?php echo base_url('services/delete/'.base64_encode(6)); ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>-->

                            </tbody>
                        </table>
                        <?php  } ?>
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