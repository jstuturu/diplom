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
            <button class="menu-toggle" onclick="toggleMenu()">Контакти</button>
            <div class="menu-items" id="menuItems">
                <a href="aboutcompany.php">Про компанію</a>
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
                    <a href="aboutcompany.php"><li>Про компанію</li></a>
                        <a href="delivery.php"><li>Доставка</li></a>
                        <a href="payment.php"><li>Оплата</li></a>
                        <a href="contacts.php"><li class="active_a">Контакти</li></a>
                    </ul>
                </div>
            </nav>
            <div class="customers-content-text">
            <div class="customers-text-header"> Контакти </div>
                <div class="customers-content-text-contacts">
                    
                    <div class="customers-content-text-contacts-service">
                    <div class="header-contacts-service"> <img src="pics/5062832.png">Сервісний відділ </div>
                        <div class="contacts-row">
                            <div class="contacts-item">
                                <b>+38 (093) 111-22-33</b>
                                <p>З питань технічної підтримки</p>
                            </div>
                            <div class="contacts-item">
                                <b>service@techtrendy.com</b>
                                <p>Підтримка клієнтів</p>
                            </div>
                            <div class="contacts-item">
                                <p style="font-weight:600;"> Сервіс працює </p>
                                <p> Пн-Пт: 09:00 - 20:00</p>
                                <p> Сб-Нд: 10:00 - 20:00</p>
                            </div>
                        
                    </div>
                </div>
                <div class="customers-content-text-contacts-service">
                    <div class="header-contacts-service"> <img src="pics/35205.png" style="width: 30px">Call-центр </div>
                        <div class="contacts-row">
                            <div class="contacts-item">
                                <b>+38 (093) 123-45-68</b>
                                <b>+38 (093) 123-45-68</b>
                            </div>
                            <div class="contacts-item">
                                <b>sales@techtrendy.com</b>
                                <p>Загальні питання</p>
                            </div>
                            <div class="contacts-item">
                                <p style="font-weight:600;"> Call-центр працює </p>
                                <p> Пн-Пт: 09:00 - 20:00</p>
                                <p> Сб-Нд: 10:00 - 20:00</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="customers-content-text-contacts-service" style="border:none;">
                    <div class="header-contacts-service"> <img src="pics/263051.png" style="width: 30px">Онлайн чат</div>
                        <div class="contacts-row">
                            <div class="contacts-online-chat">
                                <a href="#" class="contacts-online-chat-link">
                                    Telegram</a>
                                <a href="#" class="contacts-online-chat-link">
                                    Viber </a>
                            </div>
                            <div class="contacts-item">
                                <p style="font-weight:600;"> Онлайн чат працює </p>
                                <p> Пн-Пт: 09:00 - 20:00</p>
                                <p> Сб-Нд: 10:00 - 20:00</p>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
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