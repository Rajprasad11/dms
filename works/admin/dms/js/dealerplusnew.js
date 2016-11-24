

/*Field Set Cloning on clicking add button. Button class should be defined as cloneAdd inside the node that has to cloned */

$(document).on('click', '.cloneAdd', function ($this) {
    var cloneCounter = 0;
    cloneCounter++;
    var oCloneId = $(this).parent().attr('id');
    var oClone = document.getElementById(oCloneId + 'Clones').cloneNode(true);
    //var oCloneChildren = oClone.children;
    oClone.id = (oCloneId + 'Rows');
    oClone.className = (oCloneId + 'C')
    //document.getElementById("placeholder").appendChild(oClone);
    var oCloneParent = $(this).parent().attr('id');
    document.getElementById(oCloneId).appendChild(oClone);

});


$(document).on('click', '.editAdd', function ($this) {
    alert("sdfkjdshukf");
    var editId = $(this).parent().attr('id');
    var parentInputs = document.getElementById(editId);

    $("#" + editId + " input").each(function () {

        if (!isNaN(this.value)) {
            $(this).attr('readOnly', false);
            $(this).attr('class', 'editEnabled')
        }
    });

});

$(document).on('click', '.imageUploader', function () {
    var datavalue = $(this).attr('data-value');
    var imageUploaderId = $(this).attr('id');
    $(imageUploaderId + datavalue).on('change', function () {
        var count = document.getElementById(imageUploaderId + datavalue);
        for (var i = 0; i < count.files.length; ++i)
        {
            var name = count.files.item(i).name;
            if (this.files && this.files[i]) {
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[i]);
            }
        }
        function imageIsLoaded(e) {
            $('#myImg' + datavalue).attr('src', e.target.result);
        }
        ;
        $(".file-5 i").hide();
    });

});
 