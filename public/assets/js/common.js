$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    }
});
const callApi = (url, method, data, beforeS, callbackSuccess, callBackError) => {
    $.ajax({
        url: url,
        type: method,
        data: data,
        dataType: 'json',
        beforeSend: function () {
            if (beforeS) beforeS();
        },
        async: false,
        success: function (response) {
            if (callbackSuccess)  callbackSuccess(response);
        },
        error: function (error) {
            if (callBackError) callBackError(error);
        }
    })
}

