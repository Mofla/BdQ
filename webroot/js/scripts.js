// image preview in forms
var imgPreview = function(event) {
    var input = event.target;
    var reader = new FileReader();
    reader.onload = function(){
        var dataURL = reader.result;
        var output = document.getElementById('file');
        output.src = dataURL;
    };
    reader.readAsDataURL(input.files[0]);
};


// confirm passwords in forms
$('.form-confirm').submit(function() {
    var pass = $('input[name=password]').val();
    var confirm = $('input[name=confirm_password]').val();
    console.log(pass);
    console.log(confirm);
    if (pass === confirm) {
        return true;
    }
    else
    {
        alert('Les mots de passe ne correspondent pas.')
        return false;
    }
});


// box-articles animation (showing up one per one)
function showDiv(div)
{
    $('.'+div+':hidden').each(function(i) {
        setTimeout(function(element) {
            element.fadeIn();
        }, i * 500, $(this));
    });
}

// navbar li active
$('.navbar').find('li').on('mouseenter mouseleave',function () {
    $(this).toggleClass('active')
})

function sameHeight(element)
{
    var height = 0;
    $(element).each(function (index) {
        if($(this).height()>height){
            height = $(this).height();
        }
    });
    $(element).height(height+50);
}