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
                    },100);
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

    if($(window).width() < 767){
        $('#companysettings-second-col').addClass('col-sm-offset-2').addClass('col-xs-offset-2');
    }else{
        //
    } 
});



$(function() {
    // dropify file input
    altair_form_file_dropify.init();
});


altair_form_file_dropify = {
    init: function() {

        $('.dropify').dropify();

        $('.dropify-fr').dropify({
            messages: {
                default: 'Upload Or Replace',
                replace: 'Replace',
                remove:  'Remove',
                error:   'Error While Uploading the picture'
            }
        });

    }
};

$(function() {
    // dragula.js
    altair_sortable.dragula_sortable();
});

altair_sortable = {
    dragula_sortable: function () {
        var drake = dragula([document.getElementById('dragula_sortable')]);

        // add class to dragula containers
        var containers = drake.containers,
            length = containers.length;

        for (var i = 0; i < length; i++) {
            $(containers[i]).addClass('dragula');
        }

        // refresh grid on drop
        drake.on('drop',function(){

            UIkit.$html.trigger('changed.uk.dom');
            $window.resize();
        })

    }
};

$(function() {

    if(Modernizr.touch) {
        // make table cell focusable
        var $focus_highlight = $('.focus-highlight');
        if ( $focus_highlight.length ) {
            $focus_highlight
                .find('td, th')
                .attr('tabindex', '1')
                .on('touchstart', function() {
                $(this).focus();
            });
        }
        // disable fastclick on table headers (touch devices)
        $('.tablesorter').find('th').addClass('needsclick');
    }

    // list view
    altair_issues.list_view();
});

altair_issues = {
    list_view: function() {

        var $ts_issues = $("#ts_issues");

        // define pager options
        var pagerOptions = {
            // target the pager markup - see the HTML block below
            container: $(".ts_pager"),
            // output string - default is '{page}/{totalPages}'; possible variables: {page}, {totalPages}, {startRow}, {endRow} and {totalRows}
            output: '{startRow} - {endRow} / {filteredRows} ({totalRows})',
            // if true, the table will remain the same height no matter how many records are displayed. The space is made up by an empty
            // table row set to a height to compensate; default is false
            fixedHeight: true,
            // remove rows from the table to speed up the sort of large tables.
            // setting this to false, only hides the non-visible rows; needed if you plan to add/remove rows with the pager enabled.
            removeRows: false,
            // go to page selector - select dropdown that sets the current page
            cssGoto: '.ts_gotoPage'
        };

        // Initialize tablesorter
        var ts_users = $ts_issues
        .tablesorter({
            theme: 'altair',
            widthFixed: true,
            widgets: ['zebra', 'filter']
        })
        // initialize the pager plugin
        .tablesorterPager(pagerOptions)
        .on('pagerComplete', function(e, filter){
            // update selectize value
            if(typeof selectizeObj !== 'undefined' && selectizeObj.data('selectize')) {
                selectizePage = selectizeObj[0].selectize; selectizePage.setValue($('select.ts_gotoPage option:selected').index() + 1, false);
            }
        });

        // replace 'goto Page' select
        function createPageSelectize() {
            selectizeObj = $('select.ts_gotoPage')
                .val($("select.ts_gotoPage option:selected").val())
                .after('<div class="selectize_fix"></div>')
                .selectize({
                hideSelected: true,
                onDropdownOpen: function($dropdown) {
                    $dropdown
                        .hide()
                        .velocity('slideDown', {
                        duration: 280,
                        easing: easing_swiftOut
                    });
                },
                onDropdownClose: function($dropdown) {
                    $dropdown
                        .show()
                        .velocity('slideUp', {
                        duration: 280,
                        easing: easing_swiftOut
                    });
                    // hide tooltip
                    $('.uk-tooltip').hide();
                }
            });
        }
        createPageSelectize();

        // replace 'pagesize' select
        $('.pagesize.ts_selectize')
            .after('<div class="selectize_fix"></div>')
            .selectize({
            hideSelected: true,
            onDropdownOpen: function($dropdown) {
                $dropdown
                    .hide()
                    .velocity('slideDown', {
                    duration: 280,
                    easing: easing_swiftOut
                })
            },
            onDropdownClose: function($dropdown) {
                $dropdown
                    .show()
                    .velocity('slideUp', {
                    duration: 280,
                    easing: easing_swiftOut
                });

                // hide tooltip
                $('.uk-tooltip').hide();
                if(typeof selectizeObj !== 'undefined' && selectizeObj.data('selectize')) {
                    selectizePage = selectizeObj[0].selectize;
                    selectizePage.destroy();
                    $('.ts_gotoPage').next('.selectize_fix').remove();
                    setTimeout(function() {
                        createPageSelectize()
                    })
                }

            }
        });

    }
};
//To be used later

