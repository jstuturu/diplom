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
            <button class="menu-toggle" onclick="toggleMenu()">Оплата</button>
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
                    <a href="aboutcompany.php"><li>Про компанію</li></a>
                        <a href="delivery.php"><li >Доставка</li></a>
                        <a href="payment.php"><li class="active_a">Оплата</li></a>
                        <a href="contacts.php"><li>Контакти</li></a>
                    </ul>
                </div>
            </nav>
            <div class="customers-content-text">
                <div class="customers-text-header"> Оплата </div>
                <br>
                <div class="aboutcompany-content-text-default" style="border: 1px solid #b9b9b9; padding: 10px; background-color: #e9e9e9;">
                 Шановні клієнти! З вашого боку потрібна передоплата лише у 1-му випадку:
                 <p style="margin-left: 20px;">При замовленні на суму від 100 000 грн. з доставкою Новою поштою або Укрпоштою. У цьому разі передоплата становить 10%. Інші 90% можна виплатити на відділенні пошти після отримання товару. </p>
                 Зверніть увагу, що при сплаті за реквізитами банк може брати комісію у різному розмірі (залежить від суми платежу).
                Комісії за накладений платіж немає
                </div>
                <br>
                <div class="customers-text-header"> Способи оплати </div>
                
                <p style="font-size: 17px; font-weight: 600;">Післяплата</p>
                <div class="aboutcompany-mission-card">
                Виконайте післяплату в момент отримання замовлення. Обов'язково перевірте товар та заповніть всі 
                необхідні документи. Сплатити за товар можна у пунктах видачі поштових операторів
                Нова пошта, Укрпошта.
                </div>
                <p style="font-size: 17px; font-weight: 600;">Оплата карткою при отриманні товару</p>
                <div class="aboutcompany-mission-card">
                Сплачуйте товар цим способом при отриманні замовлення. Перед цим перевірте сам товар та заповніть необхідні документи. Сплатити можна у пунктах видачі поштових операторів та у шоурумах.
                Оплата здійснюється через сервіс Portmone або NovaPay. Максимальна вартість товару при оплаті карткою не може перевищувати 150 000 грн.
                </div>
                <br>
                
    
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