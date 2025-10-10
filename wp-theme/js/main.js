// let dropdown = document.querySelector('.menu'), //ul
// submenu = document.querySelector('.sub-menu'), //ul li a
// buttonClick = document.querySelector('.check-button'), //button
// hamburger = document.querySelector('.menu-icon');

// buttonClick.addEventListener( 'click', () => {
//     dropdown.classList.toggle('show-dropdown');
//     if( submenu ){
//         submenu.classList.toggle('show-dropdown');
//     }
//     hamburger.classList.toggle('animate-button');
// })


console.log("main.js loaded!");
console.log("main.js loaded!");

document.addEventListener("DOMContentLoaded", function () {
    let container = document.getElementById("container");
    let imgs_containers = document.getElementsByClassName("img_container");
    let imgs_count = imgs_containers.length;
    let current_img_index = 0;
    // let autoScroll_enabled = true;
    // let autoScroll_interval = 3000;
    // let autoScroll_dir = 1;

    function setup() {
        let container_width = container.clientWidth;
        for (let i = 0; i < imgs_count; i++) {
            let element = imgs_containers[i];
            let new_left_pos = container_width * i;
            element.style.left = new_left_pos + "px";
        }
    }

    function goToSlide(index) {
        let container_width = container.clientWidth;
        for (let i = 0; i < imgs_count; i++) {
            let element = imgs_containers[i];
            let new_left_pos = container_width * (i - index);
            element.style.left = new_left_pos + "px";
        }
        current_img_index = index;
    }

    window.onLeftButton = function () {
        if (current_img_index > 0) {
            goToSlide(current_img_index - 1);
        }
    };

    window.onRightButton = function () {
        if (current_img_index < imgs_count - 1) {
            goToSlide(current_img_index + 1);
        }
    };

    window.currentSlide = function (n) {
        goToSlide(n - 1);
    };

    function autoScroll() {
        if (!autoScroll_enabled) return;
        if (current_img_index === 0) autoScroll_dir = 1;
        else if (current_img_index === imgs_count - 1) autoScroll_dir = -1;

        goToSlide(current_img_index + autoScroll_dir);
    }

    setup();
    window.addEventListener("resize", setup);
    setInterval(autoScroll, autoScroll_interval);
});


function currentSlide(n) {
    if (n >= 1 && n <= imgs_count) {
        current_img_index = n - 1;
        let container_width = container.clientWidth;
        for (let i = 0; i < imgs_count; i++) {
            let element = imgs_containers[i];
            let new_left_pos = container_width * (i - current_img_index);
            element.style.left = new_left_pos + "px";
        }
    }
}

