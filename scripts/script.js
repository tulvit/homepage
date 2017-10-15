$(document).on('click', 'nav a, #emailsent a', function(event){
  event.preventDefault();
  $('html, body').animate({ scrollTop: Math.ceil($( $.attr(this, 'href') ).offset().top) }, 500);
});

$(document).on('click', 'div.totop', function(event){
  event.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, 500);
});

$(document).on('click', '.name div.play', function(event){
  $('#name-sound').get(0).play();
});

$(document).ready(function() {
  $('#email').powerTip({placement: 'nw-alt'});
  $('#email').data('powertip', 'Copy to clipboard.');
  
  var clipboard = new Clipboard('#email');
  clipboard.on('success', function(e) {
    $('#powerTip').html('Copied!');
    e.clearSelection();
  });
  clipboard.on('error', function(e) {
    $('#powerTip').html('Could not copy :(');
  });
  
  $('input[name=protection]').val('ok');
});

