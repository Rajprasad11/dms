/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {
    var next = 1;
    $(".add-more").click(function (e) {
       e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<div id="field' + next + '"><div class="hr-dashed"></div>' +
                ' <div class="row">' +
                ' <div class="col-sm-4"><input type="text" class="form-control" name="" /></div>' +
                '<div class="col-sm-6"><div class="input-group">' +
                ' <span class="input-group-addon">' +
                'Rs.' +
                ' </span>' +
                ' <input type="text" class="form-control" />' +
                '  </div></div>' +
                ' <div class="col-sm-2"><button class="btn add-more" type="button">+</button></div>' +
                ' </div></div>';

        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) +'" class="btn btn-danger remove-me" > - </button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source', $(addto).attr('data-source'));
        $("#count").val(next);

        $('.remove-me').click(function (e) {
            e.preventDefault();
            var fieldNum = this.id.charAt(this.id.length - 1);
            var fieldID = "#field" + fieldNum;
            $(this).remove();
            $(fieldID).remove();
        });
    });



});
