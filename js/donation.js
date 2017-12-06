$(document).ready(function() {

  window.Donation = { mode: 'multiple', value: 2000, selected: 'value-2' };

  // Defines the donation mode

  $('#button-multiple-support').click(function() {
    window.Donation.mode = 'multiple';
  });

  $('#button-single-support').click(function() {
    window.Donation.mode = 'single';
  });

  $('.support-buttons a').click(function(e) {
    $('.clicked').removeClass('clicked');
    $(this).addClass('clicked');
    e.preventDefault();
    return false;
  });

  // Choose the amount
  
  $('#values li').click(function() {
    $('#values').attr('class', $(this).attr('id'));
    window.Donation.value = $(this).attr('data-value');
    window.Donation.selected = $(this).attr('id');
  });

  /*
  $('#values li').hover(
    function() {
      $('#values').attr('class', $(this).attr('id'));
    },
    function() {
      $('#values').attr('class', window.Donation.selected);
    }
  );
  */

  // Pay button is clicked

  var pagSeguroCodes = {
    'value-1': 'CE2E4E71E2E2D20FF49E4F80C3B645E9',
    'value-2': '8F157CB2B1B148C884B68FB2C1A69AA0',
    'value-3': '777A4DB45B5BAB299417DF92354C3125',
    'value-4': '022AD84083833BEEE409AF818AF5BB64',
    'value-5': 'BE32224E7575B96554F0DF87AA53B57F'
  };

  var $form = $('#pagSeguroForm');
  var button = $('#pay');
/*  button.click(function() {
    var checkout = new PagarMeCheckout.Checkout({ "encryption_key": "ek_test_VlUt5YylxIGFVaZo5Jsit4DwMveDpi", success: function(data) {
      // FIXME: What to do with data?
      console.log(data);
    }});
    var params = { "customerData":"false", "amount": window.Donation.value, "createToken": (window.Donation.mode == 'single') };
    checkout.open(params);  */


  button.click(function(e) {
    e.preventDefault();

	
    $form.find('input[type=hidden]').remove();
    $form.append('<input type="hidden" name="iot" value="button">');

    if (window.Donation.mode === 'multiple') {
      $form.attr('action', 'https://pagseguro.uol.com.br/pre-approvals/request.html');
      $form.append('<input type="hidden" name="code" value="' + pagSeguroCodes[window.Donation.selected] + '">');
    } else {
      $form.attr('action', 'https://pagseguro.uol.com.br/checkout/v2/donation.html');
      $form.append('<input type="hidden" name="currency" value="BRL">');
      $form.append('<input type="hidden" name="itemAmount1" value="' + window.Donation.value + '">');
      $form.append('<input type="hidden" name="receiverEmail" value="cd@cidadedemocratica.org.br">');
    }

    $form.trigger('submit');

  });

});
