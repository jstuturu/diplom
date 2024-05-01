          
 var aboutLink = document.getElementById('about-link');
 var deliveryLink = document.getElementById('delivery-link');
 var paymentLink = document.getElementById('payment-link');
 var contactLink = document.getElementById('contact-link');
 
 // Отримання блоків з інформацією
 var aboutInfo = document.getElementById('about-info');
 var deliveryInfo = document.getElementById('delivery-info');
 var paymentInfo = document.getElementById('payment-info');
 var contactInfo = document.getElementById('contact-info');
 
 // Додавання обробників подій клікання на посилання навігації



// Додати обробник клікання на посилання у футері
// Додати обробник клікання на посилання у футері



aboutLink.addEventListener('click', function() {
    showInfo(aboutInfo);

});

deliveryLink.addEventListener('click', function() {
    showInfo(deliveryInfo);

});

paymentLink.addEventListener('click', function() {
    showInfo(paymentInfo);

});

contactLink.addEventListener('click', function() {
    showInfo(contactInfo);
   
});
 
 // Функція для перезавантаження сторінки
 function reloadPage() {
     window.location.reload();
 }
 
 // Функція для показу блоку з інформацією та приховання інших
 function showInfo(infoBlock) {
     // Приховати всі блоки з інформацією
     var infoBlocks = document.getElementsByClassName('title-pokupciam');
     for (var i = 0; i < infoBlocks.length; i++) {
         infoBlocks[i].style.display = 'none';
     }
     // Показати потрібний блок
     infoBlock.style.display = 'block';
 }
 document.addEventListener('DOMContentLoaded', function() {
     // Отримати фрагмент URL
     var hash = window.location.hash.substr(1);
 
     // Викликати showInfo() згідно з фрагментом URL
     if (hash === 'about-info') {
         showInfo(document.getElementById('about-info'));
     } else if (hash === 'delivery-info') {
         showInfo(document.getElementById('delivery-info'));
     } else if (hash === 'payment-info') {
         showInfo(document.getElementById('payment-info'));
     } else if (hash === 'contact-info') {
         showInfo(document.getElementById('contact-info'));
     } else {
         // Якщо фрагмент URL порожній або неправильний, спробуйте відновити ID блоку з localStorage
         var selectedBlockId = localStorage.getItem('selectedBlock');
         var selectedBlock = document.getElementById(selectedBlockId);
         if (selectedBlock) {
             showInfo(selectedBlock);
         }
     }
 });
 function showInfo(infoBlock) {
     // Приховати всі блоки з інформацією
     var infoBlocks = document.getElementsByClassName('title-pokupciam');
     for (var i = 0; i < infoBlocks.length; i++) {
         infoBlocks[i].style.display = 'none';
     }
     // Показати потрібний блок
     infoBlock.style.display = 'block';
 
     // Зберегти ID обраного блоку в localStorage
     localStorage.setItem('selectedBlock', infoBlock.id);
 }


 
 function reloadPageWithHash(hash) {
     window.location.href = 'pokupciam.php#' + hash;
     window.location.reload(true); // Перезавантаження сторінки з очищенням кешу
 }