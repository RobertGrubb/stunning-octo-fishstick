async function api(route, params = {}, method = "get", enctype = undefined) {
    return $.ajax({
        url: route,
        type: method.toUpperCase(),
        dataType: "json",
        data: params,
        enctype: enctype,
    });
}

/**
 * Shows toast notification
 */
function showToast(type, title, content, timing = 5) {
    $.toast({
        type: type,
        title: title,
        content: content,
        delay: timing * 1000,
    });
}
