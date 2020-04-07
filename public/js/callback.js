function validateField(elem, length = null, message = null) {
    let jqElem = $(elem);
    let elemLength = jqElem.val().length;

    jqElem.parent().find('label').remove();

    if (jqElem.hasClass('user-phone')) {
        elemLength = jqElem.val().replace(/_/g, '').length;
    }

    if (length !== null && elemLength < length) {
        jqElem.parent().append('<label class="error">' + message + '</label>');
    }
}

function sendCallbackRequest(modalId) {
    let name = $("input[name='callback_name']");
    let phone = $("input[name='callback_phone']");
    let modal = $('#' + modalId + ' [aria-label="Close"]');
    let btn = $('.callback-submit');

    btn.attr("disabled", true);

    validateField(name, 2, "Имя должно быть больше двух символов!");
    validateField(phone, 19, "Введите телефон полностью!");

    if (name.parent().find('label').length === 0 && phone.parent().find('label').length === 0) {
        $.ajax({
            type: 'POST',
            data: {
                _token: CSRFToken,
                callback_name: name.val(),
                callback_phone: phone.val(),
            },
            url: '/callback',
            success: function () {
                modal.trigger('click');

                swal({
                    title: "Ваш заявка отправлена.",
                    text: "В ближайщее время с вами свяжется наш оператор.",
                    icon: "success",
                    buttons: [null, 'Ок'],
                    timer: 5000
                });
            }
        });
    }

    setTimeout(function () {
        btn.removeAttr("disabled");
    }, 1000);
}

(function ($) {

    var $body;

    $(document).ready(function () {
        $body = $('body');

        $body
            .find('.user-phone').each(function () {
            $(this).mask("+38 (999) 999-99-99", {autoclear: false});
        });
    });

})(jQuery);

$("#callback_from").validate({
    rules: {
        name: {
            required: true,
        },
    },
    messages: {
        name: {
            required: "Введите свое имя!",
        },
    }
});