$("div").filter(":hidden").children("input[type='text']").attr("disabled", "disabled")

jQuery(function($) {
      $('#primary-switch1').click(function() {
        $('#myDIV2').toggleClass("hidden show")
        $("input").removeAttr('disabled');
      });
});

function checkRequired(element, fieldName) {
    var field = document.getElementById(fieldName);
    field.required = element.trim().length > 0;
}

