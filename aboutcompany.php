<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css?v=0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?> 
    
    <div class="customers-container">
    <div class="customers-content-nav-mobile">
            <div class="menu-container" id="menuContainer">
            <button class="menu-toggle" onclick="toggleMenu()">Про компанію</button>
            <div class="menu-items" id="menuItems">
                <a href="aboutcompany.php"  >Про компанію</a>
                <a href="delivery.php">Доставка</a>
                <a href="payment.php">Оплата</a>
                <a href="contacts.php">Контакти</a>
            </div>
        </div>
            </div>
        <div class="customers-content">
            
            <nav class="customers-content-nav">
                <div class="content-nav-links">
                    <ul>
                    <a href="aboutcompany.php"><li class="active_a">Про компанію</li></a>
                        <a href="delivery.php"><li>Доставка</li></a>
                        <a href="payment.php"><li>Оплата</li></a>
                        <a href="contacts.php"><li>Контакти</li></a>
                    </ul>
                </div>
            </nav>
            <div class="customers-content-text">
                <div class="customers-text-header"> Про компанію </div>
                
                <div class="aboutcompany-content-text-default">
                    <p>
                    Уявіть себе у світі, де швидкість технологічних змін завжди залишає вас у захваті.
                    У цьому світі кожен день принесе щось нове, щось захоплююче. 
                    Саме ця незбагненна енергія майбутнього надихнула на створення TechTrendy.
                    </p>
                    <p>
                    TechTrendy виникла в 2024 році з метою зробити технології доступними та зрозумілими для кожного.
                    </p>
                </div>
                <div class="customers-text-header"> Наша місія</div>
                <br>
                <div class="aboutcompany-mission-card">
                    Забезпечити клієнтів не лише найновішими пристроями, але й знаннями та підтримкою, щоб кожен 
                    міг вибрати та насолоджуватися технологіями без страху або незручностей.
                </div>
                <br>
                <div class="aboutcompany-content-text-default">
                    Ми віримо в те, що кожен заслуговує на доступ до найкращих інструментів,
                    які допоможуть реалізувати свої ідеї та мрії. Чи це потужний геймінг-комп'ютер для творчості,
                    чи надійний ноутбук для роботи - ми стежимо, щоб кожен клієнт отримав саме те, що потрібно саме йому.
                </div>
                <br>
                <div class="customers-text-header"> Що можна придбати в TechTrendy </div>
                <div class="aboutcompany-content-text-what-clients-can-buy"> 
                    <ul>
                        <a href=""><li>Комплектуючі</li></a>
                        <a href=""><li>Монітори</li></a>
                        <a href=""><li>Перефірія</li></a>
                        <a href=""><li>Ноутбуки</li></a>
                    </ul>
                </div>
                
                <div class="aboutcompany-content-text-end">
                    TechTrendy - це не просто інтернет-магазин. Це спільнота людей,
                     які об'єднані любов'ю до технологій та бажанням зробити світ краще, 
                     простіше та доступніше для всіх. І ми завжди тут, щоб підтримати вас на вашому шляху до майбутнього.
                </div>
        </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script>
     window.onload = function() {
    var menuContainer = document.getElementById('menuContainer');
    menuContainer.style.maxHeight = '38px'; // Устанавливаем начальную максимальную высоту
}

function toggleMenu() {
    var menuContainer = document.getElementById('menuContainer');
    var menuItems = document.getElementById('menuItems');
    var button = document.querySelector('.menu-toggle');
    button.classList.toggle('open'); // Переключение класса 'open'
    if (menuContainer.style.maxHeight === '38px') {
        setTimeout(function() {
            menuContainer.style.maxHeight = menuContainer.scrollHeight + 'px'; 
            menuItems.style.opacity = '1'; 
        }, 10); 
    } else {
        menuContainer.style.maxHeight = '38px';
    }
}

</script>
</body>
</html>