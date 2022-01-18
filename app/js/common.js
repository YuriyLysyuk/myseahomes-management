'use strict';

$(document).ready(function () {
  // Modal
  let modalForm = $('#modal').iziModal({
    title: 'Оставьте заявку',
    subtitle: 'Мы перезвоним вам в ближайшие 15 минут',
    background: '#1c222a',
    headerColor: '#1c222a',
    icon: 'fas fa-thumbs-up',
    iconColor: '#edb021',
    width: 400,
    padding: 20,
  });

  let modalThanks = $('#thank-you').iziModal({
    title: 'Спасибо!',
    subtitle: 'Ожидайте звонка в течении 15 минут',
    background: '#1c222a',
    headerColor: '#1c222a',
    icon: 'fas fa-thumbs-up',
    iconColor: '#edb021',
    width: 400,
    timeout: 5000,
    timeoutProgressbar: true,
    timeoutProgressbarColor: '#edb021',
    pauseOnHover: true,
  });

  $(document).on('click', '.trigger', function (event) {
    event.preventDefault();
    modalForm.iziModal('open');
  });

  //E-mail Ajax Send
  $('form').submit(function () {
    var th = $(this);
    $.ajax({
      type: 'POST',
      url: 'mail.php', //Change
      data: th.serialize(),
    }).done(function () {
      modalForm.iziModal('close');
      th.trigger('reset');
      modalThanks.iziModal('open');
    });
    return false;
  });
});
