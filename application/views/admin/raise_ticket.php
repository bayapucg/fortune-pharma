<div class="page-wrapper">
    <div class="content container-fluid bg-white">
        
        <div class="row">
            <div class="col-xs-12">
                <h4 class="page-title">Raise a Support Ticket</h4>
            </div>
        </div>
        
        <form id="raiseTicketForm" method="post" class="m-b-30" action="">
            
            <div class="row">
                <div class="col-md-8">
                    <!--  <h4 class="text-primary">Testimonial </h4>-->
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject">
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
</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#raiseTicketForm').bootstrapValidator({

            fields: {

                subject: {
                    validators: {
                        notEmpty: {
                            message: 'Subject is required'
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