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
            <button class="menu-toggle" onclick="toggleMenu()">Доставка</button>
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
                        <a href="delivery.php"><li class="active_a">Доставка</li></a>
                        <a href="payment.php"><li>Оплата</li></a>
                        <a href="contacts.php"><li>Контакти</li></a>
                    </ul>
                </div>
            </nav>
            <div class="customers-content-text">
                <div class="customers-text-header"> Доставка </div>
                
                <div class="aboutcompany-content-text-default">
                    <p>
                    Отримати своє замовлення ви можете в будь-якому місті України.
                    </p>
                    <p>
                    Практично всі товари є на складі в момент оформлення замовлення, тому більше 80% замовлень відправляються протягом доби.   
                    </p>
                    
                </div>
                <div class="customers-text-header"> Способи доставки</div>
                <div class="sposob-dostavki"> 1. У відділення Нової пошти</div>
                <br>
                <div class="aboutcompany-mission-card">
                  <p> Переглянути вартість доставки можна за цим посиланням «<a href="https://novapost.com/uk-ua/shipping-cost">Вартість посилки</a>». </p>
                  <p> Терміни доставки замовлення складають 1-3 робочих дня.  </p>
                  <p> Ви можете відстежувати своє замовлення на сайті «<a href="https://novaposhta.ua/">Нова Пошта</a>». </p>
                </div>
                <br>
                <div class="sposob-dostavki"> 2. У відділення Укр пошти</div>
                <br>
                <div class="aboutcompany-mission-card">
                  <p> Переглянути вартість доставки можна за цим посиланням «<a href="https://www.ukrposhta.ua/ua/taryfy-ukrposhta-ekspres">Вартість посилки</a>». </p>
                  <p> Терміни доставки замовлення складають 2-4 робочих дня.  </p>
                  <p> Ви можете відстежувати своє замовлення на сайті «<a href="https://track.ukrposhta.ua/tracking_UA.html">Укр пошта</a>». </p>
                </div>
                <div class="aboutcompany-content-text-default">
                    <p>
                    <b style="font-weight: 600; margin: 0px; font-size: 15px;">Важливо!</b> Обов'язково перевірте цілісність, 
                    стан і зовнішній вигляд товару до підписання товарно-транспортної накладної та здійснення оплати.
                    </p>
                    <p>
                    За збереження замовлених вами товарів під часі доставки несуть відповідальність кур'єри і служба доставки.
                    </p>
                    <p>
                    У разі пошкодження товару необхідно відмовитися від отримання замовлення, обов'язково скласти 
                    Претензію або Акт невідповідності, а також повідомити нам про те, що трапилося за номером: +38 (093) 123-45-68 або +38 (093) 123-45-68.
                    </p>
                    <p>
                    На жаль, в разі отримання вами пошкодженого товару без складеної спільно з співробітником компанії 
                    перевізника претензії, ми не зможемо компенсувати вам вартість оплаченого замовлення або обміняти його на нове.
                    </p>
                    <p>
                    Якщо потрібний підйом на поверх, ви можете замовити його додатково у логістичної компанії 
                    або повідомте про це нашому співробітнику колл-центру під час оформлення замовлення. Послуга доставки на поверх оплачується додатково.
                    </p>
                    <p style="font-weight: 600; margin: 0px; font-size: 15px;">
                    Перевірка цілісності товару
                    </p>
                    <p>
                    Перед тим, як забрати замовлений вами товар, перевірте:
                    </p>
                    <div class="product-integrity"> 
                        <p>
                        <b>1.</b>  Упаковку товару. Вона має бути не порушена та не пошкоджена;
                        </p>
                        <p>
                        <b>2.</b> Цілісність товару та відсутність на ньому механічних пошкоджень;
                        </p>
                        <p>
                        <b>3.</b> Відповідність товару по комплектації, кольору та моделі, зазначеним у чеку.
                        </p>
                    </div>
                    <p>
                    Тільки після того, як ви переконалися, що товар відповідає вашим очікуванням і не має зовнішніх дефектів, 
                    ви можете підписувати товарно-транспортну накладну або акт приймання-передачі – залежно від того, яким способом ви отримуєте замовлення.
                    </p>
                    
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