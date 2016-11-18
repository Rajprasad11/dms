$(function () {
    $(":file").change(function () {
		var count = document.getElementById("uploadimage");
	
	
	
		for(var i = 0; i < count.files.length ; ++i)
	{
		
var name = count.files.item(i).name;


 if (this.files && this.files[i]) {
            var reader = new FileReader();
            reader.onload = imageIsLoaded;
            reader.readAsDataURL(this.files[i]);
        }

	}
	
    });
});

function imageIsLoaded(e) {
    $('#myImg').attr('src', e.target.result);
};
