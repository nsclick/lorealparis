(function (window, $, undefined) {
  $(document).ready(function () {
    console.log('LorealParis');
    
    var form            = $('#data_form'),
        formSubmitBtn   = form.find('.input_submit').first();
    
    form.validationEngine('attach', {promptPosition : "bottomLeft", autoPositionUpdate : true, scroll: false});
    
    form.submit(onSubmit);
    
    function onSubmit () {
      var validate = form.validationEngine('validate');
      if (!validate) {
        return false;
      }
    }
    
    if (window.hasOwnProperty('ga')) {
      var label = window.hasOwnProperty('ef') ? window.ef : 'NA';
      ga('send', 'event', 'efecto-californiano', 'seleccionado', label, 1);
    }
    
  });
})(window, jQuery);