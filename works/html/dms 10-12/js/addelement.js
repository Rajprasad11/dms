/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="col-sm-3">' + '<label>Insurance</label>' + 
                                                '</div>' + '<div class="col-sm-4"><input type="file" name="mytext[]" class="BSbtninfo"/></div>' +
                                                '<div class="col-sm-2"><button class="add_field_button"><i class="fa fa-plus"></i></button></div>' + 
                                                '<div class="col-sm-3 prog-onile"><div class="progress progress-striped active">' +
                                                        '<div class="progress-bar" style="width: 45%"></div>' +
                                                    '</div></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
/*$(document).ready(function () {
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



});*/
