/**
 * errorMessage() returns a new element
 * runs if user forgot to input something on a required field
 * based on the passed in message name
 *
 * @param {String} message
 * @return {Element} error
 */
function errorMessage(message) {
  var error = document.createElement('p');
  error.innerHTML = 'Error: ' + message;
  $(error).css('color', 'red');
  $(error).css('font-size', '16px');
  $(error).css('font-weight', 'bold');
  $(error).css('text-align', 'left');
  return error;
}

$(document).ready(function() {
  $('#contactForm').submit(function() {
    $('#emailField').removeClass('has-error');
    $('#emailField + p').remove();
    $('#messageField').removeClass('has-error');
    $('#messageField + p').remove();

    var email = $('#i_email').val();
    var message = $('#i_message').val();

    if(email === '' || message === '') {
      if(email === '') {
        $('#emailField').addClass('has-error');
        var error = errorMessage('Please enter an email address.');
        $('#emailField').after(error);
      }
      if(message === '') {
        $('#messageField').addClass('has-error');
        var error = errorMessage('Please enter a message.');
        $('#messageField').after(error);
      }
      return false;
    }
  });

  $('#emailField').keyup(function() {
      $('#emailField').removeClass('has-error');
      $('#emailField + p').remove();
  });

  $('#messageField').keyup(function() {
      $('#messageField').removeClass('has-error');
      $('#messageField + p').remove();
  });
});
