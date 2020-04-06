let array = document.getElementById('page_animation').children;

for (let i = 0; array.length > i; i++) {
    setTimeout(function () {
        array[i].classList.add("show_body_content");
    }, (i + 1) * 200);
}

$(".body_restaurant_knjaga_vtiha").on('click', function () {
    $('.knjaga_vtiha_restaurant_image').each(function (key, image) {
        let $image = $(image);
        if ($image.width() > 400) {
            $image.width('400px');
        }
    });

    $(this).find('img').width('800px');
});

$(".body_restaurant_knjaga_vtiha").on('click', function () {
    $('.knjaga_vtiha_restaurant_image').each(function (key, image) {
        let $image = $(image);
        if ($image.width() === 800) {
            $image.width('400px');
        }
    });
});
