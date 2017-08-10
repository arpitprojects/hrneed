/*
*  altair admin
*  @version v2.11.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  page_gallery.js - page_gallery.html
*/

$(function() {
    var $grid = $('#galleryGrid');
    $grid.waitForImages(function() {
        console.log('All images have loaded.');
        var grid = UIkit.grid($grid, {
            gutter: 16
        });
    });
});