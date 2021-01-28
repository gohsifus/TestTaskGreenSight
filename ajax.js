$( document ).ready(function(){

    $('form').submit(function(event) {
        sendAjaxForm('result_form', 'ajax_form', 'action_ajax_form.php')
        event.preventDefault();
    });

});

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url: url,
        type: "POST",
        dataType: "html",
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) {
            result = $.parseJSON(response);
            if(result.error == 'false'){
                $('#ajax_form').hide();
                $('#message').html("Успешная регистрация");
            } else {
                $('#result_form').html(result.error);
                $('#result_form').show();
            }
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}

