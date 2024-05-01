document.getElementById('toggleMenu').addEventListener('click', function() {
    var menu = document.getElementById('menu');
    if (menu.style.display === 'none' || menu.style.display === '') {
        menu.style.display = 'block'; // Показывать меню при нажатии, если оно скрыто
    } else {
        menu.style.display = 'none'; // Скрывать меню при повторном нажатии, если оно отображается
    }
});

// Додамо обробник подій для меню
var menu = document.getElementById('menu');
var links = document.querySelectorAll('.menuLink');
var additionalDivs = document.querySelectorAll('.additionalDiv');

menu.addEventListener('mouseenter', function() {
    menu.style.display = 'block';
});

menu.addEventListener('mouseleave', function() {
    menu.style.display = 'none';
});

// Додамо обробники подій для посилань
for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function(event) {
        event.preventDefault(); // Заборона переходу за посиланням
        var target = this.getAttribute('data-target');
        // Приховуємо всі additionalDivs
        for (let j = 0; j < additionalDivs.length; j++) {
            additionalDivs[j].style.display = 'none';
            links[j].classList.remove('active'); // Забираємо клас active з посилання
        }
        // Показуємо лише вибраний additionalDiv
        document.getElementById(target).style.display = 'block';
        this.classList.add('active'); // Додаємо клас active до натиснутого посилання
    });
}

// Додамо обробник події для виходу курсора за межі меню
menu.addEventListener('mouseleave', function(event) {
    if (!menu.contains(event.relatedTarget)) {
        menu.style.display = 'none';
        // Приховуємо всі additionalDivs
        for (let j = 0; j < additionalDivs.length; j++) {
            additionalDivs[j].style.display = 'none';
            links[j].classList.remove('active'); // Забираємо клас active з посилання
        }
    }
});

function redirectToIndexKomp() {
    window.location.href = 'complecting.php';
}
function redirectToIndexMonitors() {
    window.location.href = 'monitors.php';
}
function redirectToIndexPerefiriya() {
    window.location.href = 'perefiriya.php';
}
function redirectToIndexNotebooks() {
    window.location.href = 'notebooks.php';
}

// Добавляем обработчик события клика на элемент 'komplektuyuchi' при загрузке страницы
if (window.innerWidth <= 1000) {
    document.getElementById('komplektuyuchi').addEventListener('click', redirectToIndexKomp);
    document.getElementById('monitori').addEventListener('click', redirectToIndexMonitors);
    document.getElementById('perefiriya').addEventListener('click', redirectToIndexPerefiriya);
    document.getElementById('notebooki').addEventListener('click', redirectToIndexNotebooks);
}

// Добавляем обработчик события изменения размера окна
window.addEventListener('resize', function() {
    // Если ширина окна меньше или равна 1200px, добавляем обработчик
    if (window.innerWidth <= 992) {
        document.getElementById('komplektuyuchi').addEventListener('click', redirectToIndexKomp);
        document.getElementById('monitori').addEventListener('click', redirectToIndexMonitors);
        document.getElementById('perefiriya').addEventListener('click', redirectToIndexPerefiriya);
        document.getElementById('notebooki').addEventListener('click', redirectToIndexNotebooks);
    } else {
        // Если ширина окна больше 1200px, удаляем обработчик
        document.getElementById('komplektuyuchi').removeEventListener('click', redirectToIndexKomp);
        document.getElementById('monitori').removeEventListener('click', redirectToIndexMonitors);
        document.getElementById('perefiriya').removeEventListener('click', redirectToIndexPerefiriya);
        document.getElementById('notebooki').removeEventListener('click', redirectToIndexNotebooks);
    }
});



