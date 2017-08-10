/*
*  altair admin_rtl
*  @version v2.11.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  plugins_filemanager.js - plugins_filemanager.html
*/

$(function() {
    // filemanager
    $('#fileManager').elfinder({
        height: $('body').height() - 140,
        url : 'file_manager/php/connector.minimal.php',  // connector URL (REQUIRED)
        lang: 'ar'                        // language (OPTIONAL)
    });
});