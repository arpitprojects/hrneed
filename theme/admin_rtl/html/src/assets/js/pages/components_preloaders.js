/*
*  altair admin_rtl
*  @version v2.11.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  components_preloaders.js - components_preloaders.html
*/

$(function() {
    // show preloader
    $('#show_preloader_regular').click(function() {
        altair_helpers.content_preloader_show('regular');
        setTimeout(function() {
            altair_helpers.content_preloader_hide();
        },3000)
    });
    $('#show_preloader_md').click(function() {
        altair_helpers.content_preloader_show('md');
        setTimeout(function() {
            altair_helpers.content_preloader_hide();
        },3000)
    });
    $('#show_preloader_custom').click(function() {
        altair_helpers.content_preloader_show('md','danger','#preloader_dynamic',64,64);
        setTimeout(function() {
            altair_helpers.content_preloader_hide();
        },3000)
    })
});