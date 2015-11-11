(function($) {
  $(function() {
    $('#contact-form').formValidation({
      fields: {
        name: {
          validators: {
            notEmpty: {
              message: 'Your name is required'
            }
          }
        },
        email: {
          verbose: false,
          validators: {
            notEmpty: {
              message: 'Your email address is required'
            },
            emailAddress: {
              message: 'Your email address is invalid'
            },
            stringLength: {
              max: 512,
              message: 'Your email address cannot exceed 512 characters'
            },
            remote: {
              type: 'GET',
              crossDomain: true,
              url: 'https://api.mailgun.net/v3/address/validate?callback=?',
              name: 'address',
              data: {
                api_key: 'pubkey-a6197775325bb989bd87a246094f75a9'
              },
              dataType: 'jsonp',
              validKey: 'is_valid',
              message: 'Your email address is invalid'
            }
          }
        },
        message: {
          validators: {
            notEmpty: {
              message: 'Your message is required'
            }
          }
        }
      }
    })
    .on('success.validator.fv', function(event, data) {
      if(data.field === 'email' && data.validator === 'remote') {
        var response = data.result;

        if(response.did_you_mean) {
          data.element
            .data('fv.messages')
            .find('[data-fv-validator="remote"][data-fv-for="email"]')
            html('Did you mean ' + response.did_you_mean + '?')
            show();
        }
      }
    })
    .on('err.validator.fv', function(event, data) {
      if(data.field === 'email' && data.validator === 'remote') {
        data.element
          .data('fv.messages')
          .find('[data-fv-validator="remote"][data-fv-for="email"]')
          .html('Your email address is invalid')
          .show();
      }
    })
    .on('success.form.fv', function(event) {
      event.preventDefault();

      var $form = $(event.target);

      $.ajax({
        type: 'POST',
        url: $form.attr('action'),
        data: $form.serialize()
      })
      .done(function(response) {
        $form.formValidation('resetForm', true);

        $('#contact').modal('hide');

        var content = '';

        content += '<div class="alert alert-success alert-dismissible fade in" role="alert">';
        content += '    <button class="close" type="button" data-dismiss="alert" aria-label="Close">';
        content += '        <span aria-hidden="true">&times;</span>';
        content += '        <span class="sr-only">Close</span>';
        content += '    </button>';
        content += '    <strong>Thanks!</strong> Your message has been sent. I will get back to you as soon as possible.';
        content += '</div>';

        $('#message').html(content);

        $('html, body').scrollTop(0);

        return false;
      });
    });
  });
})(jQuery);
