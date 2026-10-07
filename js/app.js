const menuButton =
    document.querySelector(
        '[data-menu-toggle]'
    );

const menu =
    document.querySelector(
        '[data-menu]'
    );

const backdrop =
    document.querySelector(
        '[data-menu-backdrop]'
    );


function openMenu() {

    if (!menuButton || !menu) {
        return;
    }


    document.body.classList.add(
        'menu-open'
    );


    menuButton.setAttribute(
        'aria-expanded',
        'true'
    );


    menuButton.setAttribute(
        'aria-label',
        'Fechar menu'
    );
}


function closeMenu() {

    if (!menuButton || !menu) {
        return;
    }


    document.body.classList.remove(
        'menu-open'
    );


    menuButton.setAttribute(
        'aria-expanded',
        'false'
    );


    menuButton.setAttribute(
        'aria-label',
        'Abrir menu'
    );
}


function toggleMenu() {

    const isOpen =
        document.body.classList.contains(
            'menu-open'
        );


    if (isOpen) {

        closeMenu();

        return;
    }


    openMenu();
}


menuButton?.addEventListener(
    'click',
    toggleMenu
);


backdrop?.addEventListener(
    'click',
    closeMenu
);


menu
    ?.querySelectorAll('a')
    .forEach((link) => {

        link.addEventListener(
            'click',
            closeMenu
        );

    });


document.addEventListener(
    'keydown',
    (event) => {

        if (event.key === 'Escape') {
            closeMenu();
        }

    }
);
