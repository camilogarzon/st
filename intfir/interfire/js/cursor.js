function cursorBusy(){
    jQuery('body').css('cursor', 'wait');
}
function cursorNormal(){
    jQuery('body').css('cursor', '');
}
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
function callAjaxRqst(ladata, callBackFn){
    cursorBusy();
    jQuery.ajax({
        data: ladata , 
        type: "GET", 
        dataType: "json", 
        url: "ajax/rqst.php", 
        success: callBackFn
    });
}

function setrequirefield(id){
    jQuery("#"+id).addClass("requirefield");
}
