'use strict';

$(document).ready(function () {
  // Modal
  $('#modal').iziModal({
    title: 'Оставьте заявку',
    subtitle: 'Мы перезвоним вам в ближайшие 15 минут',
    background: '#1c222a',
    headerColor: '#1c222a',
    icon: 'fas fa-thumbs-up',
    iconColor: '#edb021',
    width: 400,
    padding: 20,
  });

  $(document).on('click', '.trigger', function (event) {
    event.preventDefault();
    $('#modal').iziModal('open');
  });

  //E-mail Ajax Send
  //Documentation & Example: https://github.com/agragregra/uniMail
  $('form').submit(function () {
    //Change
    var th = $(this);
    $.ajax({
      type: 'POST',
      url: 'mail.php', //Change
      data: th.serialize(),
    }).done(function () {
      alert('Thank you!');
      setTimeout(function () {
        // Done Functions
        th.trigger('reset');
      }, 1000);
    });
    return false;
  });
});
