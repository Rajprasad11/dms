$(document).ready(function () {
                $("#search-slide").slideUp(0);
            });

try {
    $('.date').datetimepicker();
    
} catch (err) {

}

$('input').bind("cut copy paste",function(e) {
          e.preventDefault();
      });
/*Field Set Cloning on clicking add button. Button class should be defined as cloneAdd inside the node that has to cloned */
var cloneCounter = 0;
$(document).on('click', '.cloneAdd', function ($this) {
    cloneCounter++;
    var oCloneId = $(this).parent().attr('id');
    var oClone = document.getElementById(oCloneId + 'Clones').cloneNode(true);
    oClone.id = (oCloneId + 'Rows');
//    oClone.className = (oCloneId + 'C')
    var oCloneParent = $(this).parent().attr('id');
    document.getElementById(oCloneId).appendChild(oClone);
    if ($('#' + oCloneId + 'Rows').length > 0) {
        $('.cloneRemove').show();
    }

});

$(document).on('click', '.cloneRemove', function ($this) {
    cloneCounter--;
    var oCloneId = $(this).parents(".cloneSet").attr('id');
    $('#'+oCloneId).remove();
});
$(document).ready(function () {
    $('.cloneRemove').hide();
});

$(document).on('click', '.editAdd', function ($this) {
    var editId = $(this).parent().attr('id');
    var parentInputs = document.getElementById(editId);
    $("#" + editId + " input").each(function () {
        $(this).attr('readOnly', false);
        $(this).attr('class', 'editEnabled form-control');
    });
});


            $(".search-click").click(function () {
               $("#search-slide").slideToggle();
            });
            $(".dropdown-toggle").click(function(){
               $(this).parent(".dropdown").ToggleClass("open");
//               $(this).children(".dropdown-menu").slideToggle();
            });
$(document).ready(function () {
//Input Numbers
$('.data-number').keydown(function (e) {
	    // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110]) !== -1 ||
             // Allow: Ctrl+A, Command+A

            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {

                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.keyCode === 32 || e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

$('.data-name').keydown(function (e) {
	    // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 32]) !== -1 ||
             // Allow: Ctrl+A, Command+A

            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {

                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if (( e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105) && (e.keyCode < 65 || e.keyCode > 90)) {
            e.preventDefault();
        }
    });
});
$.validate();
$(document).on('click', '.btn-primary', function ($this) {
	$.validate();
});
$(document).on('click', '.aria-validate', function ($this) {
	 $.validate({
                     onError : function($form) {
                     return false;
    },
    onSuccess : function($form) {
        console.log("test");
      $("form .aria-primary").click();
	 }
	 });
	
	
});