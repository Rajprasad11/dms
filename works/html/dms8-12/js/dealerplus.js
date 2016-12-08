
$(function () {
    $('.date').datetimepicker();
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

