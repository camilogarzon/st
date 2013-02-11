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

function callAjaxForm(ladata, callBackFn){
    cursorBusy();
    jQuery.ajax({
        data: ladata , 
        type: "GET", 
        dataType: "json", 
        url: "iframe/ajax/rqst.php", 
        success: callBackFn
    });
}

function setrequirefield(id){
    jQuery("#"+id).addClass("requirefield");
}


function parcejson(){
    var str = '{\"registro_fecha\":\"2013-02-10\",\"registro_sistema\":\"nombre sistema\",\"registro_actividad\":\"4\",\"undefined\":\"CARGAR\",\"registro_campo01\":\"2 horas\",\"registro_campo02\":\"0\",\"registro_campo03\":\"2013-02-12\",\"registro_campo04\":\"1\",\"registro_campo05\":\"0\",\"registro_campo06\":\"cerrado autom","nota":"las notas van aqu","fecha":"2013-02-10","tsfecha":"2013-02-10 08:23:13"}';
    var obj = JSON.parse(str);
    alert('registro_fecha1 = '+ obj.registro_fecha);
    alert('registro_fecha2 = '+ obj["registro_fecha"]);
    jQuery("#registro :input").each(function() {
        var idprop = jQuery(this).attr('id');
        if (obj.hasOwnProperty(idprop)){
            jQuery(this).val(obj[idprop]);
        }
    });
}
        
function clearForm(id){
    jQuery("#"+id+" :input").each(function() {
        if ('button' != jQuery(this).attr('type')){
            jQuery(this).val('');
        }
    });
    jQuery('select').val('seleccione');
}

function populateForm(id, jo){
    jQuery("#"+id+" :input").each(function() {
        var p = jQuery(this).attr('id');
        if (jo.hasOwnProperty(p)){
            jQuery(this).val(jo[p]);
        }
    });
}

function stringifyFormJson(id){
    var jo = {};
    jQuery("#"+id+" :input").each(function() {
        jo[jQuery(this).attr('id')] = jQuery(this).val();
    });
    return JSON.stringify(jo);
}

function applyDatepicker(id){
    jQuery( "#"+id ).datepicker( jQuery.datepicker.regional[ "es" ] );
    jQuery( "#"+id ).datepicker( "option", "dateFormat", "yy-mm-dd");
}
