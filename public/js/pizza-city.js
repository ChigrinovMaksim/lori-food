let array = document.getElementById('page_animation').children;

for (let i = 0; array.length > i; i++) {
    setTimeout(function () {
        array[i].classList.add("show_body_content");
    }, (i + 1) * 200);
}

$(".body_restaurant_pizza_city").on('click', function () {
    let width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

    if (width < 400) {
        return;
    }

    let $targetElement = $(this).find('img');

    $('.pizza_city_restaurant_image').each(function (key, image) {
        let $image = $(image);
        if ($image.width() > 400) {
            $image.width('400px');
        }
    });

    if ($targetElement.width() > 400) {
        $targetElement.width('400px');
    } else {
        $targetElement.width('800px');
    }
});