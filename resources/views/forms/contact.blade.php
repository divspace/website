<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labeledby="contact-form-title">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" id="contact-form-title">Contact</h4>
      </div>
      <div class="modal-body">
        <form id="contact-form" action="{{ route('contact.index') }}" method="POST">
          {!! Honeypot::generate('first_name', 'last_name') !!}
          <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" id="name" name="name" type="text">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" id="email" name="email" type="email">
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5"></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary pull-right" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
