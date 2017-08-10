if(isHighDensity) {
    // enable hires images
    altair_helpers.retina_images();
}
if(Modernizr.touch) {
    // fastClick (touch devices)
    FastClick.attach(document.body);
}
$window.load(function() {
    // ie fixes
    altair_helpers.ie_fix();
});
var config = {

    duration: 500,


    delay: 200
};

Waves.init(config);
// Adds .waves-effect and .waves-light to <button> elems
Waves.attach('.side-btn', 'waves-light');

$(function() {
    altair_form_file_upload.init();
});


altair_form_file_upload = {
    init: function() {

        var progressbar = $("#file_upload-progressbar"),
            bar         = progressbar.find('.uk-progress-bar'),
            settings    = {
                action: '/', // Target url for the upload
                allow : '*.(jpg|jpeg|gif|png)', // File filter
                loadstart: function() {
                    bar.css("width", "0%").text("0%");
                    progressbar.removeClass("uk-hidden");
                },
                progress: function(percent) {
                    percent = Math.ceil(percent);
                    bar.css("width", percent+"%").text(percent+"%");
                },
                allcomplete: function(response,xhr) {
                    bar.css("width", "100%").text("100%");
                    setTimeout(function(){
                        progressbar.addClass("uk-hidden");
                    }, 250);
                    setTimeout(function() {
                        UIkit.notify({
                            message: "Upload Completed",
                            pos: 'top-right'
                        });
                    },280);
                }
            };

        var select = UIkit.uploadSelect($("#file_upload-select"), settings),
            drop   = UIkit.uploadDrop($("#file_upload-drop"), settings);
    }
};

$(document).ready(function(){
    if($(window).width() < 767){
        $('#body').addClass('sidebar_mini');
        $('#body').removeClass('sidebar_main_active');
        $('#companysettings-second-col').addClass('col-sm-offset-2').addClass('col-xs-offset-2');
        $('side-border').addClass('col-sm-offset-2').addClass('col-xs-offset-2');
    }else{
        //
    } 
});
