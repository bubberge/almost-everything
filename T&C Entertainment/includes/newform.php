<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Contact T&amp;C Entertainment</h3>
  </div>
  <div class="modal-body">
    <form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">


        <div class="form-group">
            <label for="form_name">Name *</label>
            <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group">
            <label for="form_email">Email *</label>
            <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
            <div class="help-block with-errors"></div>
        </div>

        <div class="form-group">
            <label for="form_message">Message *</label>
            <textarea id="form_message" name="message" class="form-control" placeholder="" rows="4" required="required" data-error="Please,leave us a message."></textarea>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success btn-send" value="Send message">
        </div>

        <div class="col-md-12">
            <p class="text-muted"><strong>*</strong> These fields are required.</p>
        </div>


    </form>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
  </div>
</div>
