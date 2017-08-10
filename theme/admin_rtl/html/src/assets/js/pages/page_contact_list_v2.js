/*
*  altair admin_rtl
*  @version v2.11.0
*  @author tzd
*  @license http://themeforest.net/licenses
*  page_contact_list_v2.js - page_contact_list_v2.html
*/

$(function() {
    // contact list v2
    altair_contact_list_v2.init();
});

altair_contact_list_v2 = {
    init: function() {

        $("#contact_list_v2").listnav({
            filterSelector: '.listNavSelector',
            onClick: function(letter) {
                console.log(letter);
            }
        });

    }
};




