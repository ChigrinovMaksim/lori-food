let array = document.getElementById('page_animation').children;

for (let i = 0; array.length > i; i++) {
    setTimeout(function () {
        array[i].classList.add("show_body_content");
    }, (i + 1) * 200);
}

