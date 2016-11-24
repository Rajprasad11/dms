
$(function () {
    $('.date').datetimepicker();
});


/*Field Set Cloning on clicking add button. Button class should be defined as cloneAdd inside the node that has to cloned */

$(document).on('click', '.cloneAdd', function ($this) {
    var cloneCounter = 0;
    cloneCounter++;
    var oCloneId = $(this).parent().attr('id');
    var oClone = document.getElementById(oCloneId + 'Clones').cloneNode(true);
    //var oCloneChildren = oClone.children;
    oClone.id = (oCloneId + 'Rows');
//    oClone.className = (oCloneId + 'C')
    //document.getElementById("placeholder").appendChild(oClone);
    var oCloneParent = $(this).parent().attr('id');
    document.getElementById(oCloneId).appendChild(oClone);

});

$(document).on('click', '.cloneRemove', function ($this) {
   
     $(this).parent().remove();

});
$(document).ready(function(){
    $(".contactAddressC .cloneRemove").hide();
});
$(document).on('click', '.editAdd', function ($this) {
    var editId = $(this).parent().attr('id');
    var parentInputs = document.getElementById(editId);

    $("#" + editId + " input").each(function () {

        if (!isNaN(this.value)) {
            $(this).attr('readOnly', false);
            $(this).attr('class', 'editEnabled')
        }
    });

});

