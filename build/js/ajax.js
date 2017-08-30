function companysettings(){
    $.ajax({
        url : '../organisation/companysettings.html',
        type : 'GET',
        dataType : 'text',
        success  : function(data){
            
            $('#get-ajax-content').html(data);
        },
        error: function(xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(err.Message);
        },
        complete : function(com){
            console.log('You arrived here '+com);
        }
    })
}
function departments(){
    $.ajax({
        url : '../organisation/departments.html',
        type : 'GET',
        dataType : 'text',
        success  : function(data){
            
            $('#get-ajax-content').html(data);
        },
        error: function(xhr, status, error) {
            var err = eval("(" + xhr.responseText + ")");
            alert(err.Message);
        },
        complete : function(com){
            console.log('You arrived here '+com);
        }
    })
}