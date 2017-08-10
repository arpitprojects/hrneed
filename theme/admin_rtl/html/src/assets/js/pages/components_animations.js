/*
*  altair admin_rtl
*  @version v2.11.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  components_animations.js - components_animations.html
*/

$(function() {
    $('#replay-animations').on('click',function(e) {
        e.preventDefault();
        altair_helpers.hierarchical_show('#hierarchical-show');
        altair_helpers.hierarchical_slide('#hierarchical-slide');
    })
});