function displayMapAt(lat, lon, zoom) {
    $("#map")
        .html(
        "<iframe id=\"map_frame\" "
        + "width=\"100%\" height=\"600px\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" "
        + "src=\"https://www.google.sk/maps?f=q&amp;output=embed&amp;source=s_q&amp;hl=sk&amp;geocode=&amp;q=https:%2F%2Fwww.google.sk%2Fmaps%2Fms%3Fauthuser%3D0%26vps%3D5%26hl%3Dsk%26ie%3DUTF8%26oe%3DUTF8%26msa%3D0%26output%3Dkml%26msid%3D205427380680792264646.0004fe643d107ef29299a&amp;aq=&amp;sll=48.669026,19.699024&amp;sspn=4.418559,10.821533&amp;ie=UTF8&amp;ll="
        + lat + "," + lon
        + "&amp;spn=0.199154,0.399727&amp;t=m&amp;z="
        + zoom + "\"" + "></iframe>");
}
//End of to be used later

function toggle_list_grid(){
    //var flag = 0;
    var grid = document.getElementById('grid-view-employee');
    var list = document.getElementById('list-view-employee');
    var btn1 = document.getElementById('btn1');
    var btn2 = document.getElementById('btn2');
    grid.className += ' display-none';
    $('#list-view-employee').removeClass('display-none');
    btn1.className += ' display-none';
    $('#btn2').removeClass('display-none');
}

function toggle_grid_btn(){
    var grid = document.getElementById('grid-view-employee');
    var list = document.getElementById('list-view-employee');
    var btn1 = document.getElementById('btn1');
    var btn2 = document.getElementById('btn2');
    $('#grid-view-employee').removeClass('display-none');
    list.className += ' display-none';
    btn2.className += ' display-none';
    $('#btn1').removeClass('display-none');
}

$(document).ready(function(){
    $('tr.tablesorter-filter-row.tablesorter-ignoreRow td:first-child').addClass('display-none');
    //$("td[data-column='7']").addClass('display-none');
});


$(function(){
    altair_form_adv.masked_inputs();
})
altair_form_adv = {
    masked_inputs: function() {
        $maskedInput = $('.masked_input');
        if($maskedInput.length) {
            $maskedInput.inputmask();
        }
    }
};

/*tab implemented  */

!function(name, definition) {
    if (typeof module != 'undefined' && module.exports) module.exports = definition();
    else if (typeof define == 'function') define(definition);
    else this[name] = definition();
}('tabs', function() {

    return function tabs(container) {
        var tabs = container.querySelectorAll('.tab');
        var panes = container.querySelectorAll('.tab-pane');

        each(tabs, function(i, tab) {
            tab.addEventListener('click', function(e) {
                activate(tabs, i);
                activate(panes, i);
            });
        })

        function activate(tabs, index) {
            each(tabs, function(i, tab) {
                if (i != index) {
                    removeClass(tab, 'active')
                } else {
                    addClass(tab, 'active')
                }
            });
        }
    }

    function each(elements, fn) {
        for (var i = elements.length - 1; i >= 0; i--) {
            fn(i, elements[i]);
        }
    }

    function hasClass(el, cls) {
        return el.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
    }

    function addClass(el, cls) {
        if (!hasClass(el, cls)) {
            el.className += " " + cls;
        }
    }

    function removeClass(el, cls) {
        if (hasClass(el, cls)) {
            var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
            el.className = el.className.replace(reg, '');
        }
    }
});

var container=document.querySelector('.tab-container')
tabs(container);