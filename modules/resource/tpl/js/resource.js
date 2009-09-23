function completeChangeStatus() {
    location.reload();
}

function doSearchDependency() {
    var url = request_uri;
    if(typeof(xeVid)!='undefined') url.setQuery('vid', xeVid);
    url = url.setQuery('mid',current_mid).setQuery('act','dispResourceSearchDependency');
    popopen(url,'resourceSearchDependency');
}

function doDeleteDependency() {
    var s = jQuery('#sel_dependency');
    var o = s.find('option:selected');
    var i = s.get(0).selectedIndex;
    o.remove();
    var l = s.find('option').length;
    if(i+1>l) i=l-1;
    if(i>=0) s.get(0).selectedIndex = i;
}

function completeAttach(ret_obj, response_tags, callback_func_args, fo_obj) {
    fo_obj.act.value = 'procResourceAttachFile';
    fo_obj.submit();
}

function completeModifyAttach(ret_obj, response_tags, callback_func_args, fo_obj) {
    fo_obj.act.value = 'procResourceModifyAttachFile';
    fo_obj.submit();
}

function doDeletePackage(package_srl) {
    var params = new Array();
    params['package_srl'] = package_srl;
    params['mid'] = current_mid;
    exec_xml('resource','procResourceAdminDeletePackage', params, function() { location.reload(); });
}

function doDeleteAttach(package_srl, item_srl) {
    var params = new Array();
    params['package_srl'] = package_srl;
    params['item_srl'] = item_srl;
    params['mid'] = current_mid;
    exec_xml('resource','procResourceDeleteAttach', params, function() { location.reload(); });
}

function doInsertDependency(item_srl, text) {
    if(!opener) window.close();
    opener.doInsertDependencyItem(item_srl, text);
}

function doInsertDependencyItem(item_srl, text) {
    var o = jQuery('#sel_dependency');
    var stop = false;
    o.find('option').each( function() {
        if(this.value==item_srl) {
            stop = true;
            return;
        }
    });
    if(stop) return;
    o.append(jQuery("<option></option>").attr("value", item_srl).text(text));
}

function doCalDependency(fo_obj) {
    var o = jQuery('#sel_dependency');
    var dependency_srl = new Array();
    o.find('option').each( function() {
        dependency_srl.push(this.value);
    });
    jQuery('input[name=attach_dependency]').val(dependency_srl.join(','));
}

function doDeleteComment(package_srl, item_srl, comment_srl) {
    var params = new Array();
    params['package_srl'] = package_srl;
    params['item_srl'] = item_srl;
    params['comment_srl'] = comment_srl;
    if(typeof(xeVid)!='undefined') params['vid'] = xeVid;
    params['mid'] = current_mid;
    exec_xml('resource','procResourceDeleteComment', params);
}

jQuery(window).load( function() {
    jQuery('ul.starPoint').find('a').click(function() {
        var o = jQuery(this);
        jQuery('ul.starPoint').find('a').each( function(i) {
            if(i<o.attr('rel')) jQuery(this).addClass('on');
            else jQuery(this).removeClass('on');
        });
        jQuery('input[name=star_point]').val(o.attr('rel'));
    });
});


function doDeleteItem(package_srl, item_srl) {
    var params = new Array();
    params['package_srl'] = package_srl;
    params['item_srl'] = item_srl;
    if(typeof(xeVid)!='undefined') params['vid'] = xeVid;
    params['mid'] = current_mid;
    exec_xml('resource','procResourceDeleteItem', params, function() { location.reload(); });
}
