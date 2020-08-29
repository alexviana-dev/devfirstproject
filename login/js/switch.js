//switch button
$("div").filter(":hidden").children("input[type='text']").attr("disabled", "disabled")

jQuery(function($) {
      $('#primary-switch1').click(function() {
        $('#myDIV2').toggleClass("hidden show")
        $("input").removeAttr('disabled');
      });
});

//field area required
function checkRequired(element, fieldName) {
    var field = document.getElementById(fieldName);
    field.required = element.trim().length > 0;
}


//checkbox required
function validate() {
  var checkbox= document.querySelector('input[name="checkboxName[]"]:checked');
  if(!checkbox) {
    alert('Please, select at least one Use Case Type on Step 2!');
    return false;
  }
}

//text required after checkbox checked
$(document).ready(function() {

    $('input[id="second-checkbox"]').change(function() {

        if ($('input[id="details1"]').attr('required')) {
            $('input[id="details1"]').removeAttr('required');
        } 

        else {
            $('input[id="details1"]').attr('required','required');
        }

    });

});

$(document).ready(function() {

    $('input[id="third-checkbox"]').change(function() {

        if ($('input[id="details2"]').attr('required')) {
            $('input[id="details2"]').removeAttr('required');
        } 

        else {
            $('input[id="details2"]').attr('required','required');
        }

    });

});

$(document).ready(function() {

    $('input[id="forth-checkbox"]').change(function() {

        if ($('input[id="details3"]').attr('required')) {
            $('input[id="details3"]').removeAttr('required');
        } 

        else {
            $('input[id="details3"]').attr('required','required');
        }

    });

});

$(document).ready(function() {

    $('input[id="fith-checkbox"]').change(function() {

        if ($('input[id="details4"]').attr('required')) {
            $('input[id="details4"]').removeAttr('required');
        } 

        else {
            $('input[id="details4"]').attr('required','required');
        }

    });

});