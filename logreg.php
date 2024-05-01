<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="logreg_css_js/style.css">
    <title>TechTrendy</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up">
        <form action="#" method="post">
                <h1 class="zagolovok">Створити Акаунт</h1>
                <input type="text" placeholder="Login" id="login">
                <input type="email" placeholder="Email" id="email">
                <input type="password" placeholder="Password" id="password">
                <a href="index.php">Увійти без реєстрації</a>
                <button type="submit">Зареєструватись</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="#" method="post">
                <h1 class="zagolovok">Увійти</h1>
                <input type="login" placeholder="Login" id="login" >
                <input type="password" placeholder="Password" id="password">
                <a href="index.php">Увійти без реєстрації</a>
                <button type="submit">Увійти</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1 class="zagolovok">З поверненням!</h1>
                    <p>Якщо вже маєте акаунт, ви можете увійти до нього, натиснувши кнопку знизу.</p>
                    <button class="hidden" id="loginb">Увійти</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1 class="zagolovok">Привіт, друже!</h1>
                    <p>Зареєструйтесь для комфортного користування сайтом, натиснувши кнопку знизу.</p>
                    <button class="hidden" id="registerb">Реєстрація</button>
                </div>
            </div>
        </div>
    </div>

    <script src="logreg_css_js/script.js"></script>
</body>

</html>