let menuBtnClicked;

window.addEventListener('DOMContentLoaded', () => {

    const menu = document.getElementById("page-nav");
    const btn = document.getElementById("menu-btn");
    const breakpoint = 980;

    if (window.innerWidth >= breakpoint) {
        menu.dataset.state = "open";
    } else {
        menu.dataset.state = "closed";
    }

    function btnClicked() {
        if (menu.dataset.state === "closed") {
            openMenu();
        } else {
            closeMenu();
        }
    }

    function openMenu() {
        if (menu.dataset.state === "closed") {
            menu.style.transform = "translateX(0)";
            btn.style.transform = `translateX(${menu.clientWidth.valueOf()}px) rotate(180deg)`;
            menu.dataset.state = "open";
        }
    }

    function closeMenu() {
        if (menu.dataset.state === "open") {
            menu.style.transform = "translateX(-100%)";
            btn.style.transform = 'translateX(0)';
            menu.dataset.state = "closed";
        }
    }

    window.onresize = () => {
        if (window.innerWidth >= breakpoint) {
            openMenu();
         } else {
            closeMenu();
         }
    }

    menuBtnClicked = btnClicked;
});

