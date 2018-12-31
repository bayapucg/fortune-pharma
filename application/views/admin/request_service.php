<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        
        <div class="row">
            <div class="col-xs-12">
                <h4 class="page-title">Request Other Services</h4>
            </div>
        </div>
        
        <form id="requestServiceForm" method="post" class="m-b-30" action="">
            
            <div class="row">
                <div class="col-md-8">
                    <!--  <h4 class="text-primary">Testimonial </h4>-->
                    <div class="form-group">
                        <label>Select Services</label>
                        <select class="form-control" name="services_selection">
                            <option selected disabled>Select</option>
                            <option value="0">Service 1</option>
                            <option value="1">Service 2</option>
                            <option value="2">Service 3</option>
                            <option value="3">Service 4</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Enter Message..."></textarea>
                    </div>
                </div>
            </div>
            
            <div class="m-t-20 text-center">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            
        </form>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#requestServiceForm').bootstrapValidator({

            fields: {

                services_selection: {
                    validators: {
                        notEmpty: {
                            message: 'Services Selection is required'
                        }
                    }
                },
                message: {
                    validators: {
                        notEmpty: {
                            message: 'Message is required'
                        }
                    }
                }
            }
        })

    });
</script>